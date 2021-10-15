<?php   

include ("conexion.php");
include ("footer.php");
include ("header.php");

if (isset ($_GET ['id'])){

    $id = $_GET['id'];
    $consulta = "DELETE FROM producto WHERE id= $id";
    $resultado= mysqli_query ($conexion,$consulta);
    if (!$resultado){
        die("Consulta fallida");
    }?>


    <div class= "container -p4">
    <div class="col-md-6">    
        <div class="card">
            <div class="card-header">
        </div>
            <div class="card-body">
            <h5 class="card-title">Eliminado con exito</h5>
            <a href="lista.php" class="btn btn-primary">Lista de  productos</a>
        </div>
        </div>
    </div>
</div>
<?php } ?>










?>