<?php

namespace App\Observers;

use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class TicketObserver
{
    public function updated(Ticket $ticket): void
    {
        activity()
            ->causedBy(auth()->user())
            ->performedOn($ticket)
            ->withProperties([
                'status' => $ticket->ticket_statuses->name ?? '-', // pastikan relasi atau kolom benar
                'message' => 'Status tiket diperbarui oleh admin',
            ])
            ->log('Tiket diperbarui');
    }
}
