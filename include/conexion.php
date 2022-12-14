<?php
// function conn(){
//     $sv = 'localhost';
//     $db = 'mangua_v2';
//     $user ='root';
//     $pass ='';

//     $conectar = mysqli_connect($sv,$user,$pass,$db);
//     if (!$conectar) {
//         die("No conectado: " .mysqli_connect_errno());
//     }
//     echo "CONECTADO";
//     mysqli_close($conectar);
//     return $conectar;
// }

function conn(){
    $hostname = 'localhost';
    $usuariodb = 'root';
    $passworddb = '';
    // $dbname = 'mangua_v3';
    $dbname = 'prueba_2';
    $conectar = mysqli_connect($hostname,$usuariodb,$passworddb,$dbname);
    return $conectar;
}

?>