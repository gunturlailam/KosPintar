<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Kamar', '20')
                ->description('3 Kamar Kosong')
                ->descriptionIcon('heroicon-m-home')
                ->color('success'),
            Stat::make('Pendapatan Bulan Ini', 'Rp. 15.000.000')
                ->description('Naik 10% dari bulan lalu')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('info'),
            Stat::make('Calon Penghuni', '5')
                ->description('Menunggu konfirmasi')
                ->descriptionIcon('heroicon-m-user-group'),
        ];
    }
}
