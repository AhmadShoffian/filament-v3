<?php

namespace App\Filament\Widgets;

use App\Models\Ticket;
use Flowframe\Trend\Trend;
use App\Models\TicketStatus;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\ChartWidget;

class TestChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Chart Ticket Status';

    protected int | string | array $columnSpan = 1;

    protected static ?int $sort = 4;

    protected static ?string $maxHeight = '500px';

    protected function getData(): array
    {

        $data = Trend::model(Ticket::class)
        ->between(
            start: now()->subMonth(6),
            end: now(),
        )
        ->perMonth()
        ->count();

        // dd($data);

        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
