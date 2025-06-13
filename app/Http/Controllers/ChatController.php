<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function show($id)
{
    $users = User::where('id', '!=', auth()->id())->get();
    $tickets = Ticket::where('user_id', auth()->id())->get();

    return view('chat', [
        'id' => $id,
        'users' => $users, // ← ini yang penting
        'tickets' => $tickets, // ← ini yang penting
    ]);
}
}
