$(document).ready(function () {

    $('.burguer').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        $(this).toggleClass('active');
        $('.mobile-cont-menu').toggleClass('active');
    });

    let button = '<button class="submenu-button"><div>+</div></button>';
    $('.menu-item-has-children').append(button);
    $('.submenu-button').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).toggleClass('active');
        $(this).siblings('.sub-menu').slideToggle(500, "linear");
    });


    $('a[href="#"]').on('click', function (e) {
        e.preventDefault();
        return false;
    });

    $(".contenedor-menu ul li.descarga").each(function(){
        var name = $(this).children("a").text();
        $(this).children("a").attr("download", name);
    });



});