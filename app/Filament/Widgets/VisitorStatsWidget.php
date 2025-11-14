<?php

namespace App\Filament\Widgets;

use App\Models\Visitor;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Carbon\Carbon;

class VisitorStatsWidget extends BaseWidget {
    protected int | string | array $columns = [
        'default' => 2,
        'lg' => 3,
    ];

    protected function getStats(): array {
        $totalVisitors = Visitor::count();
        $todayVisitors = Visitor::whereDate( 'created_at', Carbon::today() )->count();
        $weeklyVisitors = Visitor::whereBetween( 'created_at', [
            Carbon::now()->startOfWeek(),
            Carbon::now()->endOfWeek(),
        ] )->count();

        return [
            Stat::make( 'Total Pengunjung', $totalVisitors )
            ->description( 'Semua waktu' )
            ->descriptionIcon( 'heroicon-m-globe-alt' ),

            Stat::make( 'Hari Ini', $todayVisitors )
            ->description( 'Pengunjung website sekolah hari ini' )
            ->descriptionIcon( 'heroicon-m-calendar' ),

            Stat::make( 'Minggu Ini', $weeklyVisitors )
            ->description( 'Pengunjung website sekolah minggu ini' )
            ->descriptionIcon( 'heroicon-m-chart-bar' ),
        ];
    }
}
