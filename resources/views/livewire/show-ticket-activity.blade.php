<div>
    <div class="mt-4 border rounded p-3">
        <h5 class="fw-bold mb-3">Riwayat Pekerjaan</h5>

        @forelse ($logs as $log)
            <div class="d-flex justify-content-between border-bottom py-2">
                <div>
                    <span class="text-muted">[{{ $log->created_at->format('d-m-Y / H:i:s') }}]</span> -
                    Ticket Status :
                    @php
                        $status = strtolower($log->properties['status'] ?? '');
                        $color = match($status) {
                            'open' => 'text-success',
                            'processed' => 'text-warning',
                            'closed' => 'text-danger',
                            default => 'text-secondary'
                        };
                    @endphp
                    <span class="fw-bold {{ $color }}">
                        {{ ucfirst($log->properties['status'] ?? 'Unknown') }}
                    </span>
                    <br>
                    <small class="text-muted">{{ $log->description }}</small>
                </div>
                <div class="text-end small text-muted">
                    {{ $log->properties['message'] ?? '-' }}
                </div>
            </div>
        @empty
            <div class="text-muted">Belum ada riwayat untuk tiket ini.</div>
        @endforelse
    </div>

    @if(strtolower($ticket->status) !== 'closed')
        <form method="POST" action="{{ route('tickets.close', $ticket->id) }}" class="mt-3 text-center">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-danger px-4">
                CLOSE TICKET
            </button>
        </form>
    @else
        <div class="mt-3 text-center">
            <button class="btn btn-secondary px-4" disabled>
                Ticket Closed
            </button>
        </div>
    @endif
</div>
