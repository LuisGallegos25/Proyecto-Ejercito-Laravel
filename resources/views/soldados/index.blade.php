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
    <center><h1>LISTADO DE SOLDADOS</h1></center><br>
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
      
      @foreach($soldado as $soldados)
      
      <tr>
        <td>{{$soldados->nombres}}</td>
        <td>{{$soldados->sexo}}</td>
        <td>{{$soldados->ci}}</td>
        <td>{{$soldados->telefono}}</td>
        <td>{{$soldados->ojos}}</td>
        <td>{{$soldados->sangre}}</td>
        <td>{{$soldados->estatura}}</td>
        <td>{{$soldados->peso}}</td> 
         <td>{{$soldados->arma}}</td>    
        <td><a href="soldado/{{$soldados->id_Soldado}}" class="btn btn-warning">Editar</a></td> 
        <td>
          <form action="soldado/{{$soldados->id_Soldado}}" method="post">
            {!! csrf_field() !!}
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