<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Paciente</title>
</head>
<body>
    <h1>Crear Paciente</h1>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
        @endif
@if (session('error'))
<p style="color: red;">{{ session('error') }}</p>
@endif


    <form  method="post" action="{{ route('pacientes.store') }}" >
        @csrf

        <label for="nombre_apellido">Nombre y Apellido:</label>
        <input type="text" name="nombre_apellido" required><br>

        <label for="dni">DNI:</label>
        <input type="text" name="dni" required><br>

        <label for="edad">Edad:</label>
        <input type="text" name="edad" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" required><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" required><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
