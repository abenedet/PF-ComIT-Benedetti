<head>
    <script>
        $(document).ready(function(){
        $('select').formSelect();
        });

         $(document).ready(function(e){
                $(".btnInfo").click(function(e){
                    var url= $(this).attr("href");
                    $(".parallax-container").load(url);
                    return false;
                });
            });
    </script>
</head>

<body>
  <!--Card Panel-->

    <div class="container">
        <div class="input-field col s12">
            <select>
                <option value="" disabled selected>Ordenar por.. </option>
                <option value="1">Alfabéticamente</option>
                <option value="2">Promociones</option>
                <option value="3">Relevancia</option>
            </select>
           <!-- <label>Ordenar por..</label>-->
        </div>

        <div class="row">
        <?php
            require("connection.php"); 

            $conn= new connection(); 
            $conectar= $conn->getConnection();

            $query= "SELECT * FROM salones"; 

            $result= mysqli_query($conectar, $query);
 
            if (mysqli_num_rows($result)>0)
            {
                While ($row= mysqli_fetch_assoc($result))
                {
                    $nombre= $row['Razon_social']; 
                    $logo= $row['URL_Logo'];
                    $direccion= $row['Direccion'];
                    $telefono= $row['Telefono'];
                    $email= $row['Email'];
                   // $descripcion= $row['Descripcion'];

                    echo '<div class="col s12 m4"> ';
                        echo '<div class="card">';
                            echo '<div class="card-image">';
                                echo '<img src='.$logo.'>';
                            echo '</div>';

                        echo '<div class="card-content">';
                        echo '<p> '.$nombre.'</p>';
                        echo '<div class="divider"></div>';
                        echo '<div class="section">';
                        echo '<p> <i class="material-icons">location_on</i>'.$direccion.'</p>';
                        echo '</div>';

                        echo '<div class="divider"></div>';
                        echo '<div class="section">';
                        echo '<p> <i class="material-icons">phone</i>'.$telefono.'</p>';
                        echo '</div>';

                        echo '<div class="divider"></div>';
                        echo '<div class="section">';
                        echo '<p><i class="material-icons">email</i>'.$email.'</p>';
                        echo '</div>';
                   

                       // echo '<p>'.$descripcion.'</p>';
                    echo '</div>';
                    echo '<div class="card-action">';
                    echo '<a href="php/salon.php">Ver más..</a>';
                    echo '</div>'; 
                    echo '</div>'; 
                    echo '</div>';    
                }
            } 
            else 
            {
                echo("La conexión ha fallado. Inténtelo de nuevo, más tarde."
                .mysqli_error($conectar));
            } 
            mysqli_close($conectar);
        ?>
        </div>
    </div>
</body>