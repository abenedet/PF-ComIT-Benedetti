
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

            
            While ($row= mysqli_fetch_assoc($result))
            {
                if ($email==$row['Email'] && $password==$row['Pass'])
                {
                    echo '<script type="text/javascript">alert("Bienvenido/a"); window.location.href="../index.php";</script>';
                   
                } 
                else 
                {
                    echo '<script type="text/javascript">alert("La contraseña ingresada es incorrecta");
                    window.location.href="loginview.php";</script>';
                } 
            }
              
        }
        else 
        {
            //echo "<script type='text/javascript'>alert('La conexión ha fallado o el e-mail no existe. 
                   // Inténtelo de nuevo, más tarde');</script>".mysqli_error($conectar);
            echo("La conexión ha fallado o el e-mail no existe. Inténtelo de nuevo, más tarde."
                 .mysqli_error($conectar));
        }

    mysqli_close($conectar);

?>