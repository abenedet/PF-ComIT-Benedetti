<head> 
    <link type="text/css" rel="stylesheet" href="css/estilos_inicio.css">
     <script>
         $(document).ready(function(){
             $('.parallax').parallax();
         })

            $(document).ready(function(e){
                $("#btnContacto").click(function(e){
                    var url= $(this).attr("href");
                    $(".parallax-container").load(url);
                    return false;
                });
            });
            
            
            $(document).ready(function(e){
                $("#btnDisponibilidad").click(function(e){
                    var url= $(this).attr("href");
                    $(".parallax-container").load(url);
                    return false;
                });
            });

            $(document).ready(function(){
             $('.datepicker').datepicker();
            });
     </script>   
</head>

<!--fondo-->
<body>
   <!-- <div class="contenedorppal">-->
        <div class="parallax-container">
            <div class="parallax">
                    <img src="img/fondo_ppal2.png">
            </div>
            <div class="container">
                <h1 id="titulo1">Mi Empresa</h1><p id="parrafo1">Servicio online de salones y casitas de fiestas</p>

                <h2 id="titulo2">¿Querés publicar en MiEmpresa?</h2> 
                <a id="btnContacto" class="waves-effect waves-light btn" href="php/contacto.php">Contactanos</a>

                <h3 id="titulo3">¿Estás buscando un lugar donde realizar tu evento?</h3> 
                <p>Seleccioná la fecha en la que lo querés realizar y consultá qué salones hay disponibles</p>
                <br>
                <input type="text" id="calendario" class="datepicker">
                
                <a id="btnDisponibilidad" class="waves-effect waves-light btn" href="php/catalogo.php">Consultar</a>
                <br>
            </div>
        </div>
     
       <!-- <img src="img/fondo_ppal2.png">-->
        
</body>