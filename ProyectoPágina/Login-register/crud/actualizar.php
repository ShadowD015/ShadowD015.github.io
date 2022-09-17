<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM base_pc_global WHERE CÓDIGO_COMPONENTE='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="CÓDIGO_COMPONENTE" value="<?php echo $row['CÓDIGO_COMPONENTE']  ?>">
                                <input type="text" class="form-control mb-3" name="TIPO_DE_COMPONENTE" placeholder="TIPO_DE_COMPONENTE" value="<?php echo $row['TIPO_DE_COMPONENTE']  ?>">
                                <input type="text" class="form-control mb-3" name="NOMBRE" placeholder="NOMBRE" value="<?php echo $row['NOMBRE']  ?>">
                                <input type="text" class="form-control mb-3" name="MODELO" placeholder="MODELO" value="<?php echo $row['MODELO']  ?>">
                                <input type="text" class="form-control mb-3" name="PRECIO" placeholder="PRECIO" value="<?php echo $row['PRECIO']  ?>">
                                <input type="text" class="form-control mb-3" name="ENSAMBLADORA" placeholder="ENSAMBLADORA" value="<?php echo $row['ENSAMBLADORA']  ?>">
                                <input type="text" class="form-control mb-3" name="CONTRATISTA" placeholder="CONTRATISTA" value="<?php echo $row['CONTRATISTA']  ?>">
                                <input type="text" class="form-control mb-3" name="PAÍS_DE_ENVÍO" placeholder="PAÍS_DE_ENVÍO" value="<?php echo $row['PAÍS_DE_ENVÍO']  ?>">
                                <input type="text" class="form-control mb-3" name="FECHA_DE_PEDIDO" placeholder="FECHA_DE_PEDIDO" value="<?php echo $row['FECHA_DE_PEDIDO']  ?>">
                                <input type="text" class="form-control mb-3" name="FECHA_LLEGADA" placeholder="FECHA_LLEGADA" value="<?php echo $row['FECHA_LLEGADA']  ?>">
                                <input type="text" class="form-control mb-3" name="CANTIDAD" placeholder="CANTIDAD" value="<?php echo $row['CANTIDAD']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>