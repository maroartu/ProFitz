<?php
require_once('../../core/helpers/commerce.php');
Page::headerTemplate('ProFitz');
?>

        <!-- Separador -->
        <div class="col l12 separador-estilo"></div>

        <!-- Container inicio de sesión -->
        <div class="container">
            <div class="row white" style="border-radius: 1em;">
                <div class="col l12 s12 m12 center">
                    <h3>Iniciar sesión</h3>
                </div>
                <!-- Nombre -->
                <div class="col l12 s12 m12">
                    <h6>Nombre completo:</h6>
                </div>
                <div class="input-field col l12 s12 m12">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Nombre</label>
                </div>
                <!-- Apellido -->
                <div class="col l12 s12 m12">
                    <h6>Apellido completo:</h6>
                </div>
                <div class="input-field col l12 s12 m12">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Apellidos</label>
                </div>
                <!-- Correo -->
                <div class="col l12 s12 m12">
                    <h6>Ingresa tu correo electronico:</h6>
                </div>
                <div class="input-field col l12 s12 m12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>
                <!-- Numero -->
                <div class="col l12 s12 m12">
                    <h6>Numero de telefono:</h6>
                </div>
                <div class="input-field col l12 s12 m12">
                    <input id="phone" type="text" class="validate">
                    <label for="phone">Numero de telefono</label>
                </div>
                <!-- Contraseña -->
                <div class="col l12 s12 m12">Ingresa tu contraseña:</div>
                <div class="input-field col l12 s12 m12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Contraseña</label>
                </div>
                <!-- Dirección -->
                <div class="col l12 s12 m12">Dirección:</div>
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Ingresa tu dirección</label>
                        </div>
                    </div>
                </form>

                <!-- Boton -->
                <div class="col l12 s12 m12 center">
                    <a href="" class="waves-effect waves-light btn orange" style="margin-bottom: 20px;">Registrase</a>
                </div>
            </div>
        </div>

        <!-- ¿Ya tienes cuenta? -->
        <div class="container">
            <div class="row center">
                <div class="col l12 s12 white-text">
                    <h5>¿Ya tienes cuenta?</h5>
                </div>
                <div class="col l12 s12" style="margin-bottom: 20px;">
                    <a href="" class="waves-effect waves-light btn orange">Iniciar sesión</a>
                </div>
            </div>
        </div>

        <!-- Icono de ayuda -->
        <div class="fixed-action-btn hide-on-small-only">
            <a href="../../views/commerce/pagina_soporte.php" class="btn-floating btn tooltipped icono-ayuda" data-position="left" data-tooltip="Soporte">
                <i class="large material-icons">help</i>
            </a>
        </div>

    <?php
Page::footerTemplate('');
?>