<?php
require_once('../../core/helpers/commerce.php');
Page::headerTemplate('ProFitz');
?>

        <!-- Separador -->
        <div class="col l12 separador-estilo"></div>


        <div class="row">
            <div class="col l3 s12">
            </div>
            <div class="col l6 s12">
                <!-- Producto -->
                <div class="col l12 white" style="border-radius: 1em; padding-bottom: 15px;">
                    <!-- Nombre del producto -->
                    <div class="col l12 s12">
                        <h5 class="hide-on-med-and-down">Bicicleta Master</h5>
                        <h5 class="center hide-on-large-only">Bicicleta Master</h5>
                    </div>
                    <div class="col l12 s12">
                        <!-- Imagen del producto -->
                        <div class="col l3 valign-wrapper"><img class="responsive-img materialboxed" src="../../resources/img/imagenes_productos/bicicleta/Trek.jfif" alt=""></div>
                        <!-- Descripción del producto -->
                        <div class="col l6 s12">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non minima harum dolore commodi dolorem quaerat optio nam et delectus minus maiores at cum facilis suscipit, eum sed, sequi nostrum adipisci?</div>
                        <!-- Cantidad productos y botones -->
                        <div class="col l3">
                            <div class="col l12 s12">
                                <select name="" id="">
                                        <option value="" disabled selected>Cantidad</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                </select>
                            </div>
                            <div class="col l12 s12 hide-on-med-and-down">
                                <a href="" class="  ">Editar</a>
                            </div>
                            <div class="col l12 s12 hide-on-large-only center">
                                <a href="" class="waves-effect waves-light btn orange">Editar</a>
                            </div>
                            <!-- Precio del producto -->
                            <div class="col l12 s12 hide-on-med-and-down">
                                <h5>$ 14.00</h5>
                            </div>
                            <div class="col l12 s12 hide-on-large-only">
                                <h5 class="center">$ 14.00</h5>
                            </div>
                            <!-- Boton -->
                            <div class="col l12 s12 hide-on-med-and-down">
                                <a href="" class="waves-effect waves-light btn orange ">Eliminar</a>
                            </div>
                            <div class="col l12 s12 hide-on-large-only center">
                                <a href="" class="waves-effect waves-light btn orange">Eliminar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Parte derecha carrito de compra -->
            <div class="col l3 s12 hide-on-med-and-down">
                <div class="container">
                    <div class="col l12 white" style="border-radius: 1em;">
                        <!-- Subtotal -->
                        <div class="col l5">
                            <h6>Subtotal: </h6>
                        </div>
                        <div class="col l7">
                            <h6>$ 14.67</h6>
                        </div>
                        <!-- Total -->
                        <div class="col l4">
                            <h6>Total: </h6>
                        </div>
                        <div class="col l8">
                            <h6>$ 14.67</h6>
                        </div>
                        <!-- Cambiar dirección -->
                        <div class="col l12">
                            <a href="" class="waves-effect waves-light btn orange tooltipped" data-position="bottom" data-tooltip="Cambiar dirección">Cambiar dirección</a>
                        </div>
                        <!-- Cantidad -->
                        <div class="col l5">
                            <h6>Cantidad: </h6>
                        </div>
                        <div class="col l7">
                            <h6>12</h6>
                        </div>
                        <div class="col l12" style="margin-bottom: 15px;">
                            <a href="" class="waves-effect waves-light btn orange tooltipped" data-position="bottom" data-tooltip="Finalizar compra">Finalizar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col l3 s12 hide-on-large-only" style="padding-top: 25px;">
                <div class="container">
                    <div class="col l12 white" style="border-radius: 1em; ">
                        <!-- Subtotal -->
                        <div class="col l5 s5">
                            <h6>Subtotal: </h6>
                        </div>
                        <div class="col l7 s7">
                            <h6>$ 14.67</h6>
                        </div>
                        <!-- Total -->
                        <div class="col l4 s4">
                            <h6>Total: </h6>
                        </div>
                        <div class="col l8 s8">
                            <h6>$ 14.67</h6>
                        </div>
                        <!-- Cambiar dirección -->
                        <div class="col l12 s12">
                            <a href="" class="waves-effect waves-light btn orange tooltipped" data-position="bottom" data-tooltip="Cambiar dirección">Cambiar dirección</a>
                        </div>
                        <!-- Cantidad -->
                        <div class="col l5 s5">
                            <h6>Cantidad: </h6>
                        </div>
                        <div class="col l7 s7">
                            <h6>12</h6>
                        </div>
                        <div class="col l12 s12" style="margin-bottom: 15px;">
                            <a href="" class="waves-effect waves-light btn orange tooltipped" data-position="bottom" data-tooltip="Finalizar compra">Finalizar</a>
                        </div>
                    </div>
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