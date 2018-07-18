<script>
     $(document).ready(function(){
             $('.datepicker').datepicker();
            });

    $(document).ready(function(){
    $('.carousel').carousel();
  });
</script>


<body>

    <div class="container">
       <!-- <div class="card-panel">-->
          <!--  <span class="panel-salon">Sinsarabin</span>-->
        <!--</div>-->
        <div class="col s12 m7">
            <!--<h2 class="header">Horizontal Card</h2>-->
            <div class="card horizontal">
                <div class="card-image">
                    <img src="img/logo2.jpg">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        
                        <div class="section">
                            <p>Descripcion</p>
                        </div>

                        <div class="divider"></div>
                        <div class="section">
                            <p>telefono</p>
                        
                        </div>
                        <div class="divider"></div>

                        
                        <p>Telefono</p>
                        <p>Direccion</p>

                    </div>
                    <div class="card-action">
                        <a href="#">Facebook</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-panel">
            <span class="panel-fotos">Fotos</span>
        </div>

        <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="img/foto11.jpg"></a>
            <a class="carousel-item" href="#two!"><img src="img/foto12.jpg"></a>  
            <a class="carousel-item" href="#three!"><img src="img/foto21.jpg"></a>  
        </div>

        <div class="card-panel">
            <span class="panel-reservas">Reservas</span>
        </div>
        <p>Seleccioná la fecha en la que querés realizar tu evento y hacé tu reserva Online!</p>
        <input type="text" id="calendario" class="datepicker">
        <a id="btnReserva" class="waves-effect waves-light btn" href="php/reservas.php">Reservar</a>
        <br>
        <div class="card-panel">
            <span class="panel-contacto">Contacto</span>
        </div>


        <!--<div class="card-panel"> -->
            <p>Ponete en contacto con Sinsarabin</p>
            <form action:#>
                    <div class="input-field">
                        <input type="text" id="nombre">
                        <label for="nombre">Nombre </label>
                    </div>

                    <div class="input-field">
                        <input type="text" id="asunto">
                        <label for="asunto">Asunto </label>
                    </div>

                    <div class="input-field">
                        <input type="text" id="email">
                        <label for="email">E-Mail </label>
                    </div>

                    <div class="input-field">
                        <textarea name="textarea" id="textarea" cols="30" rows="10" class="materialize-textarea">
                        </textarea>
                        <label for="textarea">Mensaje </label>
                    </div>

                    <a class="waves-effect waves-light btn">Enviar</a>

            </form>
        <!--</div>-->
        <div class="card-panel">
            <span class="panel-contacto">Cómo llegar</span>
        </div>


    </div>
</body>