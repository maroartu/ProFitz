<?php
require_once('../../core/helpers/commerce.php');
Page::headerTemplate('ProFitz');
?>
        <!-- Separador -->
        <div class="col l12 separador-estilo"></div>

        <div class="container white-text">
            <h3>Soporte</h3>
            <h5>Preguntas frecuentes</h5>
            <a href="" class="orange-text">
                <p>• ¿Como me registro?</p>
            </a>
            <a href="" class="orange-text">
                <p>• ¿Como me registro?</p>
            </a>
            <a href="" class="orange-text">
                <p>• ¿Como me registro?</p>
            </a>
            <!-- Separación -->
            <hr class="white">
            <!-- Mantenimiento -->
            <h3>Mantenimiento</h3>
            <a href="#modal1" class="waves-effect waves-light btn orange modal-trigger" style="margin-bottom: 30px;">Solicitar mantenimiento</a>
            <a href="#modal2" class="waves-effect waves-light btn orange modal-trigger" style="margin-bottom: 30px;">Estado mantenimiento</a>

        </div>

        <!-- Modal generar mantenimiento -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Solicitar mantenimiento</h4>
                <div class="row">
                    <div class="col l12">
                        <h6>Tipo de maquina</h6>
                        <select name="" id="">
                                        <option value="" disabled selected>Tipo de maquina</option>
                                        <option value="1">Bicicleta</option>
                                        <option value="2">Mini Gym</option>
                                        <option value="3">Caminadora</option>
                        </select>
                    </div>
                    <div class="col 12">
                        <h6>Precio:</h6>
                        <h6>$ 14.00</h6>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green orange btn-flat left">Regresar</a>
                <a href="#!" class="modal-close waves-effect waves-green orange btn-flat right">Generar</a>
            </div>
        </div>

        <!-- Modal estado mantenimiento -->
        <div id="modal2" class="modal">
            <div class="modal-content">
                <h4>Mantenimiento</h4>
                <table>
                    <thead>
                        <tr>
                            <th>Fecha registro</th>
                            <th>Fecha entrega</th>
                            <th>Estado mantenimiento</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Alvin</td>
                            <td>Eclair</td>
                            <td>$0.87</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green orange btn-flat left">Regresar</a>
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