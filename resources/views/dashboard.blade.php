<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="border">
                        <tr class="border">
                            <th class="border">No.</th>
                            <th class="border">Nama</th>
                            <th class="border">Tanggal Masuk</th>
                            <th class="border">Perintah</th>
                        </tr>
                        @foreach ($reservations as $reservation)
                            <tr class="border">
                                <td class="border">{{ $reservation->id }}</td>
                                <td class="border">{{ Str::words($reservation->name, 3) }}</td>
                                <td class="border">{{ $reservation->date_of_entry }}</td>
                                <td class="border">
                                    <button class="btn bg-blue-500">edit</button>
                                    <button class="btn bg-red-500">hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
