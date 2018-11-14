<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>NUEVO-SOLDADO</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
    <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body> <center>
    <div id="wrapper">

        <h1>REGISTRO DE SOLDADOS</h1>    
        <form action="insertarSoldado.php" method="post">
            <div class="col-2">
                <label>
                    C.I.
                    <input placeholder="Nombres" id="name" name="ci" tabindex="1">
                </label>
            </div><br>
            <div class="col-2">
                <label>
                    Nombres Completos
                    <input placeholder="Nombres" id="name" name="nombres" tabindex="1">
                </label>
            </div><br>
            <div class="col-2">
                <label>
                    Fecha de Nacimiento
                    <input placeholder="AA/MM/DD" id="company" name="fechaN" tabindex="2">
                </label>
            </div><br>

            <div class="col-2">
                <label>
                    Telefono
                    <input placeholder="Numero de contacto" id="phone" name="telefono" tabindex="3">
                </label>
            </div><br>
            <div class="col-2">
                <label>
                    Color de ojos
                    <input placeholder="Color de ojos" id="email" name="ojos" tabindex="4">
</label>
</div><br>
<div class="col-2">
    <label>
        Tipo de sangre
        <select tabindex="5" name="sangre">
            <option>A+</option>
            <option>A-</option>
            <option>B+</option>
            <option>B-</option>
            <option>AB+</option>
            <option>AB-</option>
            <option>O+</option>
            <option>O-</option>
        </select>
    </label>
</div><br>
<div class="col-2">
    <label>
        Sexo
        <select tabindex="5" name="sexo">
            <option>Hombre</option>
            <option>Mujer</option>
        </select>
    </label>
</div><br>

<div class="col-2">
    <label>
        Estatura
        <input placeholder="Estatura en centimetros" id="skills" name="estatura" tabindex="6">
    </label>
</div><br>
<div class="col-2">
    <label>
        Peso
        <input placeholder="En Kilogramos" id="experience" name="peso" tabindex="7">
    </label>
</div><br>
            <center><input class="botonn" type="submit" value="REGISTRAR"></center>

        </form>
    </div><br>
    <script type="text/javascript">
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            var switchery = new Switchery(html);
        });
    </script>
    </center>
</body>

</html>