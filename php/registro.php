<?php
    $dni=$_POST["dni"];
    $nombre=$_POST["nombre"]; 
    $apellido=$_POST["apellido"];
    $direccion=$_POST["direccion"];
    $telefono=$_POST["telefono"];
    $email=$_POST["email"];
    $password= $_POST["password"];
    $repeatpassword=$_POST["repeatpassword"];

    require("connection.php"); 
 
        $conn= new connection(); 
        $conectar= $conn->getConnection();

        $query= "INSERT INTO usuarios (DNI, Nombre, Apellido, Direccion, Telefono, Email, Pass)
        VALUES ('".$dni."', '".$nombre."', '".$apellido."', '".$direccion."', '".$telefono."', '"
                .$email."', '".$password."')";  

        $result= mysqli_query($conectar, $query);
     
        if ($result)
        {

         echo '<script type="text/javascript">alert("Ha sido registrado con éxito!"); 
                window.location.href="../index.php";</script>';
                   
        } 
        else 
        {
            echo '<script type="text/javascript">alert("No ha podido registrarse, inténtelo de nuevo, 
                    más tarde.."); window.location.href="../index.php";</script>';
          
        }
    mysqli_close($conectar);



?>