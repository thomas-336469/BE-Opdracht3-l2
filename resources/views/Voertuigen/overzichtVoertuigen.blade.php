<!-- resources/views/Voertuigen/overzichtVoertuigen.blade.php -->

<h1>Voertuigen</h1>

<a href="{{ route('home') }}">Back to home</a>
<table border="1">
    <thead>
        <tr>
            <th>Kenteken</th>
            <th>Type</th>
            <th>Bouwjaar</th>
            <th>Brandstof</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach($voertuigs as $voertuig)
        <tr>
            <td>{{ $voertuig->kenteken }}</td>
            <td>{{ $voertuig->typeVoertuig->type_voertuig }}</td>
            <td>{{ $voertuig->bouwjaar }}</td>
            <td>{{ $voertuig->brandstof }}</td>
            <td><a href="{{ route('overzicht-voertuigen.edit', ['id' => $voertuig->id]) }}">Edit</a></td>

        </tr>
        @endforeach
    </tbody>
</table>