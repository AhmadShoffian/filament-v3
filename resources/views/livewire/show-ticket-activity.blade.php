
<div class="max-w-3xl mx-auto mt-8">
    <h2 class="text-2xl font-bold mb-4">Detail Tiket: {{ $ticket->title }}</h2>

    <div class="bg-white rounded shadow p-4">
        <p><strong>Deskripsi:</strong> {{ $ticket->description }}</p>
        <p><strong>Status:</strong> {{ $ticket->status_id == 3 ? 'Closed' : 'Open/Proses' }}</p>
    </div>

    <h3 class="text-lg font-semibold mt-6">Riwayat Aktivitas</h3>

    <ul class="mt-2 space-y-3">
        @forelse ($logs as $log)
            <li class="bg-gray-100 p-3 rounded">
                <div class="text-sm text-gray-700">
                    <span class="font-medium">{{ $log->created_at->format('d-m-Y H:i') }}</span> –
                    <span class="font-semibold">{{ $log->causer->name ?? 'System' }}</span>
                    melakukan <span class="italic">{{ $log->description }}</span>
                </div>
                <div class="text-sm mt-1">
                    {{ $log->properties['message'] ?? '-' }}
                </div>
                @if (!empty($log->properties['status']))
                    <span class="text-xs bg-blue-200 text-blue-800 px-2 py-1 rounded mt-1 inline-block">
                        Status: {{ $log->properties['status'] }}
                    </span>
                @endif
            </li>
        @empty
            <li class="text-gray-500">Belum ada aktivitas tercatat.</li>
        @endforelse
    </ul>
</div>

