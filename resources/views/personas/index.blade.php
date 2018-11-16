<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre Completo</th>
        <th>Sexo</th>
        <th>Telefono</th>
        <th>CI</th>
        <th>Peso</th>
        <th colspan="2">Opciones</th>
      </tr>
    </thead>
    <tbody>
      
      
      
    </tbody>
  </table>
  </div>
  </body>
</html>