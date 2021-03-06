<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
  </head>
  <body>
    <div class="container">
      <h2><strong>Editar datos de Soldado</strong></h2><br/>
      <form method="post" action="/soldado/{{$soldado->id_Soldado}}" enctype="multipart/form-data">
      {!! csrf_field() !!}
         {!!method_field('PUT')!!}
     
     
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Telefono:</label>
              <input type="text" class="form-control" name="telefono" value="{{$soldado->telefono}}">
            </div>
          </div>


        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Estatura:</label>
              <input type="text" class="form-control" name="estatura" value="{{$soldado->estatura}}">
            </div>
          </div>
    
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Peso : </strong>  
            <input class="date form-control"  type="text" id="datepicker" name="peso" value="{{$soldado->peso}}">   
         </div>
        </div>
      
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Actualizar</button>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  </body>
</html>