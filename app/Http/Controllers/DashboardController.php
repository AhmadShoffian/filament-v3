<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\User;
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

            $source = auth('portal')->check() ? 'login' : 'kirim cepat';
            $ownerId = auth('portal')->check() ? auth('portal')->id() : null;

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

            return redirect()->route('tickets.show')->with('success', 'Tiket berhasil dibuat');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Gagal membuat tiket: ' . $e->getMessage()]);
        }
    }

    public function show()
    {
        $tickets = Ticket::where('source', 'login')
                    ->orderByDesc('created_at')
                    ->paginate(4);
        return view('portal.home.show', compact('tickets'));
    }

   public function detail(Ticket $ticket)
{
    $users = User::where('id', '!=', auth()->id())->get();
    $tickets = Ticket::where('user_id', auth()->id())->get(); // atau filter sesuai kebutuhan

    return view('portal.home.detail', compact('ticket', 'users', 'tickets'));
}


}
