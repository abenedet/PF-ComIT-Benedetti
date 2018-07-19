
<head>
    <link type="text/css" rel="stylesheet" href="css/estilos_login.css">
    <script>
        $(document).ready(function()
        {
            $('.modal-trigger').leanModal();
        });


         $(document).ready(function(e){
                $("#btnIngresar").click(function(e){
                    var url= $(this).attr("href");
                    $(".parallax-container").load(url);
                    return false;
                });
            });
        
         $(document).ready(function(e){
                $("#btnRegistrar").click(function(e){
                    var url= $(this).attr("href");
                    $(".parallax-container").load(url);
                    return false;
                });
            });
               
               
    </script>

</head>
<body>
    <div class="container">
        <div class= "row">
            <div class="col s12">
            <div class="card-panel">
                <span class="panel-login"><h2 id="subtitulo2">Iniciar Sesión</h2></span>
                
               <!-- <p></p>-->
              <!-- <form action="/form/login.html" method="POST" class="formulario-login" name="login" id="formulario-login">-->
                   <form action="php/login.php" method="POST">
                    <div class="input-field">
                        <input type="text" id="email" name="email">
                        <label for="email">E-Mail </label>
                    </div>

                    <div class="input-field">
                        <input type="password" id="password" name="password">
                        <label for="password">Contraseña </label>
                    </div>
                   <!-- <input type="submit" value="Enviar">-->
                   
                    <button class="btn waves-effect waves-light" type="submit" id="submit" name="btnIngresar">Ingresar
                        <i class="material-icons right">send</i>
                    </button>
                </form>

                <br>

                <a href="../html/recuperarcuenta.html">He olvidado mi contraseña</a>

                <h3 id="subtitulo3">¿No estás registrado?</h3>

                <!--<a href="/html/registro.html">Registrate acá</a>-->
                   <!-- Ventana Modal Registro -->

                <a  href="#modal1" class="waves-effect waves-light btn modal-trigger">Registrate acá</a>
            </div> 
                <div id="modal1" class="modal">
                        <div class="modal-content">
                                <div class="container-registro">
                                        <div class= "row">
                                            <div class="col s12">
                                            <div class="section">
                                                <h4 id="subtitulo4">Registro</h4>
                                                <div class="divider"></div>
                                            </div>
                                               <!-- <p></p>-->
                                                <form action="php/registro.php" method="POST">
                                                    <div class="input-field">
                                                        <input type="text" id="nombre" name="nombre">
                                                        <label for="nombre">Nombre </label>
                                                    </div>
                                
                                                    <div class="input-field">
                                                        <input type="text" id="apellido" name="apellido">
                                                        <label for="apellido">Apellido </label>
                                                    </div>
                                
                                                    <div class="input-field">
                                                        <input type="text" id="dni" name="dni">
                                                        <label for="dni">DNI </label>
                                                    </div>
                                
                                                    <div class="input-field">
                                                        <input type="text" id="direccion" name="direccion">
                                                        <label for="direccion">Dirección </label>
                                                    </div>
                                
                                                    <div class="input-field">
                                                        <input type="text" id="telefono" name="telefono">
                                                        <label for="telefono">Teléfono </label>
                                                    </div>
                                
                                                    <div class="input-field">
                                                        <input type="text" id="email2" name="email2">
                                                        <label for="email">E-Mail </label>
                                                    </div>
                                
                                                    <div class="input-field">
                                                        <input type="password" id="password2" name="password2">
                                                        <label for="password">Contraseña </label>
                                                    </div>
                                
                                                    <div class="input-field">
                                                        <input type="password" id="repeatpassword" name="repeatpassword">
                                                        <label for="repeatpassword">Repetir Contraseña </label>
                                                    </div>
                                
                                                   
                                                    <button class="btn waves-effect waves-light" type="submit" id="submit" name="btnRegistrar">Enviar
                                                        <i class="material-icons right">send</i>
                                                    </button>
                                
                                                </form>
                                
                                
                                            </div>
                                
                                
                                        </div>
                                
                                    </div>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir</a>
                        </div>
                      </div>
                   
            </div>


        </div>
   

    </div>

</body>