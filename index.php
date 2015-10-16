<?php /* esto inicia un bloque de código en php */

    $user = $_GET['usuario'];
    $pass = $_GET['contraseña']; /* guarda la contraseña en a variable $pass */

    $loginok = false; /* Sirve para saber si el usuario y clave son válidos o no. Si es false quiere decir que el usuario o el password no son válidos. Si es true, entonces el user y pass son permitidos. */
    $uservalidok = false; /* Sirve para saber si el user existe o no */
    $passok = false; /* Sirve pasa saber si el password es correcto o no */

    /* Lista de usuarios válidos */
$usuarios = array("kary", "path", "Rich", "Pamela", "Alex", "Monica", "Perla", "uriel", "aura", "Alejandra", "zuave", "RCTORR");
$passwords = array("ko123ri", "00012path", "ric577152", "P-12345", "Juanson*12", "M1234nk*", "5c5unodos3", "Brauriel2", "10AVr2", "Aleeli-03", "Z1986zu", "12357Tor");
    /* Para acceder a un elemento del array se usa: $usuarios[0] -> "rctorr"
        $usuarios[3] -> "aura" */
    for($i=0; $i<=11; $i+=1) {
        /* Comparar la variable $user con cada elemento de la lista de
        usuarios */
        if($usuarios[$i] == $user) {
            /* Este bloque se ejecuta si la condición es verdadera y eso es
               cuando el usuario escribió un user válido */
            if($passwords[$i] == $pass) {
                /* El pass del usuario es correcto */
                $loginok = true;
                $uservalidok = true;
                $passok = true;
                break;
            } else {
                /* Cuando el pass es incorrecto */
                $loginok = false;
                $passok = false;
            }
        } else {
            /* Llegamos porque el usuario escribió un user que no es válido */
            $loginok = false;
            $uservalidok = false;
        }
    } /* termina el for */

    /* Recorrer el array de usuarios en búsqueda del usuario divino $user */
    /* Si el usuario y clave no coinciden entonces terminamos o enviamos un mensaje de error */

    /* $loginok <- true    Cuando el user y pass son válidos o correcto
        $loginok <- false   Cuando el usar y/o el pass no son válidos
    */
//    if(!$loginok) {
        /* Tenemos que entrar a este bloque cuando el usuario no sea válido */
//        echo "Lo siento hermano, no estas autorizado!";
//    } else { /* Inicia bloque autorizado */

    /* Si llegamos hasta aquí, es porque el usuario es valedor y
       continuamos! */

/* esto termina un bloque de código en php */
?> <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Asistencias</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <h1>TDW2.0</h1>
        <h3>Hecho por <i id="heart">♥</i> <strong>TRIPAS CREATIVAS</strong></h3>
        <p>1a Evaluación.</p>
    </header>
    <?php
    if($loginok && $passok) {
        include('registro.html');
    }

    if(!$uservalidok){/*si password incorrecto hacemos este bloque*/
        include('error.html');
    }

    if($uservalidok && !$passok){/*si password incorrecto hacemos este bloque*/
        include('error.html');
    }

    ?>
    <footer>
        <h5>PADAS</h5>
    </footer>
</body>
</html>