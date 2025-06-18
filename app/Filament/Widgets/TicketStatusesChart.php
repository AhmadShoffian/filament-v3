<?php

namespace App\Filament\Widgets;

use App\Models\TicketStatus;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class TicketStatusesChart extends ApexChartWidget
{
    protected static ?string $chartId = 'ticketStatusesChart';
    protected static ?string $heading = 'Statistik Tiket Berdasarkan Status';

    protected static string $color = 'primary'; // Warna header widget (opsional)

    protected int|string|array $columnSpan = 1; // Jika pakai grid di dashboard

    protected function getOptions(): array
    {
        $statuses = TicketStatus::withCount('tickets')->get();

        return [
            'chart' => [
                'type' => 'donut', // atau 'pie'
                'height' => 300,
            ],
            'labels' => $statuses->pluck('name')->toArray(),
            'series' => $statuses->pluck('tickets_count')->toArray(),
            'legend' => [
                'position' => 'bottom',
            ],
        ];
    }
}
