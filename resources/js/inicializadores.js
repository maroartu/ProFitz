$(document).ready(function() {
    $(".dropdown-trigger").dropdown();
    $('.sidenav').sidenav();
    $('.tooltipped').tooltip();
    $('.fixed-action-btn').floatingActionButton();
    $('.tabs').tabs();
    $('.materialboxed').materialbox();
    $('select').formSelect();
    $('.modal').modal();
    $('.carousel').carousel({ indicators: true, duration: 200, fullWidth: true });

    //Función para cambiar continuamente de imagen en el carrusel
    setInterval(function() {
        $('.carousel').carousel('next');
    }, 5000);
});