<form wire:submit.prevent="submit">
    <textarea wire:model="comment" placeholder="Tulis komentar..." class="w-full p-2 border rounded"></textarea>
    @error('comment') <span class="text-red-500">{{ $message }}</span> @enderror
    <button type="submit" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded">Kirim</button>
</form>
