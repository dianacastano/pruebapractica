<!DOCTYPE html>
<html>
<head>
    <title>Añadir Vecino</title>
</head>
<body>
    <h1>Añadir Vecino</h1>
    <form action="{{ route('vecinos.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="Nombre" required>
        <br>
        <label>Escalera:</label>
        <input type="text" name="Escalera">
        <br>
        <label>Piso:</label>
        <input type="number" name="Piso">
        <br>
        <label>Puerta:</label>
        <input type="text" name="Puerta">
        <br>
        <label>ID Comunidad:</label>
        <input type="number" name="id_comunidad" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
