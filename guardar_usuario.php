<?php   

include ("conexion.php");
include ("footer.php");
include ("header.php");
    if (isset($_POST['save_user'])){

        $correo = $_POST['correo'];
        $pass = $_POST ['pass'] ;

       $consulta= "INSERT INTO registro(correo, pass)VALUES ('$correo','$pass')";
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
                <h5 class="card-title">Registro con exito</h5>
                <a href="index.php" class="btn btn-primary"> Iniciar Sesion</a>
            </div>
            </div>
        </div>
    </div>
    
    <?php   }  ?>