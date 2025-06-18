<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\TestWidget;
use App\Filament\Widgets\TestChartWidget;
use Filament\Pages\Dashboard as BasePage;
use App\Filament\Widgets\TicketStatusesChart;

class Dashboard extends BasePage
{
    public function getColumns(): int|string|array
    {
        return 1;
    }

    public function getWidgets(): array
{
    return [
        // TicketStatusesChart::class,
        TestWidget::class,
        TestChartWidget::class,
    ];
}
}
