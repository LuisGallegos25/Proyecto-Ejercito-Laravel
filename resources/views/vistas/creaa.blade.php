<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <h1>CREAR USUARIO</h1>
    <form method="POST" action="{{url('persona/create')}}">
        {!! csrf_field()!!}
        <button type="submit">CREAR USUARIO</button>
        


    </form>

</body>
</html>