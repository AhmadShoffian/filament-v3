<?php

namespace App\Filament\Exports;

use App\Models\Ticket;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class TicketExporter extends Exporter
{
    protected static ?string $model = Ticket::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('id'),
            ExportColumn::make('priority_id'),
            ExportColumn::make('unit_id'),
            ExportColumn::make('peran_id'),
            ExportColumn::make('unit_kerja_id'),
            ExportColumn::make('owner_id'),
            ExportColumn::make('user_id'),
            ExportColumn::make('source'),
            ExportColumn::make('problem_category_id'),
            ExportColumn::make('title'),
            ExportColumn::make('username'),
            ExportColumn::make('email'),
            ExportColumn::make('description'),
            ExportColumn::make('ticket_statuses_id'),
            ExportColumn::make('responsible_id'),
            ExportColumn::make('image'),
            ExportColumn::make('approved_at'),
            ExportColumn::make('solved_at'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your ticket export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
