<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Tiket</title>
    @vite('resources/css/app.css') {{-- atau sesuaikan dengan cara load CSS Tailwind --}}
    @livewireStyles
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold mb-4">Detail Tiket #{{ $ticket->id }}</h1>

        <livewire:frontend.ticket-comment-form :ticket="$ticket" />

        <livewire:frontend.ticket-comments-table :ticket="$ticket" />
    </div>

    @livewireScripts
</body>
</html>
