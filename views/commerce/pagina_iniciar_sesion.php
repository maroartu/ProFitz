<?php
require_once('../../core/helpers/commerce.php');
Page::headerTemplate('ProFitz');
?>
        <!-- Separador -->
        <div class="col l12 separador-estilo"></div>

        <!-- Container inicio de sesión -->
        <div class="container" >
            <div id=sesion-form method='post'>
                <div class="row white" style="border-radius: 1em;">
                <div class="col l12 s12 m12 center">
                    <h3>Iniciar sesión</h3>
                </div>

                <div class="col l12 s12 m12">
                    <h6>Ingresa tu correo electronico:</h6>
                </div>
                <div class="input-field col l12 s12 m12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right"></span>
                </div>
                <div class="col l12 s12 m12">Ingresa tu contraseña:</div>
                <div class="input-field col l12 s12 m12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Contraseña</label>
                </div>
                <div class="col l12 s12">
                    <a href="#modal1" class="black-text modal-trigger">Olvide la contraseña</a>
                </div>

                <div class="col l12 s12 m12 center">
                    <a href="" class="waves-effect waves-light btn orange" style="margin-bottom: 20px;">Ingresar</a>
                </div>
            </div>
        </div>
            
        </div>

        <!-- ¿No tienes cuenta -->
        <div class="container">
            <div class="row center">
                <div class="col l12 s12 white-text">
                    <h5>¿Eres nuev@?</h5>
                </div>
                <div class="col l12 s12" style="margin-bottom: 20px;">
                    <a href="" class="waves-effect waves-light btn orange">Registrarse</a>
                </div>
            </div>
        </div>

        <!-- Recuperar la contraseña modal -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Recuperar la contraseña</h4>
                <div class="row">
                    <div class="col l12 s12">
                        Ingresa tu correo electronico
                    </div>
                    <div class="input-field col l12 s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="wrong" data-success="right"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer center">
                <a href="#modal2" class="waves-effect waves-green orange btn-flat white-text modal-trigger modal-close">Recuperar contraseña</a>
            </div>
        </div>

        <!-- Recuperar la contraseña modal -->
        <div id="modal2" class="modal">
            <div class="modal-content">
                <h4>Recuperar la contraseña</h4>
                <div class="row">
                    <div class="col l12 s12">
                        Ingresa tu correo electronico
                    </div>
                    <div class="input-field col l12 s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Ingresa el código enviando a tu correo</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer center">
                <a href="#modal3" class="waves-effect waves-green orange btn-flat white-text modal-trigger modal-close">Recuperar contraseña</a>
            </div>
        </div>

        <!-- Recuperar la contraseña modal -->
        <div id="modal3" class="modal">
            <div class="modal-content">
                <h4>Recuperar la contraseña</h4>
                <div class="row">
                    <div class="col l12 s12">
                        Nueva contraseña
                    </div>
                    <div class="input-field col l12 s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Ingresa la nueva contraseña</label>
                    </div>
                    <div class="col l12 s12">
                        Confirmar contraseña
                    </div>
                    <div class="input-field col l12 s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Verificar la contraseña</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer center">
                <a href="#!" class="waves-effect waves-green orange btn-flat white-text modal-close">Cambiar contraseña</a>
            </div>
        </div>

        <!-- Icono de ayuda -->
        <div class="fixed-action-btn hide-on-small-only">
            <a href="../../views/commerce/pagina_soporte.php" class="btn-floating btn tooltipped icono-ayuda" data-position="left" data-tooltip="Soporte">
                <i class="large material-icons">help</i>
            </a>
        </div>

    <?php
Page::footerTemplate('login.js');
?>