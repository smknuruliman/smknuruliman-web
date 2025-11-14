<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Staff;
use App\Models\Article;
use App\Models\Teacher;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    // protected int | string | array $columns = 2; // 🔥 ini bikin grid 2 kolom

    // protected function getStats(): array
    // {
    //     $total = Teacher::count() + Staff::count(); //gabungin data guru dan satff
    //     return [
    //         Stat::make('Total Akun', User::count())
    //             ->extraAttributes([g,  
    //                 'class' => 'flex flex-col items-center justify-center text-center',
    //             ]),

    //         Stat::make('Total Teacher & Staff', $total)
    //             ->extraAttributes([
    //                 'class' => 'flex flex-col items-center justify-center text-center',
    //             ]),

    //         Stat::make('total article', Article::count())
    //             ->extraAttributes([
    //                 'class' => 'flex flex-col items-center justify-center text-center',
    //             ]),
    //     ];
    // }
}
