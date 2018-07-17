<?php
   class connection
   {
    public function getConnection()
    { 
        $servername= "127.0.0.1"; 
        $database="miempresa";
        $username="admin"; 
        $password="admin123";

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