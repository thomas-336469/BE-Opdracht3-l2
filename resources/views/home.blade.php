<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>instructeurs</h2>
    <ul>
        <li>
            <a href="{{ route('instructeurs')}}">Instructeurs Overzicht</a>
        </li>
        <li>
            <a href="{{route('overzicht-voertuigen')}}">Beschikbare Voertuigen </a>
        </li>
        <li>
            <a href="{{route('overzicht-examens')}}">Examen Overzicht</a>
        </li>
        <li>
            <a href="{{ route('beschikbareVoertuigen.index') }}">Voertuigen Overzicht</a>

        </li>
    </ul>
</body>

</html>