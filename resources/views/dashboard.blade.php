<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Tanggal Masuk</th>
                            <th>Perintah</th>
                        </tr>
                        @foreach ($reservations as $reservation)
                            <tr>
                                <td>{{ $reservation->id }}</td>
                                <td>{{ Str::words($reservation->name, 3) }}</td>
                                <td>{{ $reservation->date_of_entry }}</td>
                                <td>
                                    <button class="btn bg-blue-500">edit</button>
                                    <button class="btn bg-red-500">hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="flex items-center justify-start">
                        {{ $reservations->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
