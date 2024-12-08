<?php

namespace App\Filament\Widgets;

use App\Models\Film;
use App\Models\User;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserWiget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New User',User::count())
            ->description('New users that have join')
            ->descriptionIcon('heroicon-o-user-group',IconPosition::Before)
            ->chart([1,3,5,10,20,30])
            ->color('success'),
            Stat::make('New Film',Film::count())
            ->description('New films that have been added')
            ->descriptionIcon('heroicon-o-film',IconPosition::Before)
            ->chart([1,33,4,4,20,30])
            ->color('info'),

        ];
    }
}
