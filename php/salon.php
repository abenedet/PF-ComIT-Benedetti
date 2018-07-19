
<head>
    <link type="text/css" rel="stylesheet" href="css/estilos_salon.css">	
</head>


<script>

$(document).ready(function(){
    $('.datepicker').datepicker(
        {
            format: 'dd/mm/yyyy',
                 cancel: 'Cancelar',
                 autoClose: true, 
                 //minDate: new Date(),
                 i18n: {   
                    months: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto',
                            'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    monthsShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago',
                            'Sept', 'Oct', 'Nov', 'Dic'],
                    weekdaysShort: ['Dom','Lun','Mar','Miér','Jue',
                            'Vie', 'Sáb'], 
                    weekdaysAbbrev: [ 'D', 'L', 'M', 'X', 'J', 'V', 'S' ]
                    }
        });
     });

    $('.carousel.carousel-slider').carousel({
    fullWidth: true, 
    indicators: true,
    numVisible: 10
  });
</script>

<body>

    <br>
    <br>
    <div class="container">
       <!-- <div class="card-panel">-->
          <!--  <span class="panel-salon">Sinsarabin</span>-->
        <!--</div>-->
        <div class="col s12 m7">
            <!--<h2 class="header">Horizontal Card</h2>-->
            <div class="card horizontal">
                <div class="card-image">
                    <img src="img/logo1.jpg">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        
                        <div class="section">
                            <p>Amplios espacios para chicos de 0 a 14 años. Bautismos, cumpleaños, fiestas teens con 
                                barra de tragos y cotillón. Telas, disco, rincón de princesas, plaza blanda, cama elástica, 
                                inflable, animación, Xbox 360 Kinect y PS3, pista de snaky roller y más! 
                                También hacemos Pink Party con spa, maquillaje, peinados, desfiles y coreos!
                                Atención: Lunes, miércoles y viernes de 9 a 11 hs. Martes, jueves y viernes, de 15.30 a 17.30.</p>
                        </div>

                        <div class="divider"></div>
                            <div class="section">
                                <p>
                                    <i class="material-icons">location_on</i>  San Martín 684
                                </p>
                            </div>

                        <div class="divider"></div>
                            <div class="section">
                                <p>
                                    <i class="material-icons">phone</i>  (0291) 4551001
                                </p>
                            </div>
                        <div class="divider"></div>
                            <div class="section">
                                <p>
                                    <i class="material-icons">phone_android</i>  (0291) 155264299
                                </p>
                            </div>
                    </div>
                    <div class="card-action">
                        <a href="https://www.facebook.com/Sinsarabin-168085873370656/">Facebook</a>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="card-panel">
            <span class="panel-fotos">Fotos</span>
        </div>

       
       <div class="carousel carousel-slider">
            <a class="carousel-item" href="#one"><img src="img/foto11.jpg"></a>
            <a class="carousel-item" href="#two"><img src="img/foto12.jpg"></a>
            <a class="carousel-item" href="#three"><img src="img/foto17.jpg"></a>
            <a class="carousel-item" href="#four"><img src="img/foto16.jpg"></a>
            <a class="carousel-item" href="#five"><img src="img/foto14.jpg"></a>
            <a class="carousel-item" href="#six"><img src="img/foto13.jpg"></a>
            <a class="carousel-item" href="#seven"><img src="img/foto15.jpg"></a>
            <a class="carousel-item" href="#eight"><img src="img/foto18.jpg"></a>
            <a class="carousel-item" href="#nine"><img src="img/foto19.jpg"></a>
            <a class="carousel-item" href="#ten"><img src="img/foto10.jpg"></a>
        </div>

        <br>

        <div class="card-panel">
            <span class="panel-reservas">Reservas</span>
        </div>
        <p>Seleccioná la fecha en la que querés realizar tu evento y hacé tu reserva Online!</p>
        <input type="text" id="calendario" class="datepicker">
        <a id="btnReserva" class="waves-effect waves-light btn" href="php/reservas.php">Reservar</a>
        <br>
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
        <br>
        <div class="card-panel">
            <span class="panel-ubicacion">Cómo llegar</span>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6225.564851082556!2d-62.257166!3d-38.722804!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95eda34a2eb329f3%3A0xbe639aaedb6ce554!2sSan+Mart%C3%ADn+684%2C+B8000FIN+Bah%C3%ADa+Blanca%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1531969354286" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        
       

    </div>
    <br>
</body>