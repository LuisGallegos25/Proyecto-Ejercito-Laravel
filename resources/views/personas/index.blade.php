<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INICIO</title>
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
        <th>Telefono</th>
        <th>Estatura</th>
        <th>Peso</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($personas as $persona)
      
      <tr>
        <td>{{$persona['nombres']}}</td>
        <td>{{$persona['telefono']}}</td>
        <td>{{$persona['estatura']}}</td>
        <td>{{$persona['peso']}}</td>    
        <td><a href="{{action('personaController@edit', $persona['id_Persona'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('personaController@destroy', $persona['id_Persona'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>