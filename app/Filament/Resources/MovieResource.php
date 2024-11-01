<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MovieResource\Pages;
use App\Filament\Resources\MovieResource\RelationManagers;
use App\Models\Movie;
use Faker\Provider\ar_EG\Text;
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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MovieResource extends Resource
{
    protected static ?string $model = Movie::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        Section::make([
                            TextInput::make('title')
                                ->required()
                                ->maxLength(255)
                                ->columnSpanFull(), // Full width

                            DatePicker::make('release_year')
                                ->format('Y')
                                ->required()
                                ->columnSpanFull(), // Full width

                            Select::make('genre_id')
                                ->multiple()
                                ->required()
                                ->preload()
                                ->relationship('genres', 'name')
                                ->columnSpanFull(), // Full width

                            TextInput::make('duration')
                                ->label('Duration (in minutes)')
                                ->required()
                                ->numeric()
                                ->minValue(1)
                                ->maxValue(600)
                                ->columnSpanFull(), // Full width

                            TextInput::make('rating')
                                ->required()
                                ->columnSpanFull(), // Full width

                            Select::make('actor_id')
                                ->multiple()
                                ->required()
                                ->preload()
                                ->relationship('actors', 'name')
                                ->columnSpanFull(), // Full width

                        ])
                            ->columns(2) // This sets the section into 2 columns
                            ->columnSpanFull()
                    ]),
                Group::make()
                    ->schema([
                        Repeater::make('links')
                            ->label('Links')
                            ->schema([
                                TextInput::make('url')
                                    ->label('Link')
                                    ->required()
                                    ->url(),
                            ])
                            ->defaultItems(1),
                        FileUpload::make('images')
                            ->image()
                            ->multiple()
                            ->directory('movies'),
                        MarkdownEditor::make('description')
                            ->columnSpanFull()
                    ])
                    ->columnSpanFull()


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
                TextColumn::make('release_year'),
                TextColumn::make('duration')->sortable(),
                TextColumn::make('rating'),
                TextColumn::make('links')
                    ->formatStateUsing(function ($record) {
                        // Giải mã JSON để lấy mảng
                        $links = json_decode($record->links, true);

                        // Kiểm tra xem có phải là mảng không
                        if (is_array($links)) {
                            // Lấy ra các URL từ mảng và kết hợp chúng thành một chuỗi
                            return implode(', ', array_column($links, 'url'));
                        }

                        return ''; // Trả về chuỗi rỗng nếu không có liên kết
                    }),

                ImageColumn::make('images'),
                TextColumn::make('genres')
                    ->label('Genres')
                    ->formatStateUsing(function ($record) {
                        return $record->genres->pluck('name')->join(', '); // Hiển thị genres
                    })
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description'),
                ImageColumn::make('actors.images') // Chỉ định trường images từ mối quan hệ actors
                    ->label('Actors')
                    ->circular()
                    ->stacked()
                    ->limit(1) // Giới hạn số lượng hình ảnh hiển thị nếu cần


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
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
