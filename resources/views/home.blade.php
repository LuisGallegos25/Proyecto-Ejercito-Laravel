<html>

<head>
    <title>EJERCITO DE BOLIVIA</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif">
    <style type="text/css">
        body {
            background-image: url("https://http2.mlstatic.com/vinilos-de-texturas-ladrillos-y-piedras-D_NQ_NP_977626-MCO27139438255_042018-F.jpg");
            background-repeat: no-repeat;
            font-family: Arial;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        * {
            margin: 0px;
            padding: 0px;
        }

        #header {
            margin: auto;
            width: 800px;
            font-family: Arial, Helvetica, sans-serif;
            
        }

        ul,
        ol {
            list-style: none;
        }

        .nav {
            width: 1000px;
            /*Le establecemos un ancho*/
            margin: 10 auto;
            /*Centramos automaticamente*/
        }

        .nav>li {
            float: left;
        }

        .nav li a {
            background-color: darkslategray;
            color: #fff;
            text-decoration: none;
            padding: 10px 12px;
            display: block;
        }

        .nav li a:hover {
            background-color: gray;
        }

        .nav li ul {
            display: none;
            position: absolute;
            min-width: 140px;
        }

        .nav li:hover>ul {
            display: block;
        }

        .nav li ul li {
            position: relative;
        }

        .nav li ul li ul {
            right: -140px;
            top: 0px;
        }

        .h1 {
            
            background-color: darkslategray;
            color: #fff;
            text-decoration: none;
            padding: 10px 12px;
            display: block;
            font-size: 50px;
            font-family: impact;
            margin: 0 auto;
            list-style: none;
            text-align: center;
        }
         .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
         .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
             font-family: impact;
                
            }
       


    </style>
</head>

<body>
        <h1 class="h1">FUERZAS ARMADAS <br>Ejercito de Bolivia</h1>
        <div id="header">
            <nav>
                <!-- Aqui estamos iniciando la nueva etiqueta nav -->
                <ul class="nav">
                    <li>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Escudo-de-Bolivia.gif/200px-Escudo-de-Bolivia.gif" width="135" alt=""/>
                        <a href="">Inicio</a></li>
                    <li><img src="https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/6XM6EYJ/american-military-soldier-infantry-camouflage-uniform-man-salute-stood-attention_e__j_ooig__F0004.png" width="213" alt=""/>
                        <a href="/soldado">SOLDADOS</a>
                        <ul>
                            <li><a href="/soldado/create">REGISTRAR NUEVOS</a></li>
                            <li><a href="">ACTUALIZAR REGISTRO</a></li>
                            <li><a href="soldado/delete">ELIMINAR REGISTRO</a></li>
                        </ul>
                    </li>
                    <li>
                        <img src="https://cdnuploads.aa.com.tr/uploads/Contents/2018/07/10/thumbs_b_c_d5703454b9a6c08a28d7965a2166d895.jpg?v=065743" width="200" alt=""/>
                        <a href="/instructor">INSTRUCTORES</a>
                        <ul>
                            <li><a href="/instructores/create">REGISTRAR NUEVOS</a></li>
                            <li><a href="">ELIMINAR REGISTRO</a></li>
                            <li><a href="">ACTUALIZAR REGISTRO</a></li>
                        </ul>
                    </li>
                    <li>
                        <img src="https://i.ytimg.com/vi/1CbGafo7SSI/maxresdefault.jpg" width="200" alt=""/>
                        <a href="">REGIMIENTO</a>
                        <ul>
                            <li><a href="">LISTAR</a></li>
                        </ul>
                    </li>
                    <li>
                        <img src="https://c1.staticflickr.com/5/4436/36795681041_8b11cb6651_b.jpg" width="169" alt=""/>
                        <a href="">ESCUADRONES</a>
                        <ul>
                            <li><a href="">LISTAR</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- Aqui estamos cerrando la nueva etiqueta nav -->
        </div>
    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        
                    @else
                        <a style="color:white;" href="{{ url('/login') }}">Login</a>
                        <a style="color:white;" href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif


               
            
        </div>
</body>

</html>

