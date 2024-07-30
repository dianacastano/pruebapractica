<!DOCTYPE html>
<html>
<head>
    <title>Vecinos</title>
</head>
<body>
    <h1>Lista de Vecinos</h1>
    <a href="{{ route('vecinos.create') }}">Añadir Vecino</a>
    <ul>
        @foreach ($vecinos as $vecino)
            <li>{{ $vecino->Nombre }} - {{ $vecino->Escalera }} - {{ $vecino->Piso }} - {{ $vecino->Puerta }}</li>
        @endforeach
    </ul>
</body>
</html>
