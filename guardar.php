<?php   

include ("conexion.php");
include ("footer.php");
include ("header.php");
    if (isset($_POST['guardar_producto'])){
        $producto = $_POST['producto'];
        $descripcion = $_POST['descripcion'];
        
        $consulta= "INSERT INTO producto(producto, descripcion)VALUES ('$producto', '$descripcion')";
        $resultado= mysqli_query($conexion,$consulta);
        if (!$resultado){
            die("Query Failed");
        }
     ?>
    <div class= "container -p4">
        <div class="col-md-6">    
            <div class="card">
                <div class="card-header">
            </div>
                <div class="card-body">
                <h5 class="card-title">Guardado con exito</h5>
                <a href="index.php" class="btn btn-primary">Ingresar producto</a>
            </div>
            </div>
        </div>
    </div>
    
    <?php   }  ?>
