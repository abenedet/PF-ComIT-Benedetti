<head> 

    <link type="text/css" rel="stylesheet" href="css/estilos_head.css">
        <script>
            
            $(document).ready(function(e){
                $(".nav_menu ul li a").click(function(e){
                    var url= $(this).attr("href");
                    $(".parallax-container").load(url);
                    return false;
                });
            });


              $(document).ready(function(){
              $('.sidenav').sidenav();
              });
        
        </script>
</head>
<!--Head-->
<body>
        <div class="navbar">
            <nav class="nav_menu">
                <div class="nav-wrapper">
                   
                   <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                       <ul class="left hide-on-med-and-down">
                           <li><a class="nav_menu_enlace" href="php/inicioview.php">Inicio</a></li>
                           <li><a class="nav_menu_enlace" href="php/catalogo.php">Catálogo</a></li>
                           <li><a class="nav_menu_enlace" href="php/info.php">Acerca de nosotros</a></li>
                           <li><a class="nav_menu_enlace" href="php/contacto.php">Contacto</a></li>
                       </ul>
                       <ul class="right hide-on-med-and-down">
                           <li><a class="nav_menu_enlace" href="php/loginview.php">Iniciar sesión</a></li>
                       </ul>    
               </div>
             </nav>
          <ul class="sidenav" id="mobile-demo">
            <li><a class="nav_menu_enlace" href="php/inicioview.php">Inicio</a></li>
            <li><a class="nav_menu_enlace" href="php/catalogo.php">Catálogo</a></li>
            <li><a class="nav_menu_enlace" href="php/info.php">Acerca de nosotros</a></li>
            <li><a class="nav_menu_enlace" href="php/contacto.php">Contacto</a></li>
            <li><a class="nav_menu_enlace" href="php/loginview.php">Iniciar sesión</a></li>
           </ul>
         </div>

</body>