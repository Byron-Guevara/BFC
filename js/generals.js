
$(document).ready(function () {
    $('.sliderServicios').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        dots: false,
        nav: true,
        items: 4,
        stagePadding: 2,
        navText: ["<img src='http://localhost:8888/bfc/wp-content/themes/bfc/img/flecha-Izq.png'>", "<img src='http://localhost:8888/bfc/wp-content/themes/bfc/img/flecha-Der.png'>"]
    });

    $('.sliderContenido').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        dots: false,
        nav: true,
        stagePadding: 2,
        navText: ["<img src='http://localhost:8888/bfc/wp-content/themes/bfc/img/flecha-Izq.png'>", "<img src='http://localhost:8888/bfc/wp-content/themes/bfc/img/flecha-Der.png'>"],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1024: {
                items: 4,
            }
        },
    });

    $('.slider-servicios-mercados').owlCarousel({
        loop: false,
        margin: 6,
        nav: true,
        dots: false,
        nav: true,
        items: 7,
        navText: ["<img src='http://localhost:8888/bfc/wp-content/themes/bfc/img/flecha-Izq.png'>", "<img src='http://localhost:8888/bfc/wp-content/themes/bfc/img/flecha-Der.png'>"],
        responsive: {
            0: {
                items: 2,
            },
            768: {
                items: 4,
            },
            1024: {
                items: 5,
            },
            1110: {
                items: 6,
            },
            1280: {
                items: 7,
            }
        }
    });

    $('.sliderCasos').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        dots: true,
        nav: true,
        stagePadding: 50,
        items: 3,
        navText: ["<img src='http://localhost:8888/bfc/wp-content/themes/bfc/img/flecha-Izq.png'>", "<img src='http://localhost:8888/bfc/wp-content/themes/bfc/img/flecha-Der.png'>"],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1024: {
                items: 3,
            }
        }
    });

    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        initialSlide: 1,
        preloadImages: true,
        loop: true,
        coverflowEffect: {
            rotate: 0,
            stretch: 100,
            depth: 500,
            modifier: 1,
            slideShadows: false,
        },
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },

            768: {
                slidesPerView: 'auto',
            }
        }
    });

    /*
    $(".contenedor-general-capas .contenedor-items-capas .cont-item-capa").each(function(index){
        $(this).on("click", function(){
            var indice = index;
            $(".contenedor-general-capas .contenedor-items-capas .cont-item-capa.active").removeClass("active");
            $(this).addClass("active");
            $(".contenedor-general-capas .contenedor-items-contenido .cont-item-contenido.active").hide();
            $(".contenedor-general-capas .contenedor-items-contenido .cont-item-contenido.active").removeClass("active");
            $(".contenedor-general-capas .contenedor-items-contenido .cont-item-contenido").each(function(indexx){
                if(indice == indexx){
                    $(this).fadeIn(500);
                    $(this).addClass("active");
                }
            });
        });
    });
    */

    $(".contenedor-general-capas .contenedor-items-capas .cont-item-capa").each(function (index) {
        $(this).click(function () {
            $(".contenedor-general-capas .contenedor-items-capas .cont-item-capa").removeClass("active");
            $(this).addClass("active");
            $(".contenedor-general-capas .contenedor-items-contenido .cont-item-contenido").removeClass("active");
            $(".contenedor-general-capas .contenedor-items-contenido .cont-item-contenido").eq(index).addClass("active");
        });
    });

});
