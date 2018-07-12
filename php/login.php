<?php
    $email= $_POST["email"];
    $password= $_POST["password"];

    require("connection.php"); 
 
        $conn= new connection(); 
        $conectar= $conn->getConnection();

        $query= "SELECT * FROM usuarios WHERE email='".$email."'"; 

        $result= mysqli_query($conectar, $query);
        if (mysqli_num_rows($result)>0)
        {


            echo "el mail existe";
        }
        else {

            echo("La conexión ha fallado o el e-mail no existe. Inténtelo de nuevo, más tarde.".mysqli_error($conectar));
        }

    mysqli_close($conectar);



?>