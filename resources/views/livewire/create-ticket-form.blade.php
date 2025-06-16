<div>
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form wire:submit.prevent="submit">
        <div>
            <label>Judul</label>
            <input type="text" wire:model="title" />
        </div>

        <div>
            <label>Deskripsi</label>
            <textarea wire:model="description"></textarea>
        </div>

        <button type="submit">Kirim Tiket</button>
    </form>
</div>
