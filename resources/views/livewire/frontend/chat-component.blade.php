<div class="w-full h-screen flex flex-col p-6 bg-gray-50 space-y-6">


    <div>
        <h2 class="text-xl font-bold text-gray-800">#{{ $ticket->id }} - {{ $ticket->subject }}</h2>
        <p class="text-sm text-gray-500">Dibuat {{ $ticket->created_at->diffForHumans() }}</p>
    </div>


    <div class="space-y-4 max-h-[400px] overflow-y-auto pr-2">
        @forelse ($comments as $comment)
            <div class="{{ $comment->user_id === auth()->id() ? 'text-right' : 'text-left' }}">
                <div class="inline-block max-w-xs p-3 rounded-lg text-sm
                    {{ $comment->user_id === auth()->id() ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-800' }}">
                    <div class="font-semibold text-xs">
                        {{ $comment->user->name ?? 'Anonim' }}
                    </div>
                    <div class="mt-1">{{ $comment->comment }}</div>
                    <div class="text-[10px] text-gray-300 mt-1">
                        {{ $comment->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>
        @empty
            <p class="text-sm text-gray-500">Belum ada komentar.</p>
        @endforelse
    </div>


    <form wire:submit.prevent="submit" class="flex gap-2 items-start">
        <textarea wire:model.defer="comment"
                  rows="2"
                  class="flex-1 p-2 border rounded w-full"
                  placeholder="Tulis komentar..."></textarea>
        <button type="submit">
            Kirim
        </button>
    </form>

</div>



