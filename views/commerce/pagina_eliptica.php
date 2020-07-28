<?php
require_once('../../core/helpers/commerce.php');
Page::headerTemplate('ProFitz');
?>



        <!-- Separador -->
        <div class="col l12 s12 separador-estilo"></div>

        <!-- Tema de la página -->
        <div class="black white-text center">
            <h2>Elípticas</h2>
        </div>

        <!-- Area de productos -->

        <div class="container">
            <div class="row white" style="border-radius: 1rem; padding-bottom: 25px; margin-top: 30px;">
                <div class="col l4">
                    <div class="col l12 hide-on-med-and-down separador-imagenes-main"></div>
                    <img src="../../resources/img/imagenes_productos/bicicleta/Trek.jfif" alt="" class="materialboxed responsive-img">
                </div>
                <div class="col l8">
                    <div class="col l12">
                        <a href="" class="black-text">
                            <h2>Corsair BM50</h2>
                        </a>
                    </div>
                    <div class="col l12 s12">
                        <a href="" class="black-text">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure sunt fuga, excepturi deleniti, adipisci pariatur, doloribus tempore dolor earum nam facere eos placeat sed dignissimos sint ipsum non commodi laboriosam.</p>
                        </a>
                        <a href="" class="black-text">
                            <h6>4.5 <i class="material-icons tiny orange-text">star</i></h6>
                        </a>
                    </div>
                    <div class="col l12 s12">
                        <a href="" class="black-text">
                            <h3>$120</h3>
                        </a>
                    </div>
                    <div class="col l12 hide-on-med-and-down">
                        <a href="" class="orange waves-effect waves-light btn" style="border-radius: 1em;">Añadir al carrito</a>
                    </div>
                    <div class="col s12 show-on-small hide-on-large-only center">
                        <a href="" class="orange waves-effect waves-light btn" style="border-radius: 1em;">Añadir al carrito</a>
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