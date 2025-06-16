<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ticket;

class CreateTicketForm extends Component
{
    public $title;
    public $description;

    public function submit()
    {
        $ticket = Ticket::create([
            'title' => $this->title,
            'description' => $this->description,
            'owner_id' => auth()->id(),
        ]);

        // ⬇️ Log histori menggunakan Spatie Activitylog
        activity()
            ->performedOn($ticket)
            ->causedBy(auth()->user())
            ->withProperties([
                'status' => 'Open',
                'message' => 'Tiket dibuat oleh user',
            ])
            ->log('Tiket dibuat');

        session()->flash('success', 'Tiket berhasil dibuat.');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.create-ticket-form');
    }
}
