<!DOCTYPE html>
<html>

<head>
    <title>Instructeurs</title>

<body>
    <h1>Instructeurs</h1>

    <a href="{{route('home')}}">Back to home</a>

    <table border="1">
        <tr>
            <th>Voornaam</th>
            <th>Tussenvoegsel</th>
            <th>Achternaam</th>
            <th>Mobiel</th>
            <th>Datum in Dienst</th>
            <th>Aantal Sterren</th>
            <th>Is Actief</th>
            <th>Opmerkingen</th>
            <th>Actions</th> <!-- Added column for actions -->
        </tr>

        @foreach($instructeurs as $instructeur)
        <tr>
            <td>{{ $instructeur->voornaam }}</td>
            <td>{{ $instructeur->tussenvoegsel }}</td>
            <td>{{ $instructeur->achternaam }}</td>
            <td>{{ $instructeur->mobiel }}</td>
            <td>{{ $instructeur->datum_in_dienst }}</td>
            <td>{{ $instructeur->aantal_sterren }}</td>
            <td>
                <span class="toggle-icon" onclick="toggleStatus('{{ $instructeur->id }}', '{{ $instructeur->is_actief }}')">
                    @if($instructeur->is_actief)
                    <i id="icon-{{ $instructeur->id }}" class="far fa-thumbs-up"></i>
                    @else
                    <i id="icon-{{ $instructeur->id }}" class="far fa-thumbs-down"></i>
                    @endif
                </span>
            </td>
            <td>{{ $instructeur->opmerkingen }}</td>
            <td>
                <a href="{{ route('instructeurs.edit', $instructeur->id) }}">Edit</a>


                <form method="POST" action="{{ route('instructeurs.destroy', $instructeur->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this instructeur?')">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>
    <script src="https://kit.fontawesome.com/c21a6ebb15.js" crossorigin="anonymous"></script>

    <script>
        function toggleStatus(instructeurId, currentStatus) {
            const url = `{{ route('instructeurs.toggleStatus', '') }}/${instructeurId}`;
            const newStatus = currentStatus === '1' ? '0' : '1';
            fetch(url, {
                    method: 'PATCH',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        is_actief: newStatus
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    const iconElement = document.querySelector(`#icon-${instructeurId}`);
                    const textElement = document.querySelector(`#text-${instructeurId}`);

                    iconElement.className = data.is_actief ? 'far fa-thumbs-up' : 'far fa-thumbs-down';
                    textElement.textContent = data.is_actief ? 'Yes' : 'No';

                    // Check if the operation was successful and show a popup
                    if (data.success) {
                        alert(data.message);
                        // Redirect to instructeur page after 3 seconds
                        setTimeout(() => {
                            window.location.replace("{{ route('instructeurs') }}");
                        }, 3000);
                    } else {
                        console.error('Error:', data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>
</body>

</html>