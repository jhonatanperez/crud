<?php   

include ("conexion.php");
include ("footer.php");
include ("header.php");
    if (isset($_POST['iniciar_sesion'])){
        $correo = $_POST['correo'];
        $pass = $_POST['contra'];
        session_start();
        
      $consulta= "SELECT *   from registro  where  correo='$correo' and pass= '$pass'";
        $resultado= mysqli_query($conexion,$consulta);
        $row= mysqli_num_rows($resultado);

        if ($row){
            header("location:agregar_producto.php");
        }
        else {
            echo "Error de autenticacion";
            include ("index.php");
            ?>
            <h1>ERROR DE AUTENCICACION</h1>

            <?php	
           
           
             
        
        }
       mysqli_free_result($resultado);
       mysqli_close($conexion);
    }
        ?>
