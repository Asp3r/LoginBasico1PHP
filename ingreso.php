
<?php

/*
    //testeo de datos que manda el form

    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    echo "<br>";
*/

    $nombreIngresado = $_POST["nombre"];
    $contraIngresada = $_POST["password"];

    /*
    echo $nombreIngresado;
    echo "<br>";
    echo $contraIngresada;
    echo "<br>";
    */

    switch($nombreIngresado){
        case "admin":
            /*
            echo "Bienvendio ", $nombreIngresado, ". Usted ingreso como admin.";
            echo "<br>";
            */

            //COMIENZA HTML EMBEBIDO

            ?>

            <html>
                <head>

                    <title>Login: Admin</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
                    <style>
                        
                        body, html {
                            height: 100%;
                            margin: 0;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            background-color: rgb(88, 165, 253);
                        }

                        .informeDeLogeado {
                            width: 50%;
                            text-align: center;
                        }
                    </style>

                </head>
                <body>
                    
                    <div class="informeDeLogeado">
                        <h2>¡Bienvenido administrador!</h2>
                        <h4>Tiene control absoluto de la pagina ¿Que desea hacer a continuacion?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vero quisquam rem itaque veritatis harum! Nesciunt ipsam labore praesentium dolorum corrupti est similique debitis aperiam minus perferendis aut, earum temporibus.</p>
                        <a href="index.html" class="btn btn-primary">Cerrar sesion</a>
                    </div>

                </body>
            </html>

            <?php

            //FINALIZA HTML EMBEBIDO

            break;

        case "user":
            /*
            echo "Bienvendio ", $nombreIngresado, ". Usted ingreso como usuario normal.";
            echo "<br>";
            */

            //COMIENZA HTML EMBEBIDO

            ?>

            <html>
                <head>

                    <title>Login: User</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
                    <style>
                        body, html {
                            height: 100%;
                            margin: 0;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            background-color: rgb(88, 165, 253);
                        }

                        .informeDeLogeado {
                            width: 50%;
                            text-align: center;
                        }
                    </style>

                </head>
                <body>
                    
                    <div class="informeDeLogeado">
                        <h2>¡Bienvenido usuario!</h2>
                        <h4>Usted esta registrado debidamente ¿Que desea ver o editar?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vero quisquam rem itaque veritatis harum! Nesciunt ipsam labore praesentium dolorum corrupti est similique debitis aperiam minus perferendis aut, earum temporibus.</p>
                        <a href="index.html" class="btn btn-primary">Cerrar sesion</a>
                    </div>

                </body>
            </html>

            <?php

            //FINALIZA HTML EMBEBIDO
            break;

        case "guest":
            /*
            echo "Bienvendio ", $nombreIngresado, ". Usted ingreso como invitado.";
            echo "<br>";
            */

            //COMIENZA HTML EMBEBIDO

            ?>

            <html>
                <head>

                    <title>Login: Guest</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
                    <style>
                        body, html {
                            height: 100%;
                            margin: 0;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            background-color: rgb(88, 165, 253);
                        }

                        .informeDeLogeado {
                            width: 50%;
                            text-align: center;
                        }
                    </style>

                </head>
                <body>
                    
                    <div class="informeDeLogeado">
                        <h2>¡Bienvenido invitado!</h2>
                        <h4>Con este nivel de credencial solo puede ver contenido, pero no interactuar.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vero quisquam rem itaque veritatis harum! Nesciunt ipsam labore praesentium dolorum corrupti est similique debitis aperiam minus perferendis aut, earum temporibus.</p>
                        <a href="index.html" class="btn btn-primary">Cerrar sesion</a>
                    </div>

                </body>
            </html>

            <?php

            //FINALIZA HTML EMBEBIDO
            break;

        default:
            /*
            echo "Credencial de ingreso no encontrada.";
            echo "<br>";
            */

            //COMIENZA HTML EMBEBIDO

            ?>

            <html>
                <head>

                    <title>Login: Error</title>
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
                    <style>
                        body, html {
                            height: 100%;
                            margin: 0;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            background-color: rgb(88, 165, 253);
                        }

                        .informeDeLogeado {
                            width: 50%;
                            text-align: center;
                        }
                    </style>


                </head>
                <body>
                    
                    <div class="informeDeLogeado">
                        <h2>Ha habido un problema al intentar ingresar a la plataforma.</h2>
                        <h4>Usuario y/o contraseña incorrectos</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae vero quisquam rem itaque veritatis harum! Nesciunt ipsam labore praesentium dolorum corrupti est similique debitis aperiam minus perferendis aut, earum temporibus.</p>
                        <a href="index.html" class="btn btn-primary">Volver al login</a>

                    </div>

                </body>
            </html>

            <?php

            //FINALIZA HTML EMBEBIDO

    }

?>