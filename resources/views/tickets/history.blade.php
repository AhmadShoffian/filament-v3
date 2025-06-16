<pre>{{ var_dump($ticket) }}</pre>

<h2 class="text-lg font-bold mb-4">Riwayat Aktivitas Tiket</h2>

@if ($activityLogs->isEmpty())
    <p>Tidak ada riwayat untuk tiket ini.</p>
@else
    <ul class="space-y-4">
        @foreach ($activityLogs as $log)
            <li class="p-4 border rounded shadow-sm bg-white">
                <div class="text-sm text-gray-500">
                    <strong>{{ $log->causer->name ?? 'Sistem' }}</strong> —
                    {{ $log->created_at->format('d-m-Y H:i') }}
                </div>
                <div class="mt-1">
                    <strong>{{ $log->description }}</strong>
                    <div>Status: {{ $log->properties['status'] ?? '-' }}</div>
                    <div>Pesan: {{ $log->properties['message'] ?? '-' }}</div>
                </div>
            </li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('tickets.close', $ticket->id) }}">
    @csrf
    @method('PUT')
    <button type="submit"
        class="mt-6 px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition">
        Tutup Tiket
    </button>
</form>
<p class="mt-4 text-green-600 font-semibold">Form muncul di bawah sini.</p>
gggg


