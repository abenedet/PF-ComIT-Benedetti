<head>
    <script>
        $(document).ready(function(){
        $('select').formSelect();
        });
    </script>
</head>

<body>
  <!--Card Panel-->
    <div class="card-panel">
        <span class="black-text">A Basic Panel</span>
    </div>

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
                    $nombre= $row['Nombre']; 
                    $logo= $row['URL_Logo'];
                    $descripcion= $row['Descripcion'];

                    echo '<div class="col s12 m3"> ';
                        echo '<div class="card">';
                            echo '<div class="card-image">';
                                echo '<img src='.$logo.'>';
                            echo '</div>';

                        echo '<div class="card-content">';
                        echo '<p>'.$nombre.'</p>';
                        echo '<p>'.$descripcion.'</p>';
                    echo '</div>';
                    echo '<div class="card-action">';
                    echo '<a href="#">Ver más..</a>';
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