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
           
           <h1>Crear Paciente</h1>
           @if(session('success'))
               <p style="color: green;">{{ session('success') }}</p>
               @endif
       @if (session('error'))
       <p style="color: red;">{{ session('error') }}</p>
       @endif
           <form  method="post" action="{{ route('pacientes.store') }}" >
            @csrf
           
            <div>
            <label for="nombre_apellido">Nombre y Apellido:</label>
            <input type="text" name="nombre_apellido" required><br>
           </div>

           <div>
            <label for="dni">DNI:</label>
            <input type="text" name="dni" required><br>
        </div>
           
            <div>
            <label for="edad">Edad:</label>
            <input type="text" name="edad" required><br>
        </div>
           
            <div>
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" required><br>
        </div>
           
            <div>
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" required><br>
        </div>

        <div><button type="submit">Guardar</button>    </div>
           </form>   
        </div>
           

             
          
           
      </body>
    </html>
