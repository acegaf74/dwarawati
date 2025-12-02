<table>
    <thead>
        <tr>
            <td>No.</td>
            <td>Slot</td>
            <td>Kapasitas</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($slots as $slot)
            <tr>
                <td>{{ $slot->id }}</td>
                <td>{{ $slot->start_time }}</td>
                <td><x-primary-link href="{{ route('reservation.client'),  $slot->start_time    }}">{{ $slot->capacity }}</x-primary-link></td>
            </tr>
        @endforeach
    </tbody>
</table>