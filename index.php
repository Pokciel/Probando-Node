<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,800;0,900;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" type="image/jpg" href="Imagenes/favicon0.ico"/>
    <script src="https://kit.fontawesome.com/1c47cb3d39.js" crossorigin="anonymous"></script>
    <title>CV Desarrolladora Web</title>
</head>
<body>
    <a name="home"></a>
    <header id="menu-fijo">        
        <h2 class="logo"><i class="fas fa-code"></i>  Desarrolladora Web</h2>        
        <input type="checkbox" name="" id="check">
        <label for="check" class="mostrar-menu" id="" >&#8801</label>
        <nav class="menu">
            <ul>
            <li><i class="fas fa-home"></i><a href="#home"><br>Inicio</a></li>
            <li><i class="fas fa-address-card"></i><a href="#experiencia"><br>Sobre mi</a></li>
            <li><i class="fas fa-briefcase"></i><a href="#proyectos"><br>Proyectos</a></li>
            <li><i class="fas fa-envelope"></i><a href="#contacto"><br>Contacto</a></li>
            </ul>
        <label for="check" class="esconder-menu">&#215</label>        
    </nav>
    </header>
    <section id="banner">
        <div class="contenido-banner">
            <h3 class="animate__animated animate__fadeInDown">Desarrollo Web Responsive <br> Mobile Friendly</h3>
            <h3><span>Ayelen Alvo </span> </h3>
            <a href="#" class="boton-empezar">Descargar CV</a>
        </div>
    </section>
    <section id="proyectos">
    <a name="proyectos"></a>
        <div>
            <img src="Imagenes/cel2.jpg" alt="persona1">
            <h4>Tu Marca en la Web</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, corporis.</p>
            <a href="#contacto" class="boton-saber-mas">Saber más</a>
        </div>

        <div>
            <img src="Imagenes/our-work-04.jpg" alt="persona2">
            <h4>Al alcance de todos</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, corporis.</p>
            <a href="#contacto" class="boton-saber-mas">Saber más</a>
        </div>
    </section>

    <section id="iconos">
        <div class="contenido-iconos">
            <div>
                <i class="fas fa-desktop fa-3x"></i>
                <h6>Web</h6>
                <p>Lorem ipsum dolor sit</p>
            </div>
            <div>
                <i class="fas fa-mouse fa-3x"></i>
                <h6>Accesible</h6>
                <p>Lorem ipsum dolor sit</p>
            </div>
            <div id=icono-mobile>
            <i class="fas fa-mobile-alt fa-3x"></i>
            <h6>Responsive</h6>
                <p>Lorem ipsum dolor sit</p>
            </div>
        </div>
        <div class="boton-iconos">
            <a href="#contacto" class="boton-saber-mas">Saber más</a>
        </div>    
    </section>

    <section class="experiencia">
    <a name="experiencia"></a>        
            <div class="section-about-me__container">
                <h3>Conocimientos</h3>
                <div class="graficos-experiencia">                    
                    <div class="graficos-experiencia-visual">
                        <div class="graficos-info">
                            <p>Soy estudiante autodidacta y me encanta aprender.</p>
                            <i class="fas fa-database"></i>                            
                        </div>
                        <div class="graficos-porcentajes">
                            <span>HTML</span>
                            <div class="barras">
                                <div class="barra-html"></div>
                            </div>
                            <span>CSS</span>
                            <div class="barras">
                                <div class="barra-css"></div>
                            </div>
                            <span>JavaScript</span>
                            <div class="barras">
                                <div class="barra-js"></div>
                            </div>
                            <span>PHP</span>
                            <div class="barras">
                                <div class="barra-php"></div>
                            </div>
                            <span>Python</span>
                            <div class="barras">
                                <div class="barra-py"></div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>

    <section id="contacto">
        <a name="contacto"></a>
        <h4>Contacta conmigo</h4>
        <form action="index.php" method="post" class="form-contact">
            <div class="datos-form">
                <div class="nombre">
                    <label for="nombre">Nombre<i class="far fa-user"></i></label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                </div>
                <div class="email">
                    <label for="email">Email<i class="far fa-envelope"></i></label>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
            </div>
            <div class="mensaje">
                <label for="mensaje">Mensaje<i class="far fa-edit"></i></label>
                <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>
            </div>
            <div class="boton-formulario">
                <i class="far fa-paper-plane"></i>                
                <input type="submit" class="boton-saber-mas" name="btn1" value="Enviar Mensaje">
            </div>
        </form>
    
        <div class="home">
            <a href="#home">
            <i class="fas fa-home"></i>
            </a>
        </div>
    </section>

    <?php
    if(isset($_POST['btn1'])){
            include("abrir_conexion.php");
            $nombre = $_POST['nombre'];
            $correo = $_POST['email'];
            $mensaje = $_POST['mensaje'];

            if(mysqli_query($conexion, "INSERT INTO contacto (nombre, email, mensaje) values ('$nombre', '$correo', '$mensaje')"))
                echo "El mensaje se envio correctamente";
                else{
                    echo "Hubo un error. Por favor intenta de vuelta";
                }
            include("cerrar_conexion.php");
        }
        ?>

    <footer>
        <p>&copy;2021 Ayelen Alvo</p>
    </footer>   
    
</body>
</html>
