<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Peran;
use App\Models\Ticket;
use App\Models\Priority;
use App\Models\UnitKerja;
use Illuminate\Http\Request;
use App\Models\ProblemCategory;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('portal.home.dashboard');

    }

   public function create()
    {
         $units = Unit::all();
         $unitsKerja = UnitKerja::all();
         $perans = Peran::all();
         $subKategories = ProblemCategory::all();
         $priority = Priority::all();
        return view('portal.home.create', compact('units', 'unitsKerja', 'perans', 'subKategories', 'priority'));
    }

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
                'owner_id' => auth('portal')->id(),
                'user_id' => auth('portal')->id(),
            ]);

            return redirect()->route('tickets.show')->with('success', 'Tiket berhasil dibuat');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Gagal membuat tiket: ' . $e->getMessage()]);
        }
    }

    public function show()
    {
        $tickets = Ticket::all();
        return view('portal.home.show', compact('tickets'));
    }

    public function detail(Ticket $ticket)
    {
        return view('portal.home.detail', compact('ticket'));
    }

}
