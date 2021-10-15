<?php include("conexion.php")  ?>

<?php include("header.php")  ?>

<div class= "container -p4">
    <div class ="row">
        
        <div class="col-md-8">  
            <div class= "card card-body">    
                <table class= "table table-borderer">

                    <thead>
                        <tr>
                            <th> PRODUCTOS   </th>
                            <th> DESCRIPCIÓN   </th>
                            <th> OPCIONES   </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php       
                        $consulta= "SELECT * FROM producto";
                        $resultado= mysqli_query($conexion,$consulta);

                        while ($row = mysqli_fetch_array($resultado)){?>
                            <tr>
                                <td><?php echo $row['producto'] ?> </td>
                                <td><?php echo $row['descripcion'] ?> </td>
                                <td>
                                    <a href="editar.php?id=<?php echo $row['id']?>"> Editar </a>
                                    <a href="eliminar.php?id=<?php echo $row['id']?>"> Eliminar </a>

                                </td>
                            </tr>

                        <?php } ?>


                        ?>


                    </tbody>


                </table>
        
            </div>
        
        </div>

    <div>
</div>
<?php include("footer.php")  ?>