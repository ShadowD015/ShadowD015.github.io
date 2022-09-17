<?php

include("conexion.php");
$con=conectar();

$CÓDIGO_COMPONENTE=$_GET['id'];

$sql="DELETE FROM base_pc_global  WHERE CÓDIGO_COMPONENTE='$CÓDIGO_COMPONENTE'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: inventario.php");
    }
?>
