<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!DOCTYPE HTML>
    <html lang="es">
        <head>
            <title> Login </title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous"/>
        </head>

        <body class="bg-info d-flex justify-content-center align-items-center vh-100">
            <div class="rounded-3 bg-white p-5">{{-- aca es la caja princpial --}}
           
           <h1>Crear medicos </h1>
           <form action="{{ url('/medicos') }}" method="post">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>
            <br>

            <label for="matricula">Matrícula:</label>
            <input type="text" name="matricula" required>
            <br>

            <label for="especialidad">Especialidad:</label>
            <input type="text" name="especialidad" required>
            <br>

            <label for="fecha_ingreso">Fecha de Ingreso:</label>
            <input type="date" name="fecha_ingreso" required>
            <br>

            <button type="submit">Guardar</button>
        </form>
        </div>
      </body>
    </html>