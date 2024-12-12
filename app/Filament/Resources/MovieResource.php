<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MovieResource\Pages;
use App\Filament\Resources\MovieResource\RelationManagers;
use App\Models\Film;
use App\Models\FilmImages;
use App\Models\View;
use Faker\Provider\ar_EG\Text;
use Filament\Actions\CreateAction;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Hamcrest\Core\Set;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MovieResource extends Resource
{
    protected static ?string $model = Film::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([

                        Section::make('Movie Information')
                            ->schema([
                                Grid::make(2)
                                ->schema([
                                    TextInput::make('title')
                                        ->label('Title')
                                        ->required()
                                        ->maxLength(255)
                                        ->columnSpan(1)
                                        ->live(onBlur: true)
                                        ->afterStateUpdated(fn(string $operation,$state,Forms\Set $set)=>$operation==='create'? $set('slug',Str::slug($state)):null),
                                    TextInput::make('slug')
                                        ->disabled()
                                        ->maxLength(255)
                                        ->required()
                                        ->dehydrated()
                                        ->unique(Film::class,'slug',ignoreRecord: true),

                                    DatePicker::make('release_date')
                                        ->label('Release Year')
                                        ->required()
                                        ->columnSpan(1),

                                    Select::make('genre_id')
                                        ->label('Genre')
                                        ->multiple()
                                        ->required()
                                        ->preload()
                                        ->relationship('genres', 'name')
                                        ->columnSpan(2),

                                    TextInput::make('duration')
                                        ->label('Duration (in minutes)')
                                        ->required()
                                        ->numeric()
                                        ->minValue(1)
                                        ->maxValue(600)
                                        ->columnSpan(1),

                                    TextInput::make('rating')
                                        ->label('Rating')
                                        ->required()
                                        ->columnSpan(1),

                                    Select::make('actor_id')
                                        ->label('Actors')
                                        ->multiple()
                                        ->required()
                                        ->preload()
                                        ->relationship('actors', 'name')
                                        ->columnSpan(1),
                                    Select::make('type')
                                        ->options([
                                            'show' => 'Show',
                                            'movie' => 'Movie',
                                        ])
                                        ->required()
                                        ->columnSpan(1),
                                    Forms\Components\Toggle::make('status')
                                        ->label('Status')
                                        ->default(true)
                                        ->columnSpan(1),
                                    MarkdownEditor::make('description')
                                        ->label('Description')
                                        ->columnSpanFull(),
                                ]),
                            ])
                            ->columns(2)
                            ->columnSpanFull(),
                    ]),


                Group::make()
                    ->schema([
                        Section::make('Additional Details')
                            ->schema([
                                Grid::make(2)
                                ->schema([
                                    Repeater::make('video_path')
                                        ->label('Path')
                                        ->schema([
                                            TextInput::make('url')
                                                ->label('Video Link')
                                                ->required()
                                                ->url(),
                                        ])
                                        ->defaultItems(1)
                                        ->columnSpan(2),
                                    Forms\Components\Section::make('film_images')
                                        ->relationship('filmImages')  // Liên kết với FilmImage
                                        ->schema([

                                            TextInput::make('backgrounds')
                                                ->required()
                                                ->label('Backgrounds')
                                                // Tiêu đề cho trường
                                            ,
                                            Forms\Components\View::make('components.backgrounds-preview')
                                                ->label('Preview'),

                                            TextInput::make('posters')
                                                ->required()
                                                ->label('Posters') // Tiêu đề cho trường
                                               ,
                                            Forms\Components\View::make('components.poster-preview')
                                                ->label('Preview'),

                                        ])
                                        ->collapsible()  // Cho phép gập lại mỗi mục
                                    ->columnSpan(2),
                                ]),


                            ])
                            ->columnSpanFull(),
                    ]),

            ]);
    }

    public static function mutateFormDataBeforeCreate(array $data): array
    {
        $film = Film::create($data);

        // Sau khi tạo phim xong, lấy ID của phim vừa tạo
        // và tạo bản ghi mới trong bảng film_images
        FilmImages::create([
            'film_id' => $film->id, // Gán ID của phim vào cột film_id
            'backgrounds' => $data['backgrounds'], // Lưu backgrounds từ $data
            'posters' => $data['posters'],         // Lưu posters từ $data
        ]);

        // Trả về $data
        return $data;
    }
    public static function mutateFormDataBeforeSave(array $data): array
    {
        // Tìm phim hiện tại dựa trên ID trong $data
        $film = Film::find($data['id']);

        // Kiểm tra xem đã có bản ghi trong bảng film_images chưa
        $filmImages = $film->filmImages()->first();

        // Nếu đã có, thì cập nhật backgrounds và posters
        if ($filmImages) {
            $filmImages->update([
                'backgrounds' => $data['backgrounds'], // Cập nhật backgrounds
                'posters' => $data['posters'],         // Cập nhật posters
            ]);
        } else {
            // Nếu chưa có, thì tạo bản ghi mới
            FilmImages::create([
                'film_id' => $film->id,   // Gán ID của phim
                'backgrounds' => $data['backgrounds'],
                'posters' => $data['posters'],
            ]);
        }

        // Trả về $data
        return $data;
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
                TextColumn::make('release_date'),
                TextColumn::make('duration')->sortable(),
                TextColumn::make('rating'),
                TextColumn::make('video_path')
                    ->formatStateUsing(function ($record) {
                        $links = json_decode($record->links, true);

                        if (is_array($links)) {
                            return implode(', ', array_column($links, 'url'));
                        }

                        return ''; // Trả về chuỗi rỗng nếu không có liên kết
                    })
                ->hidden(fn () => true),

                ImageColumn::make('backgrounds')
                    ->label('Background Images')
                    ->getStateUsing(function ($record) {
                        $backgrounds = json_decode($record->filmImages->backgrounds, true);
                        return is_array($backgrounds) && count($backgrounds) > 0 ? $backgrounds[0] : null;
                    })
                    ->size(50)
                    ->circular()
                ,

                ImageColumn::make('posters')
                    ->label('Poster Images')
                    ->size(50)
                    ->getStateUsing(function ($record) {
                        $posters = json_decode($record->filmImages->posters, true);

                        return is_array($posters) && count($posters) > 0 ? $posters[0] : null;
                    })
                    ->circular()
                    ,

                TextColumn::make('genres')
                    ->label('Genres')
                    ->formatStateUsing(function ($record) {
                        return $record->genres->pluck('name')->join(', ');
                    })
                    ->sortable()
                    ->searchable(),
                TextColumn::make('type')
                    ->label('Type')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->hidden(fn () => true),
                ImageColumn::make('actors.images')
                    ->label('Actors')
                    ->circular()
                    ->stacked()
                    ->limit(1)
                    ->hidden(fn () => true),
                Tables\Columns\IconColumn::make('status')
                ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMovies::route('/'),
            'create' => Pages\CreateMovie::route('/create'),
            'edit' => Pages\EditMovie::route('/{record}/edit'),
        ];
    }
}
