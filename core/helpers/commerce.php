<?php
class Page
{
    public static function headerTemplate($title)
    {
        //Se activa o reanuda una sesión
        session_start();

        //Se imprime el encabezado del documento
        print('
        <!DOCTYPE html>
        <html lang="es">
            <head>
                <!-- Se especifica la codificación de caracteres para el documento -->
                <meta charset="utf-8">
                <!-- Se indica al navegador que la página web está optimizada para dispositivos móviles -->
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <!-- Título del documento -->
                <title>ProFitz</title>
                <!-- Logo de la página -->
                <link rel="icon" href="../../resources/img/logos_tienda/logo_mini_blanco.ico">
                <!-- Importación de archivos CSS -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
                <link rel="stylesheet" href="../../resources/css/commerce.css" type="text/css">
                <!-- Llamada a un archivo tipo icono -->
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <!-- Llamada al tipo de fuente -->
                <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
            </head>
            <body>
    ');
        // Se obtiene el nombre del archivo de la página web actual.
        $filename = basename($_SERVER['PHP_SELF']);
        // Se comprueba si existe una sesión de cliente para mostrar el menú de opciones, de lo contrario se muestra otro menú.
        if (isset($_SESSION['id_cliente'])) {
            //Este es cuando ya ttenes una cuenta iniciada
            // Se verifica si la página web actual es diferente a login.php y register.php, de lo contrario se direcciona a index.php
            if ($filename != 'pagina_iniciar_sesion.php' && $filename != 'signin.php') { 
                print('
                    <header>
                    <div class="navbar-fixed">
                        <nav class="grey darken-4">
                            <div class="nav-wrapper">
                                <a href="index.php" class="brand-logo"><img src="../../resources/img/logos_tienda/logo_mini_blanco.png" height="6   0"></a>
                                <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                                <ul class="right hide-on-med-and-down">
                                    <li><a href="index.php"><i class="material-icons left">view_module</i>Catálogo</a></li>
                                    <li><a href="cart.php"><i class="material-icons left">shopping_cart</i>Carrito</a></li>
                                    <li><a href="#" onclick="logOut()"><i class="material-icons left">close</i>Cerrar sesión</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <ul class="sidenav grey darken-4" id="mobile">
                        <li><a href="index.php"><i class="material-icons left">view_module</i>Catálogo</a></li>
                        <li><a href="cart.php"><i class="material-icons left">shopping_cart</i>Carrito</a></li>
                        <li><a href="#" onclick="logOut()"><i class="material-icons left">close</i>Cerrar sesión</a></li>
                    </ul>
                </header>
                <main>
        ');
            } else {
                header('location: index.php');
            }
        } else {
            //Cuando entras como visitante, sin logearte
            // Se verifica si la página web actual es diferente a index.php (Iniciar sesión) y a register.php (Crear primer usuario) para direccionar a index.php, de lo contrario se muestra un menú vacío.
            if ($filename != 'carrito_compra.php') {
                print('
                <header>
        <!-- Dropdown más de perfil -->
        <ul id="dropdown-más-perfil" class="dropdown-content blue-grey darken-4">
            <li><a href="../../views/commerce/pagina_iniciar_sesion.php">Iniciar sesión</a></li>
            <li class="divider"></li>
            <li><a href="../../views/commerce/signin.php">Registrarse</a></li>
        </ul>


        <!-- Navbar -->
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper navbar-principal">
                    <!-- Logo -->
                    <a href="../../views/commerce/index.php" class="brand-logo tooltipped center hide-on-med-and-down primario" data-position="bottom" data-tooltip="Página principal"><img src="../../resources/img/logos_tienda/logo_completo_blanco.png" alt="Logo"></a>
                    <a href="../../views/commerce/index.php" class="brand-logo center show-on-small-only hide-on-med-and-up secundario-pequeño" data-position="bottom" data-tooltip="Página principal"><img src="../../resources/img/logos_tienda/logo_mini_blanco.png" alt="Logo"></a>
                    <a href="../../views/commerce/index.php" class="brand-logo center show-on-medium hide-on-small-only hide-on-large-only secundario-mediano" data-position="bottom" data-tooltip="Página principal"><img src="../../resources/img/logos_tienda/logo_mini_blanco.png" alt="Logo"></a>
                    <!-- Sección izquierda Menú -->
                    <ul id="nav-mobile" class="left hide-on-med-and-down">
                        <li><a href="../../views/commerce/pagina_bicicleta.php">Bicicleta</a></li>
                        <li><a href="../../views/commerce/pagina_eliptica.php">Elíptica</a></li>
                        <li><a href="../../views/commerce/pagina_mini_gym.php">Mini Gym</a></li>
                        <li><a href="../../views/commerce/pagina_caminadora.php">Caminadora</a></li>
                    </ul>

                    <!-- Sección derecha -->
                    <ul class="right hide-on-small-only">
                        <li><a class="dropdown-trigger tooltipped" data-position="bottom" data-tooltip="Más" href="" data-target="dropdown-más-perfil"><i class="material-icons">account_circle
                                    keyboard_arrow_down</i></a></li>
                    </ul>

                    <!-- Icono ayuda small size -->
                    <ul class="right">
                        <li><a class="btn-floating btn-med waves-effect waves-light hide-on-med-and-up pequeño-ayuda"><i
                                    class="material-icons">help</i></a></li>
                    </ul>

                    <!-- #Sidenav -->
                    <ul class="left show-on-small-only">
                        <li><a href="#" data-target="slide-out" class="sidenav-trigger"><i
                                    class="material-icons">menu</i></a></li>
                    </ul>

                </div>

                <!-- Navbar buscar-->
                <div class="nav-wrapper tooltipped navbar-buscar" data-position="bottom" data-tooltip="Buscar">
                    <form>
                        <div class="input-field">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </div>


            </nav>
        </div>

        <!-- Sidenav -->
        <ul id="slide-out" class="sidenav sidenav-pequeño">
            
            <li><a href="../../views/commerce/pagina_iniciar_sesion.php">Perfil</a></li>
            <li class="divider"></li>
            <li><a href="../../views/commerce/signin.php">Registrarse</a></li>
            
            <li>
                <div class="divider grey darken-3"></div>
            </li>
            <li><a class="subheader">Menú</a></li>
            <li><a class="waves-effect" href="../../views/commerce/pagina_bicicleta.php">Bicicleta</a></li>
            <li><a class="waves-effect" href="../../views/commerce/pagina_eliptica.php">Elíptica</a></li>
            <li><a class="waves-effect" href="../../views/commerce/pagina_mini_gym.php">Mini Gym</a></li>
            <li><a class="waves-effect" href="../../views/commerce/pagina_caminadora.php">Caminadora</a></li>
        </ul>

    </header>
    <!-- Contenido principal del documento -->
    <main>
        ');;
            } else {
                header('location: pagina_iniciar_sesion.php');
            }
        }
    }



    public static function footerTemplate($controller)
    {
        print('
        </main>

        <!-- Pie del documento -->
        <footer class="page-footer">
            <div class="container footer-principal">
                <div class="row">
                    <div class="col l4 s12 center">
                        <h5 class="white-text">Dirección</h5>
                        <a href="https://www.google.com.sv/maps/place/Vista+Tower/@13.7191319,-89.2379629,17.86z/data=!4m5!3m4!1s0x8f63300452f29dff:0x871aea9de1ac8576!8m2!3d13.7196922!4d-89.2397004?hl=es-419&authuser=0" class="icono-ubicacion tooltipped" data-position="bottom"
                            data-tooltip="Ubicación"><i
                                    class="material-icons medium">location_on</i></a>
                        <p class="grey-text text-lighten-4">Avenida masferrer norte, San Salvador.</p>
                    </div>
                    <div class="col l4 s12 center">
                        <h5 class="white-text">Contactanos</h5>
                        <ul>
                            <li>
                                <p class="grey-text text-lighten-4">+503 2584-0188</p>
                            </li>
                            <li>
                                <p class="grey-text text-lighten-4">profitz@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col l4 s12 center">
                        <div class="row">
                            <div class="col l12 s12 red-social-principal">
                                <h5>Redes sociales</h5>
                            </div>
                            <div class="col l4 s12 icono-red-social">
                                <a href="http://www.facebook.com" class="tooltipped" data-position="bottom" data-tooltip="Facebook"><img src="../../resources/img/redes_sociales/facebook_redes_sociales.png" alt="facebook.png"></a>
                            </div>
                            <div class="col l4 s12 icono-red-social">
                                <a href="https://www.instagram.com/" class="tooltipped" data-position="bottom" data-tooltip="Instagram"><img src="../../resources/img/redes_sociales/instagram_redes_sociales.png" alt="instagram.png"></a>
                            </div>
                            <div class="col l4 s12 icono-red-social">
                                <a href="https://twitter.com/" class="tooltipped" data-position="bottom" data-tooltip="Twitter"><img src="../../resources/img/redes_sociales/twitter_redes_sociales.png" alt="twitter.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright footer-copyright-estilo">
                <div class="container center">
                    © 2020 Copyright ProFitz
                </div>
            </div>
        </footer>

        <!-- Importación de archivos JavaScript al final del documento para una carga optimizada -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <!-- Inicializadores de materialize -->
        <script type="text/javascript" src="../../resources/js/sweetalert.min.js"></script>
        <script type="text/javascript" src="../../core/controllers/commerce/account.js"></script>   
        <script type="text/javascript" src="../../core/helpers/components.js"></script>
        <script type="text/javascript" src="../../resources/js/inicializadores.js"></script>        
        <script type="text/javascript" src="../../core/controllers/commerce/'.$controller.'"></script>
        </body>

        </html>
        ');
    }

}

?>