<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ticket;
use Spatie\Activitylog\Models\Activity;

class ShowTicketActivity extends Component
{
    public $ticketId;
    public $ticket;
    public $logs = [];

    public function mount($ticketId)
    {
        $this->ticket = Ticket::findOrFail($ticketId);

        $this->logs = Activity::where('subject_type', Ticket::class)
            ->where('subject_id', $this->ticket->id)
            ->latest()
            ->get();
    }

    public function render()
    {
        return view('livewire.show-ticket-activity');
    }
}
