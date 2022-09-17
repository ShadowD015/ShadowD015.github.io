<?php
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "";
    $dbname = "pc global";

    $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
    return $conectar;
}

?>