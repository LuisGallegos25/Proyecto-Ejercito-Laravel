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
    <center><h1>LISTADO DE INSTRUCTORES</h1></center><br>
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
        <th colspan="2">Opcion</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($instructor as $inst)
      
      <tr>
        <td>{{$inst->nombres}}</td>
        <td>{{$inst->sexo}}</td>
        <td>{{$inst->ci}}</td>
        <td>{{$inst->telefono}}</td>
        <td>{{$inst->ojos}}</td>
        <td>{{$inst->sangre}}</td>
        <td>{{$inst->estatura}}</td>
        <td>{{$inst->peso}}</td> 
         <td>{{$inst->arma}}</td>    
        
        <td><a href="instructor/{{$inst->id_Instructor}}" class="btn btn-warning">Editar</a></td> 
        <td>
          <form action="instructor/{{$inst->id_Instructor}}" method="post">
          {!! csrf_field() !!}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>