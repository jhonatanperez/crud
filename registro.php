<?php include("conexion.php")  ?>

<?php include("header.php")  ?>
<h1> Registro de personas </h2>
<div class= "container -p4">
    <div class ="row">
        
        <div class="col-md-4">  
            <div class= "card card-body">    
                <form action="guardar_usuario.php"method ="POST">
                    

                        <div class="form-group">
                            <input type ="text" name="correo" class= "form-control" placeholder="nombre@example.com"> 
                        </div>
                        <div class="form-group">
                            <input type ="password" name="pass" class= "form-control" placeholder="************"> 
                        </div>
                        <div>
                        <input type="submit" class ="btn btn-success btn-block" name="save_user" value="REGISTRAR">
                        </div>
                <form>    
                <br>
                <br>
             <a href="index.php"  > <button  type="button" class="btn btn-primary btn-lg btn-block">INICIAR SESION</button></a>
        
            </div>
        
        </div>

    <div>
</div>
<?php include("footer.php")  ?>