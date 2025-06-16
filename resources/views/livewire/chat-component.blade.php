<div class="flex flex-col min-h-screen bg-gray-100">

    {{-- HEADER --}}
    <div class="h-16 bg-green-500 text-white flex items-center justify-between px-4 shadow z-10">
        <a href="/dashboard" class="flex items-center">
            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M9.41 11H17a1 1 0 0 1 0 2H9.41l2.3 2.3a1 1 0 1 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 0 1 1.42 1.4L9.4 11z" />
            </svg>
        </a>
        <div class="font-semibold text-lg truncate">
            {{ $ticket->owner?->name }}
        </div>


        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path
                d="M12 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
        </svg>
    </div>

    {{-- CHAT MESSAGES --}}
    <div class="flex-1 overflow-y-auto px-4 py-4 space-y-2">
        @forelse($messages as $message)
            @php $isMe = $message['sender'] === auth()->user()->name; @endphp
            <div class="flex {{ $isMe ? 'justify-end' : 'justify-start' }}">
                <div
                    class="px-4 py-2 rounded-lg max-w-xs text-sm {{ $isMe ? 'bg-green-300 text-right' : 'bg-gray-200 text-left' }}">
                    @unless ($isMe)
                        <div class="font-semibold text-xs text-gray-700">{{ $message['sender'] }}</div>
                    @endunless
                    <div>{{ $message['message'] }}</div>
                    @if ($isMe)
                        <div class="text-xs text-gray-600 mt-1">You</div>
                    @endif
                </div>
            </div>
        @empty
            <p class="text-sm text-gray-500 text-center">Belum ada pesan.</p>
        @endforelse
    </div>

    {{-- INPUT FORM --}}
    <form wire:submit.prevent="sendMessage" class="bg-white border-t px-4 py-3 flex items-center gap-2">
        <textarea wire:model="comment" rows="1" placeholder="Tulis pesan..."
            class="flex-1 resize-none rounded-full px-4 py-2 border border-gray-300 bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-400 text-sm"></textarea>

        <button type="submit"
            class="w-10 h-10 bg-green-500 text-white rounded-full flex items-center justify-center hover:bg-green-600 transition">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 512 512">
                <path
                    d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z" />
            </svg>
        </button>
    </form>

</div>