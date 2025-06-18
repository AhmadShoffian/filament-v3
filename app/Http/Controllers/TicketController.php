<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class TicketController extends Controller
{
  public function show($id)
    {
        $ticket = Ticket::findOrFail($id);

        $logs = Activity::where('subject_type', Ticket::class)
            ->where('subject_id', $ticket->id)
            ->latest()
            ->get();

        return view('tickets.history', compact('ticket', 'logs'));
    }
}
