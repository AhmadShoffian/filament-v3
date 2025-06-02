<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KirimCepatController extends Controller
{
    /**
     * Show the form for sending a quick message.
     *
     * @return \Illuminate\View\View
     */
    public function showKirimCepatForm()
    {
        return view('portal.auth.kirimcepat');
    }
    /**
     * Handle the quick message submission.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function kirimCepat(Request $request)
    {
        // Validate the request data
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        // Process the message (e.g., save to database, send notification, etc.)
        // For now, we'll just flash a success message to the session
        session()->flash('success', 'Pesan berhasil dikirim!');

        // Redirect back to the form
        return redirect()->route('portal.kirimcepat');
}
}
