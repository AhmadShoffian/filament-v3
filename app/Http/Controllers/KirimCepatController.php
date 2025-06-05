<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Peran;
use App\Models\Ticket;
use App\Models\Priority;
use App\Models\UnitKerja;
use Illuminate\Http\Request;
use App\Models\ProblemCategory;

class KirimCepatController extends Controller
{
    /**
     * Show the form for sending a quick message.
     *
     * @return \Illuminate\View\View
     */
    public function showKirimCepatForm()
    {
        $units = Unit::all();
        $unitsKerja = UnitKerja::all();
        $perans = Peran::all();
        $subKategories = ProblemCategory::all();
        $priority = Priority::all();
        return view('portal.auth.kirimcepat', compact('units', 'unitsKerja', 'perans', 'subKategories', 'priority'));
    }
    /**
     * Handle the quick message submission.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'title' => 'required|string|max:100',
            'unit_kerja' => 'required|exists:unit_kerjas,id',
            'unit' => 'required|exists:units,id',
            'peran' => 'required|exists:perans,id',
            'sub_category' => 'required|exists:problem_categories,id',
            'description' => 'required|string',
            'priority' => 'required|exists:priorities,id',
            'image' => 'nullable|file|mimes:png,jpg,jpeg,pdf|max:2048', // <-- di sini
        ]);

        try {
            $imagePath = null;

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('tickets/attachments', 'public');
            }

            $source = auth()->check() ? 'login' : 'kirim cepat';

            $ownerId = auth()->check() ? auth()->id() : null;

            $ticket = Ticket::create([
                'name' => $request->name,
                'email' => $request->email,
                'title' => $request->title,
                'unit_id' => $request->unit,
                'peran_id' => $request->peran,
                'unit_kerja_id' => $request->unit_kerja,
                'problem_category_id' => $request->sub_category,
                'description' => $request->description,
                'image' => $imagePath,
                'ticket_statuses_id' => 1,
                'priority_id' => $request->priority,
                'owner_id' => $ownerId,
                'user_id' => $ownerId,
                'source' => $source,
            ]);

            return redirect()->route('portal.viewKirimCepat')->with('success', 'Tiket berhasil dibuat');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Gagal membuat tiket: ' . $e->getMessage()]);
        }
    }

    public function viewKirimCepat()
    {
         $tickets = Ticket::paginate(4);
        return view('portal.kirimcepat.show', compact('tickets'));
    }

    public function kcdetail(Ticket $ticket)
    {
        return view('portal.kirimcepat.detail', compact('ticket'));
    }
}
