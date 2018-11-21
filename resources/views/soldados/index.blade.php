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
        <th>Sexo</th>
        <th>C.I.</th>
        <th>Telefono</th>
        <th>Color de ojos</th>
        <th>Tipo de Sangre</th>
        <th>Estatura</th>
        <th>Peso</th>   
         <th>Arma</th>    
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($soldados as $person)
      
      <tr>
        <td>{{$person->nombres}}</td>
        <td>{{$person->sexo}}</td>
        <td>{{$person->ci}}</td>
        <td>{{$person->telefono}}</td>
        <td>{{$person->ojos}}</td>
        <td>{{$person->sangre}}</td>
        <td>{{$person->estatura}}</td>
        <td>{{$person->peso}}</td> 
         <td>{{$person->arma}}</td>    
        <td><a href="soldado/{{$person->id_Soldado}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="#" method="post">
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