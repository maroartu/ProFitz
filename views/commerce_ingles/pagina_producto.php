<?php
require_once('../../core/helpers/commerce_ingles.php');
Page::headerTemplate('ProFitz');
?>
        <!-- Separador -->
        <div class="col l12 separador-estilo"></div>

        <!-- Parte principal del main, detalles del producto seleccionado -->
        <div class="container">
            <div class="row white producto-principal">

                <!-- Imagen del producto -->
                <div class="col l4 s12 m12 imagen-producto-principal-distancia"><img src="../../resources/img/imagenes_productos/bicicleta/bicicleta_3.jpg" alt="" class="responsive-img materialboxed tooltipped" data-position="bottom" data-tooltip="¡Da click!"></div>
                <!-- Información y precio del producto -->
                <div class="col l8">
                    <!-- Información del producto -->
                    <div class="col l8 s12 m12">
                        <!-- Nombre del producto -->
                        <div class="col l12 s12 m12">
                            <h3 class="tooltipped" data-position="bottom" data-tooltip="Modelo del producto">Bicicleta 800</h3>
                        </div>
                        <!-- Marca del producto -->
                        <div class="col l12 s12 m12 tooltipped" data-position="left" data-tooltip="Marca">
                            <h4>Trek</h4>
                        </div>
                        <!-- Estado del producto -->
                        <div class="col l12 s12 m12">
                            <h5 class="grey-text tooltipped" data-position="left" data-tooltip="Estado del producto">Disponible</h5>
                        </div>
                        <!-- Descripicón del producto -->
                        <div class="col l12 s12 m12">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure, rem. Aliquam dolorem velit voluptatem quibusdam blanditiis molestias rerum soluta cumque debitis alias nesciunt provident quos iure odio exercitationem, facere
                                fugiat!
                            </p>
                        </div>
                    </div>
                    <!-- Precio del producto -->
                    <div class="col l4 s12 m12">
                        <!-- Valoración del producto -->
                        <div class="col l12 s4 m4">
                            <h5>4.8<i class="material-icons orange-text small">star</i></h5>
                        </div>
                        <!-- Precio del producto -->
                        <div class="col l12 s12 m4">
                            <h4>$ 200</h4>
                        </div>
                        <!-- Descuento del producto -->
                        <div class="col l12 s12 m4">
                            <p>Descuento:
                                <p>$ 300 - 10%</p>
                            </p>
                        </div>
                        <!-- Cantidad de productos -->
                        <div class="col l12 s12 m12">
                            <div class="input-field col l12 s12 m12">
                                <select name="" id="">
                                        <option value="" disabled selected>Cantidad</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <!-- Boton de agregar al carrito -->
                        <div class="col l12 s12">
                            <a href="" class="waves-effect waves-light btn tooltipped hide-on-small-only" data-position="bottom" data-tooltip="Agregar al carrito">Agregar al carrito</a>
                            <a href="" class="center waves-effect waves-light btn tooltipped hide-on-med-and-up" data-position="bottom" data-tooltip="Agregar al carrito">Agregar al carrito</a>
                            <div style="padding-bottom: 10px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Separación -->
        <div class="container">
            <hr class="white">
        </div>

        <div class="container white-text">
            <div class="col l12">
                <h5>Productos similares u otros productos</h5>
            </div>
        </div>

        <!-- Productos relacionados o otros productos -->
        <div class="container white-text">
            <div class="row" style="padding-top: 15px;">
                <div class="col l12">
                    <div class="col l4">
                        <a href=""><img src="../../resources/img/imagenes_productos/bicicleta/Trek.jfif" alt="" class="responsive-img"></a>
                    </div>
                    <div class="col l8">
                        <!-- Nombre producto -->
                        <div class="col l12">
                            <a href="" class="white-text">
                                <h3>Bicicleta</h3>
                            </a>
                        </div>
                        <!-- Descripción del producto -->
                        <div class="col l12">
                            <a href="" class="white-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia voluptates cum inventore sequi corrupti dicta nam fugit aliquam perferendis quidem optio, nisi, non quam a officiis doloremque nemo eos explicabo.</a>
                        </div>
                        <!-- Separación -->
                        <div class="separación-poductos-relacionados"></div>
                        <!-- Valoración y precio del producto -->
                        <div class="col l12">
                            <div class="col l6">
                                <a href="" class="white-text">
                                    <h5>$ 600.00</h5>
                                </a>
                            </div>
                            <div class="col l6">
                                <a href="" class="white-text">
                                    <h5>4.5 <i class="material-icons orange-text">star</i></h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Separación -->
        <div class="container">
            <hr class="white">
        </div>

        <div class="container white-text">
            <div class="col l12">
                <h5>Preguntas y respuestas</h5>
            </div>
            <div class="row">
                <div class="col l12">
                    <div class="col l3 white" style="border-radius: 1em;">
                        <select name="" id="">
                                        <option value="" disabled selected>Califica el producto</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                            </select>
                    </div>
                </div>
                <div class="col l12">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea white-text"></textarea>
                        <label for="textarea1">Escribe tu comentario</label>
                    </div>
                </div>
                <div class="col l12">
                    <div class="col l5 s12">
                        <a href="" class="waves-effect waves-light btn orange">Enviar</a>
                    </div>
                </div>
                <div class="col l12 s12">
                    <h5>Comentarios</h5>
                </div>
                <div class="col l12" style="height: 30px;"></div>
                <div class="col l12">
                    <div class="col l10 valign-wrapper">
                        <div class="col l1"><img src="../../resources/img/sidenav/yuna.jpg" alt="" class="circle" width="50px"></div>
                        <div class="col l11 ">
                            <div class=" col l12 ">Leonardo Fernandez</div>
                        </div>
                    </div>
                    <div class="col l2">
                        <h5>4.6 <i class="material-icons orange-text tiny">star</i></h5>
                    </div>
                </div>
                <div class="col l12 white" style="border-radius: 1em;">
                    <p class="black-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat quidem excepturi numquam dolorem, sit consequatur suscipit minima quo error, harum ducimus odit, voluptatibus debitis nostrum doloremque dignissimos. Soluta, impedit
                        sunt!
                    </p>
                </div>
            </div>
        </div>

        <!-- Icono de ayuda -->
        <div class="fixed-action-btn hide-on-small-only ">
            <a href="../../views/commerce/pagina_soporte.php" class="btn-floating btn tooltipped icono-ayuda " data-position="left " data-tooltip="Soporte ">
                <i class="large material-icons ">help</i>
            </a>
        </div>

    <?php
Page::footerTemplate('');
?>