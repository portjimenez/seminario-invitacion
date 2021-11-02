<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                                <!--MANASÉS JIMÉNEZ (TODA LA PAGINA)-->
    
<?php
$cod = $_POST['cod'];

date_default_timezone_set('America/Guatemala');
$fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
//Hora de 8:30 a 10:30 del dia martes 17
$fecha_marInicio1 = strtotime("26-10-2021 05:00:00");
$fecha_marFinal1 = strtotime("26-10-2021 14:22:59");
// Hora de 10:30 a 13:00 Del dia martes 17
$fecha_marInicio2 = strtotime("05-08-2021 14:10:00");
$fecha_marFinal2 = strtotime("05-08-2021 19:29:57");
//Hora de 8:00 a 10:30 Del dia miercoles 18
$fecha_mirInicio1 = strtotime("05-08-2021 14:20:00");
$fecha_mirFinal1 = strtotime("05-08-2021 19:29:57");
//Hora de 10:30 a 13:00 Del dia miercoles 18
$fecha_mirInicio2 = strtotime("05-08-2021 14:10:00");
$fecha_mirFinal2 = strtotime("05-08-2021 19:29:57");
//Hora de 8:00 a 10:30 Del dia jueves 19
$fecha_juInicio1 = strtotime("05-08-2021 14:10:00");
$fecha_juFinal1 = strtotime("05-08-2021 19:29:57");
//Hora de 10:30 a 13:00 Del dia jueves 19
$fecha_juInicio2 = strtotime("05-08-2021 14:10:00");
$fecha_juFinal2 = strtotime("05-08-2021 19:29:57");
//If de validacion de codigo
if ($cod != 'KEBYHSRE' && $cod != 'AA9YFMBM' && $cod != 'MB9Z233B' && $cod != 'ZLMWYBN2' && $cod != 'MKJT9GEJ' && $cod != 'ZXWK2ZK5' && $cod != 'CKEMSU5M' && $cod != 'H3S6BD28' && $cod != 'XWR5HKTQ' && $cod != 'Q9KT8QU7' && $cod != '43G9QL8U' && $cod != 'QEJCYNH9'){
    echo 'contraseña incorrecta';
}
//codigo para canjear los siguientes codigos: KEBYHSRE y AA9YFMBM que van de 8:00 a 10:30 del dia martes 17
if($cod == 'KEBYHSRE'){
    if($fecha_actual > $fecha_marInicio1)
    {
        header('location: https://youtu.be/5IilLZC6cLU');
    } else {
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/error.js"></script>
        <script>
        function redireccionar() {
            window.location = "http://localhost:50/codigo%20padres%20de%20familia/"
        }
        setTimeout("redireccionar()", 3000);
        </script>
    <?php
    } 
}
if($cod == 'AA9YFMBM'){
    if($fecha_actual > $fecha_marInicio1 && $fecha_actual < $fecha_marFinal1)
    {
        header('location: https://youtu.be/x_artPecEaM');

    } else {
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/error.js"></script>
        <script>
        function redireccionar() {
            window.location = "http://localhost:50/codigo%20padres%20de%20familia/"
        }
        setTimeout("redireccionar()", 3000);
        </script>
    <?php
    }
}
//if's para canjear los siguientes codigos: MB9Z233B y ZLMWYBN2 que van de 10:30 a 13:00 del dia martes 17
if($cod == 'MB9Z233B'){
    if($fecha_actual > $fecha_marInicio2 && $fecha_actual < $fecha_marFinal2)
    {
        header('location: https://youtu.be/6Ejga4kJUts');
    
    } else {
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/error.js"></script>
        <script>
        function redireccionar() {
            window.location = "http://localhost:50/codigo%20padres%20de%20familia/"
        }
        setTimeout("redireccionar()", 3000);
        </script>
    <?php
    }
}
if($cod == 'ZLMWYBN2'){
    if($fecha_actual > $fecha_marInicio2 && $fecha_actual < $fecha_marFinal2)
    {
        header('location: https://youtu.be/JrDuHBh6DQ0');
    
    } else {
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/error.js"></script>
        <script>
        function redireccionar() {
            window.location = "http://localhost:50/codigo%20padres%20de%20familia/"
        }
        setTimeout("redireccionar()", 3000);
        </script>
    <?php
    }
}
//if's para canjear los codigos: MKJT9GEJ y ZXWK2ZK5 que van de 8:00 a 10:30 del dia miercoles 18
if($cod == 'MKJT9GEJ'){
    if($fecha_actual > $fecha_mirInicio1 && $fecha_actual < $fecha_mirFinal1)
    {
        header('location: https://youtu.be/K7l3tIsRM7s');
    
    } else {
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/error.js"></script>
        <script>
        function redireccionar() {
            window.location = "http://localhost:50/codigo%20padres%20de%20familia/"
        }
        setTimeout("redireccionar()", 3000);
        </script>
    <?php
    }
}
if($cod == 'ZXWK2ZK5'){
    if($fecha_actual > $fecha_mirInicio1 && $fecha_actual < $fecha_mirFinal1)
    {
        header('location: https://youtu.be/kH1RoAEuV5Y');
    
    } else {
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/error.js"></script>
        <script>
        function redireccionar() {
            window.location = "http://localhost:50/codigo%20padres%20de%20familia/"
        }
        setTimeout("redireccionar()", 3000);
        </script>
    <?php
    }
}
//if's para canjear los codigos: CKEMSU5M y H3S6BD28 que van de 13:30 a 13:00 del dia miercoles 18
if($cod == 'CKEMSU5M'){
    if($fecha_actual > $fecha_mirInicio2 && $fecha_actual < $fecha_mirFinal2)
    {
        header('location: https://youtu.be/eNvUS-6PTbs');
    
    } else {
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/error.js"></script>
        <script>
        function redireccionar() {
            window.location = "http://localhost:50/codigo%20padres%20de%20familia/"
        }
        setTimeout("redireccionar()", 3000);
        </script>
    <?php
    }
}
if($cod == 'H3S6BD28'){
    if($fecha_actual > $fecha_mirInicio2 && $fecha_actual < $fecha_mirFinal2)
    {
        header('location: https://youtu.be/Lp2qcCrdBLA');
    
    } else {
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/error.js"></script>
        <script>
        function redireccionar() {
            window.location = "http://localhost:50/codigo%20padres%20de%20familia/"
        }
        setTimeout("redireccionar()", 3000);
        </script>
    <?php
    }
}
//if's para canjear los codigos: XWR5HKTQ y Q9KT8QU7 que van de 8:00 a 10:30 del dia jueves 19
if($cod == 'XWR5HKTQ'){
    if($fecha_actual > $fecha_juInicio1 && $fecha_actual < $fecha_juFinal1)
    {
        header('location: https://youtu.be/fNFzfwLM72c');
    
    } else {
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/error.js"></script>
        <script>
        function redireccionar() {
            window.location = "http://localhost:50/codigo%20padres%20de%20familia/"
        }
        setTimeout("redireccionar()", 3000);
        </script>
    <?php
    }
}
if($cod == 'Q9KT8QU7'){
    if($fecha_actual > $fecha_juInicio1 && $fecha_actual < $fecha_juFinal1)
    {
        header('location: https://youtu.be/O4irXQhgMqg');
    
    } else {
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/error.js"></script>
        <script>
        function redireccionar() {
            window.location = "http://localhost:50/codigo%20padres%20de%20familia/"
        }
        setTimeout("redireccionar()", 3000);
        </script>
    <?php
    }
}
//if's para canjear los codigos: 43G9QL8U y QEJCYNH9 que van de 10:30 a 13:00 del dia jueves 19
if($cod == '43G9QL8U'){
    if($fecha_actual > $fecha_juInicio2 && $fecha_actual < $fecha_juFinal2)
    {
        header('location: https://youtu.be/91GTuZWCQmY');
    
    } else {
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/error.js"></script>
        <script>
        function redireccionar() {
            window.location = "http://localhost:50/codigo%20padres%20de%20familia/"
        }
        setTimeout("redireccionar()", 3000);
        </script>
    <?php
    }
}
if($cod == 'QEJCYNH9'){
    if($fecha_actual > $fecha_juInicio2 && $fecha_actual < $fecha_juFinal2)
    {
        header('location: https://youtu.be/KkNjTy9tj6o');
    
    } else {
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/error.js"></script>
        <script>
        function redireccionar() {
            window.location = "http://localhost:50/codigo%20padres%20de%20familia/"
        }
        setTimeout("redireccionar()", 3000);
        </script>
    <?php
    }
}

?>
</body>
</html>