<?php include("conexion.php")  ?>

<?php include("header.php")  ?>

<h1>INICIAR SESION</h1>
<div class= "container -p4">
    <div class ="row">
        
        <div class="col-md-4">  
            <div class= "card card-body">    
                <form action="iniciar_sesion.php"method ="POST">
                    
                        <div class="form-group">
                            <input type ="text" name="correo" class ="form-control" placeholder="Correo electronico">
                        </div>
                        <div class="form-group">
                            <input type ="password" name="contra" class= "form-control" placeholder="***********"> 
                        </div>
                        <div>
                        <input type="submit" class ="btn btn-success btn-block" name="iniciar_sesion" value="INICIAR SESION">
                        </div>
                <form>    
                <br>
                <br>
             <a href="registro.php"  > <button  type="button" class="btn btn-primary btn-lg btn-block">REGISTRAR USUARIO</button></a>
        
            </div>
        
        </div>

    <div>
</div>
<?php include("footer.php")  ?>