<?php

namespace App\Filament\Widgets;

use App\Models\Document;
use App\Models\Thread;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count()), 
            Stat::make('Total Documents', Document::count()),
            Stat::make('Total Chats', Thread::count()),
        ];
    }
}