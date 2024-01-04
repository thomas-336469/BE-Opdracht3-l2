<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Overzicht Examens</h1>

    <a href="{{route('home')}}">Back to home</a>

    @if(count($exams) > 0)
    <table border="1">
        <thead>
            <tr>
                <th>Rijschool</th>
                <th>Stad</th>
                <th>Rijbewijs Categorie</th>
                <th>Datum</th>
                <th>Uitslag</th>
            </tr>
        </thead>
        <tbody>
            @foreach($exams as $exam)
            <tr>
                <td>{{ $exam->rijschool }}</td>
                <td>{{ $exam->stad }}</td>
                <td>{{ $exam->rijbewijs_categorie }}</td>
                <td>{{ $exam->datum }}</td>
                <td>{{ $exam->uitslag }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No exams available.</p>
    @endif
</body>

</html>