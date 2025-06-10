<x-filament::page>
    <div class="space-y-6">
        <x-filament::section>
            <x-slot name="heading">{{ $ticket->subject }}</x-slot>
            <x-slot name="description">{{ $ticket->description }}</x-slot>

            <div class="space-y-4">
                @foreach ($ticket->comments as $comment)
                    <div class="border p-4 rounded">
                        <div class="flex justify-between items-center text-sm text-gray-600 mb-2">
                            <span><strong>{{ $comment->user->name }}</strong></span>
                            <span>{{ $comment->created_at->diffForHumans() }}</span>
                        </div>
                        <div class="prose">{!! nl2br(e($comment->comment)) !!}</div>
                        @if ($comment->attachments)
                            <a class="text-blue-600 underline" href="{{ asset('storage/' . $comment->attachments) }}" download>
                                Unduh Lampiran
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>
        </x-filament::section>

        <x-filament::section>
            <x-slot name="heading">Tambah Komentar</x-slot>

            <form wire:submit.prevent="submitComment" class="space-y-4">
                <x-filament::textarea
                    wire:model.defer="newComment"
                    label="Komentar"
                    required
                />
                <x-filament::file-upload
                    wire:model="attachment"
                    label="Lampiran (opsional)"
                />
                <x-filament::button type="submit">
                    Kirim Komentar
                </x-filament::button>
            </form>
        </x-filament::section>
    </div>
</x-filament::page>
