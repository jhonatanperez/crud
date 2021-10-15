<?php   

include ("conexion.php");
include ("footer.php");


if (isset ($_GET ['id'])){

    $id = $_GET['id'];
    $consulta = "SELECT * FROM producto WHERE id= $id";
    $resultado= mysqli_query ($conexion,$consulta);
    if (mysqli_num_rows($resultado)==1){
        $row = mysqli_fetch_array($resultado);
        $producto= $row ['producto'];
        $descripcion = $row ['descripcion'];
    }

if (isset ($_POST['editar_producto'])){
    $id = $_GET ['id'];
    $producto = $_POST['producto'];
    $descripcion = $_POST ['descripcion'];

    $consulta= "UPDATE  producto set producto= '$producto', descripcion = '$descripcion' where id= $id; ";
    $resultado= mysqli_query($conexion,$consulta );?>
        <div class= "container -p4">
        <div class="col-md-6">    
            <div class="card">
                <div class="card-header">
            </div>
                <div class="card-body">
                <h5 class="card-title">Edicion del producto con exito</h5>

            </div>
            </div>
        </div>
    </div>
    <?php
    



}
}
    
?>
<?php include ("header.php");?>

<div class="container p-4">
    <div class="raw">

        <div class="col-md-8 mx-auto">
            <div class="card card-body">
                <form action="editar.php?id= <?php echo $_GET['id'];  ?>" method="POST">    
                    <div class="form-group">
                        <input type="text" name="producto" value = "<?php echo $producto ?>" class = "form-control" placeholder="Editar nombre  producto ">
                    </div>
                    <div class="form-group">
                        <input type="text" name="descripcion" value = "<?php echo $descripcion ?>" class = "form-control" placeholder="Editar la descripcion del  producto ">
                    </div>
                    <div>
                        <input type="submit" class ="btn btn-success btn-block" name="editar_producto" value="EDITAR">
                    </div>
                    <div class="form-group">

                    <a href="lista.php" class="btn btn-primary">Volver a la lista de  productos</a>

                    </div>
                </form>
            </div>
        </div>
    </div>


</div>







