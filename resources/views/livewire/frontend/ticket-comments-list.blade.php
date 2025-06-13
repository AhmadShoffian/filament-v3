<div class="space-y-3">
    @foreach($comments as $comment)
        <div class="p-3 bg-gray-100 border rounded shadow-sm">
            <div class="font-semibold text-sm text-gray-700">
                {{ $comment->user->name ?? 'Anonim' }}
            </div>
            <div class="text-gray-800">
                {{ $comment->comment }}
            </div>
            <div class="text-xs text-gray-500">
                {{ $comment->created_at->diffForHumans() }}
            </div>
        </div>
    @endforeach
</div>
