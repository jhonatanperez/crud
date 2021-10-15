<?php include("conexion.php")  ?>

<?php include("header.php")  ?>
<div class= "container -p4">
    <div class ="row">
        
        <div class="col-md-4">  
            <div class= "card card-body">    
                <form action="guardar.php"method ="POST">
                    
                        <div class="form-group">
                            <input type ="text" name="producto" class ="form-control" placeholder="Nomnbre del producto">
                        </div>
                        <div class="form-group">
                            <input type ="text" name="descripcion" class= "form-control" placeholder="Descripcion del producto"> 
                        </div>
                        <div>
                        <input type="submit" class ="btn btn-success btn-block" name="guardar_producto" value="GUARDAR">
                        </div>
                <form>    
                <br>
                <br>
             <a href="lista.php"  > <button  type="button" class="btn btn-primary btn-lg btn-block">LISTA DE PRODUCTOS</button></a>
        
            </div>
        
        </div>

    <div>
</div>
<?php include("footer.php")  ?>




