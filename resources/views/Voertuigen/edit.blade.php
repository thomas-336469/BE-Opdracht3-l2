<!-- resources/views/voertuigen/edit.blade.php -->

<h1>Edit Voertuig</h1>

<form action="{{ route('overzicht-voertuigen.update', ['id' => $voertuig->id]) }}" method="post">
    @csrf
    @method('PUT')

    <label for="kenteken">Kenteken:</label>
    <input type="text" id="kenteken" name="kenteken" value="{{ $voertuig->kenteken }}" required>

    <label for="bouwjaar">Bouwjaar:</label>
    <input type="text" id="bouwjaar" name="bouwjaar" value="{{ $voertuig->bouwjaar }}" required>

    <label for="type_voertuig_id">type_voertuig:</label>
    <input type="text" id="type_voertuig_id" name="type_voertuig_id" value="{{ $voertuig->type_voertuig_id }}" required>

    <label for="brandstof">Brandstof:</label>
    <input type="text" id="brandstof" name="brandstof" value="{{ $voertuig->brandstof }}" required>

    <!-- Add more fields as needed -->

    <button type="submit">Update Voertuig</button>
</form>