<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center flex flex-col items-center justify-center gap-4">
                    <table class="border">
                        <thead>
                            <tr class="border">
                                <th>{{ __('No.') }}</th>
                                <th>{{ __('Nama') }}</th>
                                <th>{{ __('No. Telpon') }}</th>
                                <th>{{ __('Perintah') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                                <tr class="border">
                                    <td>{{ __($reservation->id) }}</td>
                                    <td><button x-data="" x-on:click.prevent="$dispatch('open-modal', 'reservation-admin')">{{ __(Str::words($reservation->name, 3)) }}</button></td>
                                    <td>{{ __($reservation->phone_number) }}</td>
                                    <td>
                                        <x-secondary-button>edit</x-secondary-button>
                                        <x-danger-button>hapus</x-danger-button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="flex items-center justify-start">
                        {{ $reservations->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
