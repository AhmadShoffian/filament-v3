<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Image;
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
            'username' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'title' => 'required|string|max:100',
            'unit_kerja' => 'required|exists:unit_kerjas,id',
            'unit' => 'required|exists:units,id',
            'peran' => 'required|exists:perans,id',
            'sub_category' => 'required|exists:problem_categories,id',
            'description' => 'required|string',
            'priority' => 'required|exists:priorities,id',
            'image' => 'nullable|file|mimes:png,jpg,jpeg,pdf|max:2048',
        ]);

        try {
            $imagePath = null;

            // ✅ Cek jika file dikirim
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('tickets/attachments', 'public');
            }

            $source = auth('portal')->check() ? 'login' : 'kirim cepat';
            $ownerId = auth('portal')->check() ? auth('portal')->id() : null;

            $ticket = Ticket::create([
                'username' => $request->username,
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

            $uploadedFiles = session()->get('uploaded_files', []);
            foreach ($uploadedFiles as $filename) {
                Image::create([
                    'ticket_id' => $ticket->id,
                    'filename' => $filename
                ]);
            }

            session()->forget('uploaded_files');

            return redirect()->route('portal.viewKirimCepat')->with('success', 'Tiket berhasil dibuat');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Gagal membuat tiket: ' . $e->getMessage()]);
        }
    }


    public function viewKirimCepat()
    {
        $tickets = Ticket::where('source', 'kirim cepat')
            ->orderByDesc('created_at')
            ->paginate(4);

        return view('portal.kirimcepat.show', compact('tickets'));
    }


    public function kcdetail(Ticket $ticket)
    {
        return view('portal.kirimcepat.detail', compact('ticket'));
    }

    public function uploadLampiran(Request $request)
{
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $filename = time() . '_' . rand(1, 100) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("images"), $filename);

        // Simpan nama file ke session (belum ada ticket_id saat ini)
        $uploadedFiles = session()->get('uploaded_files', []);
        $uploadedFiles[] = $filename;
        session()->put('uploaded_files', $uploadedFiles);

        return response()->json([
            'success' => true,
            'filename' => $filename
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'Tidak ada file ditemukan.'
    ], 400);
}

}
