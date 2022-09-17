<?php
include_once('db.php');
$Nombres=$_POST['nombres']; 
$Apellidos=$_POST['apellidos'];
$Télefono=$_POST['teléfono'];
$Tipo_de_Documento=$_POST['documento'];
$NUMERO_DOCUMENTO=$_POST['num-documento'];
$Tipo_de_producto="Procesadores";
$PRODUCTO_A_COMPRAR=$_POST['producto'];
$CANTIDAD=$_POST['cantidad'];
$CORREO_ELECTRONICO=$_POST['correo'];
$DIRECCION=$_POST['dirección'];
$CODIGO_POSTAL=$_POST['postal'];
$METODO_DE_PAGO=$_POST['metodo-pago'];
$NUM_TARJETA=$_POST['tarjeta-num'];
$FECHA_VENCIMIENTO=$_POST['fecha'];
$CVV=$_POST['cvv'];
$METODO=$_POST['metodo-envio'];
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Control de prductos Pc Global</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="recibo1.css">
        <html>
            <body>  
                <h5>Se cargo con exito su compra</h5>
            <img src="logo.png" alt="Neocortex">
                 <header><h1>Recibo de compra</h1></header>
            <div id="container">
               
              
               
            
            <section id="content"></section>
            <nav>
            <ul type="Disc">
        <li>Nombres: <?php  echo $Nombres?><br></li>
        <li>Apellidos: <?php  echo $Apellidos?><br></li>
        <li>Telefono: <?php  echo $Télefono?><br></li>
        <li>Tipo de documento: <?php  echo $Tipo_de_Documento?><br></li>
        <li>Numero de documento: <?php  echo $NUMERO_DOCUMENTO?><br></li>
        <li>Tipo de producto: <?php  echo $Tipo_de_producto?><br></li>
        <li>Producto a comprar: <?php  echo $PRODUCTO_A_COMPRAR?><br></li>
        <li>Cantidad: <?php  echo $CANTIDAD?><br></li>
        <li>Correo electronico: <?php  echo $CORREO_ELECTRONICO?><br></li>
        <li>Direccion: <?php  echo $DIRECCION?><br></li>
        <li>Codigo postal: <?php  echo $CODIGO_POSTAL?><br></li>
        <li>Metodo de pago: <?php  echo $METODO_DE_PAGO?><br></li>
        <li>Numero de tarjeta: <?php  echo $FECHA_VENCIMIENTO?><br></li>
        <li>Fecha de vencimiento: <?php  echo $CVV?><br></li>
        <li>Metodo de envio: <?php  echo $METODO?><br></li>
        </nav>
        
    </ul> 
            <br><br>
            <center><a class="fcc-btn" href="../../../index.php">Regresar</a></center>
    <br><br><br>
     
    
    <footer>
  @ 2022  <strong> PC Globlal</strong>, Todos los Derechos Reservados
</footer>
           
                         
    
 </html>


