<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM base_pc_global";
    $query=mysqli_query($con,$sql);
?>
<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "../index.php";
            </script>
        ';
        session_destroy();
        die();
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Control de prductos Pc Global</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="CÓDIGO_COMPONENTE" placeholder="CÓDIGO_COMPONENTE">
                                    <input type="text" class="form-control mb-3" name="TIPO_DE_COMPONENTE" placeholder="TIPO_DE_COMPONENTE">
                                    <input type="text" class="form-control mb-3" name="NOMBRE" placeholder="NOMBRE">
                                    <input type="text" class="form-control mb-3" name="MODELO" placeholder="MODELO">
                                    <input type="text" class="form-control mb-3" name="PRECIO" placeholder="PRECIO">
                                    <input type="text" class="form-control mb-3" name="ENSAMBLADORA" placeholder="ENSAMBLADORA">
                                    <input type="text" class="form-control mb-3" name="CONTRATISTA" placeholder="CONTRATISTA">
                                    <input type="text" class="form-control mb-3" name="PAÍS_DE_ENVÍO" placeholder="PAÍS_DE_ENVÍO">
                                    <input type="text" class="form-control mb-3" name="FECHA_DE_PEDIDO" placeholder="FECHA_DE_PEDIDO    dd/mm/aaaa">
                                    <input type="text" class="form-control mb-3" name="FECHA_LLEGADA" placeholder="FECHA_LLEGADA    dd/mm/aaaa">
                                    <input type="text" class="form-control mb-3" name="CANTIDAD" placeholder="CANTIDAD">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a class="btn btn-danger" href="../php/cerrar_sesion.php">Cerrar Sesión</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>CÓDIGO_COMPONENTE</th>
                                        <th>TIPO_DE_COMPONENTE</th>
                                        <th>NOMBRE</th>
                                        <th>MODELO</th>
                                        <th>PRECIO_UNITARIO</th>
                                        <th>ENSAMBLADORA</th>
                                        <th>CONTRATISTA</th>
                                        <th>PAÍS_DE_ENVÍO</th>
                                        <th>FECHA_DE_PEDIDO</th>
                                        <th>FECHA_LLEGADA</th>
                                         <th>CANTIDAD</th>
                                         
                                         <th>LOTE</th>
                                    </tr>
                                </thead>
                                

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['CÓDIGO_COMPONENTE']?></th>
                                                <th><?php  echo $row['TIPO_DE_COMPONENTE']?></th>
                                                <th><?php  echo $row['NOMBRE']?></th>
                                                <th><?php  echo $row['MODELO']?></th>
                                                <th><?php  echo $row['PRECIO']?></th>  
                                                <th><?php  echo $row['ENSAMBLADORA']?></th>     
                                                <th><?php  echo $row['CONTRATISTA']?></th>  
                                                <th><?php  echo $row['PAÍS_DE_ENVÍO']?></th>  
                                                <th><?php  echo $row['FECHA_DE_PEDIDO']?></th>  
                                                <th><?php  echo $row['FECHA_LLEGADA']?></th> 
                                                <th><?php  echo $row['CANTIDAD']?></th>  
                                                <th><?php  echo $row['LOTE']?></th>      

                                                <th><a href="actualizar.php?id=<?php echo $row['CÓDIGO_COMPONENTE'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['CÓDIGO_COMPONENTE'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>