<!-- resources/views/instructeurs/edit.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Edit Instructeur</title>
</head>

<body>
    <h1>Edit Instructeur</h1>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>

    @endif

    <a href="{{ route('instructeurs')}}">terug naar instructeur overzicht</a>

    <form method="post" action="{{ route('instructeurs.update',$instructeur->id) }}">
        @csrf
        @method('put')

        <label for="voornaam">Voornaam:</label>
        <input type="text" name="voornaam" value="{{ $instructeur->voornaam }}" required><br>

        <label for="tussenvoegsel">Tussenvoegsel:</label>
        <input type="text" name="tussenvoegsel" value="{{ $instructeur->tussenvoegsel }}"><br>

        <label for="achternaam">Achternaam:</label>
        <input type="text" name="achternaam" value="{{ $instructeur->achternaam }}" required><br>

        <label for="mobiel">Mobiel:</label>
        <input type="text" name="mobiel" value="{{ $instructeur->mobiel }}" required><br>

        <label for="datum_in_dienst">Datum in Dienst:</label>
        <input type="date" name="datum_in_dienst" value="{{ $instructeur->datum_in_dienst }}" required><br>

        <label for="aantal_sterren">Aantal Sterren:</label>
        <input type="number" name="aantal_sterren" value="{{ $instructeur->aantal_sterren }}" required><br>

        <label for="is_actief">Is Actief:</label>
        <input type="checkbox" name="is_actief" value=" {{ $instructeur->is_actief ? 'checked' : '' }}"><br>

        <label for="opmerkingen">Opmerkingen:</label>
        <textarea name="opmerkingen">{{ $instructeur->opmerkingen }}</textarea><br>

        <button type="submit">Update Instructeur</button>
    </form>
</body>

</html>