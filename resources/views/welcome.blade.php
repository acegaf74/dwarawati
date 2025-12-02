<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <main class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Kapasitas Basecamp</h1>
                    <form id="searchDay">
                        @csrf
                        <x-input-label for="slot" value="{{ __('Pilih Slot') }}" />
                        <select class="py-2.5 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs" name="slot" id="slot">
                            @foreach ($dateSlots as $slot)
                                <option value="{{ $slot->start_time }}">{{ Carbon\Carbon::parse($slot->start_time)->format('D, d M Y') }}</option>
                            @endforeach
                        </select>
                        <x-primary-button>
                            {{ __('Cari') }}
                        </x-primary-button>
                    </form>
                    <div id="basecamp">

                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.getElementById("searchDay").addEventListener("submit",function showSlots(e) {
            e.preventDefault();
            const token = document.querySelector("input[name='_token']").value;
            const day = document.getElementById("slot").value;
            console.log({day});
            
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("basecamp").innerHTML = this.responseText;
            }
            xhttp.open("POST", "{{ route('search') }}");
            xhttp.setRequestHeader('X-CSRF-Token', token);
            xhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
            xhttp.send(JSON.stringify({day}));
        });
    </script>
</body>
</html>