<?php
   class connection
   {
    public function getConnection()
    { 
        $servername= "localhost"; 
        $database="miempresa";
        $username="root"; 
        $password="";

        //Create connection 
        $conn= mysqli_connect($servername, $username, $password, $database);

        //Check connection 

        if (!$conn)
        {
                die("La conexion ha fallado".mysqli_connect_error());

        }

        return $conn;
   }


   }

   ?>