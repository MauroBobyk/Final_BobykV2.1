<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!DOCTYPE HTML>
    <html lang="es">
        <head>
            <title> registro de personal </title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous" />
        </head>
        
    <div class="text-center"><h1> Registro de personal</h1></div>
    
    <form method="POST" action="{{route('validar-registro')}}">
        @csrf
        <label for="name" class="form-lavel">name</label>
        <input type="name" class="form-label" id="nombreInnput" name="name" required autocomplete="disabled">
        <label for="password" class="form-lavel">password</label>
        <input type="password" class="form-label" id="passwordInput" name="password" required autocomplete="disabled">
    <div>  <button type="submit">registrar</button></div>
</form>

</html>