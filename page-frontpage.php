<?php
/**
* Template Name: Front Page
*
*/
?>
<?php get_header(); ?>

<div class="contenedor-general-principal">
    <div class="sliderPrincipal owl-carousel owl-theme">

    <?php if(have_rows('slider_principal')): ?>
        <?php while(have_rows('slider_principal')): the_row(); 
            $imagen = get_sub_field('imagen');
            $informacion = get_sub_field('informacion');
        ?>

        <div class="item" style="background-image: url(<?php the_sub_field('imagen'); ?>);">
            <div class="overlay"></div>
            <img src="<?php the_sub_field('imagen'); ?>" alt="">
            <div class="contenedor-info cont-contenido">
                <div class="cont-info">
                    <?php the_sub_field('informacion'); ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <!--
        <div class="item" style="background-image: url(<?php echo get_template_directory_uri().'/img/slide1.jpg';?>);">
            <div class="overlay"></div>
            <img src="<?php echo get_template_directory_uri().'/img/slide1.jpg';?>" alt="">
            <div class="contenedor-info cont-contenido">
                <div class="cont-info">
                    <h1>
                        NUESTRO éxito: <br>
                        <span>la experiencia</span>
                    </h1>
                    <p>
                        Contamos con más de 15 años de experiencia ejecutando proyectos en Seguridad Funcional e Ingeniería de Riesgos de Proceso.
                    </p>
                </div>
            </div>
        </div>

        <div class="item" style="background-image: url(<?php echo get_template_directory_uri().'/img/slide1.jpg';?>);">
            <div class="overlay"></div>
            <img src="<?php echo get_template_directory_uri().'/img/slide1.jpg';?>" alt="">
            <div class="contenedor-info cont-contenido">
                <div class="cont-info">
                    <h1>
                        NUESTRO éxito: <br>
                        <span>la experiencia</span>
                    </h1>
                    <p>
                        Contamos con más de 15 años de experiencia ejecutando proyectos en Seguridad Funcional e Ingeniería de Riesgos de Proceso.
                    </p>
                </div>
            </div>
        </div>
    -->

    </div>
</div>

<div class="contenedor-ser-mer-cas">

    <div class="contenedor-general-servicios contenedor-servicios-casos">
        <div class="cont-contenido">
            <div class="cont-enc">
                <h1>SERVICIOS</h1>
                <p>
                    Ofrecemos una gran variedad de servicios técnicos especializados en Seguridad
                    Funcional e Ingeniería de Riesgos de la más alta calidad.
                </p>
            </div>
            <div class="sliderServicios cont-servicios-casos owl-carousel owl-theme">
                <?php
                    $args = array( 'post_type' => 'servicios', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby'=>'fecha', 'order'=>'ASC');
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $thumbID = get_post_thumbnail_id( $post->ID );
                    $imgDestacada = wp_get_attachment_url( $thumbID );
                ?>
                <div class="cont-item" style="background-image: url(<?php the_field('imagen_carrusel'); ?>);">
                    <div class="cont-size">
                        <img src="<?php echo get_template_directory_uri().'/img/servicio-size.jpg';?>" alt="">
                    </div>
                    <div class="cont-tit">
                        <p>
                            <?php the_title(); ?>
                        </p>
                    </div>
                    <div class="mask">
                        <div class="info">
                            <p class="title"><?php the_title(); ?></p>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">Ver más</a>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                ?>
                <!--
                    <div class="cont-item" style="background-image: url(<?php echo get_template_directory_uri().'/img/servicio1.jpg';?>);">
                        <div class="cont-size">
                            <img src="<?php echo get_template_directory_uri().'/img/servicio-size.jpg';?>" alt="">
                        </div>
                        <div class="cont-tit">
                            <p>
                                Seguridad Funcional
                            </p>
                        </div>
                    </div>
                    <div class="cont-item" style="background-image: url(<?php echo get_template_directory_uri().'/img/servicio2.jpg';?>);">
                        <div class="cont-size">
                            <img src="<?php echo get_template_directory_uri().'/img/servicio-size.jpg';?>" alt="">
                        </div>
                        <div class="cont-tit">
                            <p>
                                ingeniería de riesgos de proceso
                            </p>
                        </div>
                        <div class="mask">
                            <div class="info">
                                <p class="title">ddddd</p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Facilis consequuntur a officia assumenda odit harum ipsum dolor reprehenderit.
                                </p>
                                <a href="#">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="cont-item" style="background-image: url(<?php echo get_template_directory_uri().'/img/servicio3.jpg';?>);">
                        <div class="cont-size">
                            <img src="<?php echo get_template_directory_uri().'/img/servicio-size.jpg';?>" alt="">
                        </div>
                        <div class="cont-tit">
                            <p>
                                Administración de Capas de Protección
                            </p>
                        </div>
                    </div>
                    <div class="cont-item" style="background-image: url(<?php echo get_template_directory_uri().'/img/servicio2.jpg';?>);">
                        <div class="cont-size">
                            <img src="<?php echo get_template_directory_uri().'/img/servicio-size.jpg';?>" alt="">
                        </div>
                    </div>
                -->
            </div>
        </div>
    </div>


    <div class="contenedor-general-mercados">
        <div class="cont-contenido">
            <div class="cont-enc">
                <h1>MERCADOS</h1>
                <p>
                    Gracias a nuestra extensa experiencia en el mercado, podemos brindar servicios especializados a
                    una amplia gama de industrias, atendiendo sus necesidades al ofrecerles soluciones integrales.
                </p>
            </div>

            <div class="sliderMercados cont-mercados owl-carousel owl-theme">
                <?php
                    $args = array( 'post_type' => 'mercados', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby'=>'fecha', 'order'=>'ASC');
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $thumbID = get_post_thumbnail_id( $post->ID );
                    $imgDestacada = wp_get_attachment_url( $thumbID );
                ?>
                <div class="cont-mercado" style="background-image: url(<?php the_field('imagen_carrusel'); ?>);">
                    <div class="cont-size">
                        <img src="<?php echo get_template_directory_uri().'/img/mercado-size.jpg';?>" alt="">
                    </div>
                    <div class="mask">
                        <div class="info">
                            <p class="title"><?php the_title(); ?></p>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">Ver más</a>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                ?>
                <!--
                    <div class="cont-mercado" style="background-image: url(<?php echo get_template_directory_uri().'/img/mercado1.jpg';?>);">
                        <div class="cont-size">
                            <img src="<?php echo get_template_directory_uri().'/img/mercado-size.jpg';?>" alt="">
                        </div>
                    </div>
                    <div class="cont-mercado" style="background-image: url(<?php echo get_template_directory_uri().'/img/mercado2.jpg';?>);">
                        <div class="cont-size">
                            <img src="<?php echo get_template_directory_uri().'/img/mercado-size.jpg';?>" alt="">
                        </div>
                        <div class="mask">
                            <div class="info">
                                <p class="title">Química y Petroquímica</p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Facilis consequuntur a officia assumenda odit harum ipsum dolor reprehenderit.
                                </p>
                                <a href="#">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="cont-mercado" style="background-image: url(<?php echo get_template_directory_uri().'/img/mercado3.jpg';?>);">
                        <div class="cont-size">
                            <img src="<?php echo get_template_directory_uri().'/img/mercado-size.jpg';?>" alt="">
                        </div>
                    </div>
                    <div class="cont-mercado" style="background-image: url(<?php echo get_template_directory_uri().'/img/mercado4.jpg';?>);">
                        <div class="cont-size">
                            <img src="<?php echo get_template_directory_uri().'/img/mercado-size.jpg';?>" alt="">
                        </div>
                    </div>
                    <div class="cont-mercado" style="background-image: url(<?php echo get_template_directory_uri().'/img/mercado5.jpg';?>);">
                        <div class="cont-size">
                            <img src="<?php echo get_template_directory_uri().'/img/mercado-size.jpg';?>" alt="">
                        </div>
                    </div>
                -->
            </div>

        </div>
    </div>

    <div class="contenedor-general-casos contenedor-servicios-casos">
        <div class="cont-contenido">
            <div class="cont-enc">
                <h1>CASOS DE ÉXITO</h1>
                <p>
                    Nos distinguimos por ofrecer calidad e innovación, cumpliendo con los requisitos y normativa
                    que rigen las operaciones de nuestros clientes y nuestra empresa. Algunos de los trabajos que hemos realizado son:
                </p>
            </div>

            <!-- Casos de Éxito -->
            <?php get_template_part('template-parts/casosdeexito') ?>

        </div>
    </div>

</div>



<div class="contenedor-general-clientes">
    <div class="cont-contenido">
        <div class="cont-enc">
            <h1>NUESTROS CLIENTES</h1>
            <p>
                Más de 30 clientes han depositado su confianza en BFC Consulting, porque desde el 2005
                hemos atendido las necesidades de diversas industrias combinando conocimientos,
                experiencia, herramientas y técnicas especializadas.
            </p>
            <p>
                Algunos de nuestros depositarios de confianza son:
            </p>
        </div>

        <div class="cont-clientes">
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c1.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c2.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c3.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c4.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c5.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c6.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c7.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c8.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c9.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c10.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c11.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c12.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c13.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c14.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c15.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c16.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c17.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c18.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c19.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c20.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c21.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c22.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c23.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c24.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c25.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c26.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c27.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c28.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c29.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c30.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c31.jpg';?>" alt="">
            </div>
            <div class="cont-cliente">
                <img src="<?php echo get_template_directory_uri().'/img/c32.jpg';?>" alt="">
            </div>
        </div>
    </div>
</div>

<div class="contenedor-general-mapa">
    <div class="map-container">
        <div class="cont-contenido">
            <div class="cont-enc">
                <h1>NUESTRAS UBICACIONES</h1>
                <p>
                    Gracias a nuestra experiencia, nos encontramos posicionados como uno de los principales proveedores
                    en Servicios de Seguridad Funcional e Ingeniería de Riesgos de Procesos en el Norte y Sureste del país.
                </p>
            </div>

            <div class="contenedor-mapa">

                <div class="contenedor-yucatan contenedor-item">
                    <p>Mérida, Yucatán </p>
                    <img src="<?php echo get_template_directory_uri().'/img/item-state.png';?>" alt="">
                </div>
                <div class="contenedor-campeche contenedor-item">
                    <p>Ciudad del Cármen, Campeche </p>
                    <img src="<?php echo get_template_directory_uri().'/img/item-state.png';?>" alt="">
                </div>
                <div class="contenedor-tabasco contenedor-item">
                    <p>Villahermosa, Tabasco </p>
                    <img src="<?php echo get_template_directory_uri().'/img/item-state.png';?>" alt="">
                </div>
                <div class="contenedor-tabasco2 contenedor-item">
                    <p>Paraiso, Tabasco </p>
                    <img src="<?php echo get_template_directory_uri().'/img/item-state.png';?>" alt="">
                </div>
                <div class="contenedor-monterrey contenedor-item">
                    <p>Monterrey, Nuevo León</p>
                    <img src="<?php echo get_template_directory_uri().'/img/item-state.png';?>" alt="">
                </div>

                <!-- Created for MapSVG plugin: http://mapsvg.com -->
                <svg xmlns:mapsvg="http://mapsvg.com" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" mapsvg:geoViewBox="-118.369112 32.716750 -86.725536 14.531518" preserveAspectRatio="xMidYMid meet" viewBox="0 0 792.41846 497.54324">
                    <svg>
                        <defs>
                            <filter id="shadow" width="130%">
                                <feGaussianBlur in="SourceAlpha" stdDeviation="3" />
                                <feOffset dx="0" dy="0" result="offsetblur" />
                                <feDropShadow dx="0" dy="0" stdDeviation="2.5" flood-color="#62d0ec" />
                                <feMerge>
                                    <feMergeNode />
                                    <feMergeNode in="SourceGraphic" />
                                </feMerge>
                            </filter>
                        </defs>
                    </svg>
                    <path d="m 390.52786,309.79244 -2.34,-2.26 -0.07,-1.21 1.24,-2.87 3.33,-4.59 0.93,-3.24 1.07,-0.73 1.79,-0.38 3.47,-1.97 1.21,-0.92 0.39,-1.26 0.73,-0.17 0.77,1.39 1.33,1.34 4.44,2.63 0.59,2.44 1.14,2.04 0,0 0.26,0.59 -0.24,1.6 1.96,2.14 -4.28,1.97 -2.55,3.55 -0.72,0.5 -3.02,1.04 -1.26,0.06 -2.17,-1.02 -1.74,-1.41 -4.21,-0.38 z" title="Aguascalientes" id="MX-AGU" />
                    <path d="m 106.48786,137.85244 -0.65,0 0,0 -0.76,0.12 0.13,0.44 -0.82,0.41 -0.68,0.01 -0.75,0.86 -0.29,-0.74 0.19,-0.78 3.08,-3.76 0.62,-0.15 0.06,0.97 -0.8,0.76 -0.02,0.52 0.69,1.34 z m -27.349998,-11.99 0.56,0.45 0.75,2.86 -0.25,1.02 0.38,2.42 -0.68,0.9 0.04,2.09 -0.62,-0.19 -0.54,0.33 -0.65,-0.31 -0.6,-1.42 -0.58,-0.18 -1,0.6 -0.37,-0.15 0.07,-0.78 2.73,-3.03 0.15,-0.68 -0.58,-1.61 0.51,-1.89 0.68,-0.43 z m 58.139998,-8.56 0.82,0.18 2.68,2.27 -0.54,0.47 -0.6,-0.96 -1.69,-0.95 -0.67,-1.01 z m 8.46,-1.5 0.34,0.64 -0.27,1.02 -1.16,0.04 -0.35,-1.56 1.44,-0.14 z m -142.8599978,-13.07 -0.64,1.32 0.15,1.03 1.31,1.2 0.23,2.9 -0.67,2.08 -0.75,0.23 -0.56,-1.47 0.21,-0.92 -0.56,-0.37 -0.07,-1.6 -1.24000002,-1.24 0.35,-1 -0.29,-0.96 0.74000002,-0.62 0.8,0.04 0.99,-0.62 z M 120.65786,92.442438 l -0.02,0.48 1.1,-0.48 0.02,0.32 0.93,0.26 1.27,1.64 0.77,0.39 1.06,2.21 -0.59,0.86 0.12,1.17 1.84,0.830002 2.9,-0.180002 0.34,0.300002 -0.17,4.33 0.62,1.71 1.2,0.37 -0.34,1.9 -2.96,-2.09 -1.72,-2.42 -2.56,-1.82 -0.96,-1.88 -1.37,-0.26 -0.24,-1.090002 -2.04,-2.47 -0.16,-0.86 0.77,-1.87 -0.21,-0.98 0.4,-0.37 z m -21.549998,-12.53 0.64,0.81 -0.45,0.14 -0.34,-0.36 0.15,-0.59 z m -9.92,-73.05 -0.85,0.51 -0.47,-0.4 -1.34,0.01 -0.6,2.05 -0.47,0.48 -0.05,1.34 -1.81,2.43 1.4,1.99 -0.62,1.83 0.29,1.14 -0.42,2.67 0.24,0.98 -0.6,0.98 0.96,0.95 0.92,0.13 3.82,2.76 0,0 -0.47,1.74 0.92,4 -1.12,1.46 -0.74,2.41 -0.08,3.53 -0.85,3.16 0.3,0.65 -0.25,2.22 0.62,2.21 1.37,1.26 -0.52,0.66 -0.02,0.65 2.84,1.84 0.59,3.53 -0.08,5.21 1.72,4.04 0.02,2.21 -0.35,1.3 0.21,0.82 -0.52,1.95 0.37,0.33 -0.65,2.16 1,2.06 0.62,0.38 1.73,4 1.23,0.61 0.3,0.9 0.96,0.15 0.64,0.89 -0.02,1.82 0.45,0.94 0.819998,0.32 0.44,0.72 1.17,0.12 0.34,-0.86 1.81,0.78 1.21,1.54 0.31,-0.06 0.96,1.18 0.94,0.48 0.68,1.13 1.62,0.83 2.09,2.34 1.52,0.83 0.11,0.61 1.44,0.69 1.98,2.47 1.44,1.170002 0.3,0.88 -0.73,0.85 0.01,0.48 2.08,2.55 0.79,1.64 -0.58,1.16 0.45,1.64 -0.33,0.25 0.81,1.69 0.82,0.1 0.53,-0.7 -0.41,-0.38 0.42,-0.62 0.48,0.27 0.47,-0.36 0.41,0.8 0.6,-0.12 -0.04,0.41 0.45,0.12 0.12,2.09 0.39,0.95 1.1,-0.03 1.31,-1.04 1.08,0.62 1.43,4.51 0.77,0.82 0.59,3.53 2.58,1.46 2.44,-0.59 0.48,0.36 0.07,0.73 0.81,-0.15 0.11,0.6 -0.36,0.48 0.25,0.66 -0.59,2.6 1.97,2.8 -0.47,2.03 0.62,1.45 -0.39,1.24 0.93,0.57 0.27,0.99 -0.3,2.49 0,0 -0.64,-1.71 -0.87,-0.26 0,0 -31.69,-0.11 0.23,-0.53 -0.35,-0.49 -0.05,-1.32 0.86,1.21 0.79,-1.39 -1.61,-0.41 -0.35,-1.72 1.52,-2.99 -0.42,-0.96 -0.88,0.53 -0.51,-0.49 1.28,-2.91 0.65,-3.16 -1.27,-2.19 -1.56,-0.63 -0.07,-2.03 -0.44,-0.43 -2.2,-0.1 0.01,-0.81 -0.45,-0.52 -1.54,-0.86 0.12,-0.59 -0.46,-1.17 -0.879998,-0.47 -0.56,-1.87 -0.46,-0.07 -0.23,-0.6 -0.96,-0.73 -0.97,-0.07 -0.17,0.33 -0.52,-1.09 -0.68,-0.44 -0.23,0.3 -0.54,-2.72 -0.64,-1.05 -1.06,-0.47 -0.64,0.34 -0.8,-0.98 -0.25,-1.35 -1.16,-0.55 -0.12,-0.37 -0.45,0.03 -3.43,-4.210002 -2.91,-1.5 -3.06,-0.4 -1.55,-2.51 -2.41,-1.18 -0.76,-0.03 -2,-1.92 -1.19,0.25 -2,-2.17 -0.89,-0.1 -1.88,-1.56 0.25,-2.52 -0.33,-1.5 -1.14,-1.62 -1.57,-0.58 0.62,-3.57 -0.54,-1.2 0.02,-4.19 -1.46,-2.55 -2.06,-1.24 0.19,-1.4 -0.82,-0.77 -0.23,0.4 0.5,0.94 -0.5,0.35 -0.46,-0.7 -0.53,0 0.58,1.34 -0.31,0.1 -1.06,-2.05 0.57,-5.32 -0.63,-3.55 -0.53,-1.05 -0.6,-0.08 -1.44,-1.26 -0.53,0.01 -2.3,-3.02 -1.55,0.2 -0.25,-0.46 0.74,-5.28 -1.38,-2.71 -2.09,-2.2 -1.85,-3.14 -1.29,-0.96 -0.68,0.08 -0.18,-1 -1.27,-0.92 -0.27,-0.72 -0.41,0.08 -0.12,-0.58 1.02,-0.52 -0.44,-0.9 0.47,-1.24 -1.17,-1.61 -0.33,0.14 -0.85,-1 0.45,-0.1 1.6,0.89 1.05,-0.96 0.19,-2.58 -0.4,-0.61 -1.26,-0.27 -0.57,-0.77 -1.15,-0.2 -0.41,-1.83 -0.48,-0.4 -1.23,0 -1.23,-1.18 -0.12,-3.02 -0.81,-2.83 -0.47,-0.75 -2.1,-0.71 -0.48,-0.56 -2.14,-5.9 0.04,-1.34 60.19,-5.54 -1.58,2.83 -0.67,0.19 0.5,1.79 -0.35,0.24 -0.3,1.52 z" title="Baja California" id="MX-BCN" />
                    <path d="m 91.057862,397.56244 1.49,0.37 -0.48,0.42 -1.32,0.17 -0.12,-0.73 0.43,-0.23 z m 93.899998,-12.95 1.03,0.69 0.7,1.07 -0.01,1.76 -0.83,0.41 -0.44,-0.69 -1.15,-0.2 -0.81,-1.31 1.51,-1.73 z m 4.73,-12.33 0.23,0.65 -0.46,0.66 -0.29,-0.57 0.52,-0.74 z m 21.73,-135.15 2.79,4.59 0.44,1.91 -1.56,-0.29 -0.71,-1.05 -1.1,-3.81 0.14,-1.35 z m -51.48,-4.14 3.12,0.16 1.11,1.44 0.94,0.11 0.81,0.62 1.33,2.43 -0.35,0.83 -6.92,-5.03 -0.31,-0.34 0.27,-0.22 z m 40.73,-0.24 1.77,1.59 -0.93,2.03 -0.54,0.03 0.04,-0.83 -0.73,-0.26 0.12,-0.5 -0.46,-0.58 0.18,-0.67 -0.27,-0.46 0.82,-0.35 z m -0.86,-1.58 0.87,1.34 -0.59,0.33 -0.62,-0.36 -0.1,-0.78 0.44,-0.53 z m -7.78,-14.08 0.92,1.45 1.98,0.54 0.42,0.6 0.06,1.54 0.97,2.16 -0.47,0.09 -2.64,-2.04 -0.68,-2.02 -0.89,-0.9 0.33,-1.42 z m -35.67,-4.58 0.21,1.38 -1.1,3.4 0.11,3.08 -0.76,0.68 0.66,1.33 -0.33,1.14 -0.63,0.07 -0.31,0.53 0.16,0.72 1.14,1.27 -0.16,0.29 0.93,0.82 0.44,1.34 -0.67,1.1 0.92,0.78 1.25,1.81 -0.07,0.38 -1.06,-0.54 -0.05,-0.66 -1.78,-1.9 0.19,-0.53 0.57,0.08 0.22,-0.54 -0.12,-1.07 -0.8,-0.98 -1.33,-0.69 -1.22,0.37 -0.7,-0.45 -0.04,-0.58 0.41,-0.08 1.95,-5.17 1.97,-7.38 z m 36.07,-1.13 -0.45,1.2 -0.52,0.24 -0.15,-0.74 1.12,-0.7 z m -35.23,-4.93 -0.16,4.42 -0.37,1.37 -0.5,-0.35 1.03,-5.44 z m 0.06,-5.2 0.16,2.08 -0.17,2.51 -0.28,0.01 0.29,-4.6 z m 33.06,-0.92 0.31,3.3 -0.71,-0.44 -0.4,-1.4 0.8,-1.46 z m -6.54,-0.04 0.54,1.25 -0.33,0.51 -0.41,-0.2 -0.41,-1.41 0.61,-0.15 z m -0.66,-9.78 -0.5,1.02 0.4,1.67 -1.2,-0.74 -1.71,2.67 0,0.92 -0.56,0.55 0,0.68 -0.6,0.05 -0.13,-0.76 0.4,-0.45 0.18,-1.68 1.05,-1.74 -0.19,-1.46 0.98,-0.25 0.18,-0.43 0.64,0.4 1.06,-0.45 z m -5.19,-1.89 0.18,0.79 -0.45,0.05 -0.17,-0.54 0.44,-0.3 z m -49.09,-16.53 1.34,0.32 0.75,1.57 -0.96,-0.63 -1.97,-0.48 -0.12,-0.28 0.96,-0.5 z m 28.56,-14.77 1.06,1 -0.34,1.22 -0.62,-0.16 -0.5,-1.41 0.4,-0.65 z m 5.07,-5.51 0.42,0.05 0.28,0.62 -0.93,0.04 -0.18,-0.46 0.41,-0.25 z m -83.339998,-12.4 1.37,0.75 -0.1,0.53 -1.37,-1.02 0.1,-0.26 z m 26.709998,-1.56 0.65,0 0,0 0.41,0.41 0.29,-0.41 31.7,0.1 0,0 0.87,0.26 0.64,1.71 0,0 -0.07,0.5 1.29,1.03 0.4,1.96 1.08,1.29 0.42,-0.04 1.23,1.7 2.78,0.86 0.54,0.62 0.94,0.15 1.61,1.11 0.71,0.96 0.7,3.73 1.64,1.81 0.97,2.21 -0.41,0.76 2.6,2.1 2.54,0.65 0.47,0.57 0.93,-0.01 0.15,0.73 -0.57,0.03 -0.89,1.04 -0.23,1.58 1.68,2.42 0.9,0.46 0.04,0.46 0.92,0.66 0.33,1.37 -0.7,0.55 -0.47,1.29 1.17,0.73 0.29,1.17 1.08,0.66 0.69,1.69 1,0.75 1.55,-1.38 -3.45,-3.58 -0.23,-2.91 -0.68,-1.64 0.74,-0.47 1.85,1.4 0.67,1.09 1.35,0.93 0.47,0.75 2.16,1.37 -0.19,3.51 0.35,0.56 2.72,0.85 -0.6,1.63 0.04,1.24 1.15,1.88 0.71,0.31 0.22,0.5 0.07,1.14 -0.35,0.66 1.98,5.16 -0.58,0.94 0.1,1.35 -0.52,0.72 0.11,0.99 0.45,0.58 0.08,1.92 0.63,0.67 0.04,1.05 1.8,1.47 0.22,-0.17 0.8,3.11 1.84,2.4 2.56,0.31 -0.22,1.61 1.17,3.14 0.85,0.85 0.3,1.05 -0.3,0.17 0.38,1.53 0.62,0.81 -0.04,1 0.68,0.54 0.44,1.26 0.86,0.48 0.51,0.9 0.47,-0.13 0.76,0.62 0.25,1.3 1.61,2.21 0.67,2.08 -0.17,1.19 -0.74,1.77 -0.87,0.93 -0.22,3.09 0.22,1.04 1.05,1.39 0.13,2.88 1.06,1.24 0.69,1.57 1.54,1.35 4.34,0.95 1.21,-0.12 0.06,0.28 -1.28,0.5 -0.79,-0.65 -0.42,0.25 0.21,1.46 1.68,-0.13 -0.01,-0.78 1.21,-1.03 0.06,-0.98 -0.91,-2.2 0.28,-1.07 0.71,-0.45 1.56,0.21 0,0.78 1.06,0.62 0.42,1.12 2.15,0.99 2.06,1.58 0.71,3.23 1.2,0.3 2.6,-0.88 0.04,0.58 0.53,0.49 -0.7,0.86 0.07,2.03 3.24,3.16 -0.28,1.97 0.31,1.69 0.39,0.47 5.38,2.63 -0.31,0.81 1.43,2.07 -0.22,0.69 0.42,0.43 -0.51,4.39 -0.59,1.26 -1.87,2.31 -1.04,0.72 -2.2,0.54 -1.21,0.82 -0.02,0.75 -2.07,1.14 -0.53,1.04 -0.94,0.74 -0.93,0.04 -0.64,0.67 -1.15,0 -2.42,-2.01 -1.17,-2.77 -1.46,-7.1 -2.5,-4.57 -1.83,-2.44 -6.19,-3.28 -11.64,-11.53 -10.8,-6.54 0.12,-0.26 -1.16,-1.24 -1.55,-0.21 0.06,-0.48 -0.64,-0.07 -1.02,-2.97 0.28,-0.11 -0.47,-0.58 -0.99,-0.3 -0.1,1.14 -2.41,-0.2 -0.06,0.75 -0.6,-0.01 0.15,-1.48 -0.73,-2.01 -2.19,-2.41 0.27,-0.25 -0.56,-0.5 -0.68,0.27 0.13,0.44 -1.46,-0.24 -2.01,-0.97 -0.31,-0.69 0.54,-0.03 0.11,-0.76 -0.62,-0.4 -0.17,-0.78 0.65,-0.97 -0.27,-0.16 0.39,-0.72 -0.44,-0.13 0.24,-0.45 -0.42,-0.48 -0.57,0.92 0.29,0.76 -0.39,0.49 0.05,2.53 -0.73,0 -0.48,-1.15 0.77,-1.55 -0.65,-1.39 0.81,-0.45 0.74,-1.67 0.02,-0.96 -0.86,0.12 0.16,-1.89 0.87,-2.01 0.27,-1.77 0.71,-0.12 0.06,-2.45 -0.5,-0.11 0.06,-1.17 0.58,-0.44 -0.39,-0.33 -0.21,-1.07 0.3,-1 0.3,-0.05 0.13,-2.41 -0.13,-1.28 -0.8,-1.07 -0.34,-2.88 -2.03,-5.36 -0.94,-1.24 -1.93,-1.06 -0.87,-2.85 -1.64,-1.94 -1.58,-0.4 -0.19,0.66 -0.45,0.13 -3.19,-2.33 -0.69,-0.26 -0.67,0.28 -0.79,-1.19 -1.98,-1.4 0.01,-0.44 -0.63,-0.03 -3.59,-2.96 0.97,0.09 1.27,0.94 0.13,-0.24 -1.06,-0.77 -1.08,-0.32 -0.69,0.22 -2.27,-1.98 0.19,-0.19 -0.4,-0.5 0.38,-0.61 -1.73,-2.07 -0.94,-1.98 -0.36,1.05 -1.51,-0.7 0.31,-0.32 0.51,0.16 1.55,-1.56 0.42,-1.29 -0.82,-2.81 -0.6,0.65 -0.38,3.22 -0.56,0.49 -0.7,-0.23 -0.38,0.75 0.06,1.83 -0.45,0.05 -2.14,-1.33 -1.51,-0.26 0.21,-0.53 0.54,0.39 0.07,-0.38 -0.53,-0.2 -1.44,0.22 -0.8,0.89 -0.39,1.19 -0.63,0.28 -0.01,0.58 -0.71,0.4 -0.82,-0.26 -0.8,-0.52 -0.7,-1.41 -1.6,-0.4 -1.61,-3.69 -1.81,-1.34 -2.21,-0.57 -0.45,0.16 -0.18,0.55 -0.44,0.03 -1.28,-1.34 -1.1,-1.99 -1.08,-0.8 -1.22,-0.58 -2.02,-0.3 -0.75,0.66 -2.429998,-1.55 -0.51,0.41 -0.48,-0.26 0.06,-0.8 -0.62,-0.39 -0.53,0.11 -0.24,-0.37 -0.02,-3.52 -0.48,-1.57 -2.35,-1.91 -3.33,-1.21 -1.15,-2.25 -1.67,-1.25 -0.07,-1.02 -0.68,-0.46 -0.62,0.95 -0.77,-0.35 -0.31,-0.91 -1.03,-0.53 -0.56,0.27 -1.08,-2.81 -0.79,-0.78 0.8,-0.41 1.06,0.91 2.33,-0.22 1.52,0.23 0.36,0.5 1.37,-0.18 1.62,0.3 0.46,0.49 1.58,0.33 2.77,-0.23 0.59,0.35 2.44,-1.32 0.6,0.35 0.759998,-0.15 0.15,-0.6 -0.63,-0.04 1.1,-1.2 0.86,0.29 -0.52,2.48 0.76,1.26 1.5,1.2 1.27,0.37 1.35,1.2 -0.05,0.42 0.8,0.26 1.02,-1.07 0.06,-0.88 2.1,0.72 1.56,2.96 0.89,0.14 0.59,-1.17 -1.57,-1.62 0.12,-1.05 0.67,0.65 0.15,-0.41 -0.57,-0.45 0.27,-0.61 -0.46,-1.74 0.23,-0.9 -1.75,-1.44 -1.03,1.89 0.19,1.14 -3.18,1.21 -1.64,-1.24 0.24,-0.54 0.6,0.5 -0.74,-1.98 1.17,-1.74 -0.54,-0.48 0.21,-1.43 z" title="Baja California Sur" id="MX-BCS" />
                    <g class="selected">
                        <path d="m 671.96786,386.93244 0.5,0.79 -0.68,0.61 -0.54,0.22 -1.06,-0.57 -0.38,0.33 0.39,0.33 -1.66,1.34 -0.54,-0.67 -0.29,0.58 -2.12,0.86 -1.09,0.1 -0.54,-0.57 0.27,-0.32 2.42,-0.39 5.32,-2.64 z m 28.7,-53.46 -0.16,7.3 4.12,0.51 0.97,2.01 0.45,0.18 1.11,-0.35 0.94,0.99 0.48,-0.09 0.4,-1.01 0.79,-0.73 0.42,0.28 1.03,1.76 -0.11,0.91 0.57,1.04 1.83,1.17 1.98,4.46 3.86,2.1 1.17,2.49 3.17,3.58 0.79,3.44 0.44,0.46 0,0 1.34,1.81 5.3,4.25 3.41,4.67 -0.18,5.85 -1.17,0.66 -0.41,0.67 0.22,2.52 -0.8,5.13 0.17,1.27 0.99,1.24 0.15,0.71 -0.51,1.37 0.82,0.46 -0.57,1.67 0.47,1.38 0.28,4.7 -0.57,1.26 -2.44,2.83 0.25,2.46 0,0 -0.02,3.33 -45.94,-0.01 0,0 0.02,-1.64 -3.98,-1.58 -0.68,0.42 -0.77,-0.9 -1.56,-0.66 -1.64,-1.55 -3.65,-0.8 -2.79,0.13 -0.3,1.3 0.34,1.82 -0.3,0.72 -1.68,0.11 -1.29,0.64 -2.21,-1.12 -1.5,0.15 -1.31,-0.66 -0.87,-1.43 -3.47,-2.33 -1.22,-1.83 -1.08,-2.59 -0.45,-0.32 0.18,-1.97 -1.11,-1.42 -0.36,-0.16 -0.08,0.42 -0.53,0.13 -0.69,-1.06 -0.99,-0.05 -1.44,-1 -0.63,-0.91 -1.14,-3.72 0,0 3.13,-0.56 9.83,-0.61 0.88,1.41 1.49,0.8 -0.6,1.18 -0.27,-0.39 -0.31,0.34 -0.96,-1.28 -0.73,0.85 -0.68,-0.42 -0.24,0.18 0.17,0.72 -0.45,0.57 0.59,0.74 1.15,-0.25 -0.45,-1.12 0.79,0.04 0.28,0.46 0.57,-0.14 1.1,0.72 0.16,0.56 6.79,1.67 1.43,-0.13 0.16,-0.7 0.73,-0.7 4.45,-1.53 0.82,-2.92 0.63,-0.32 0.35,-1.32 -0.23,-0.7 -1.1,-1 -0.92,0.72 -1.15,-0.61 -0.29,-0.98 0.61,-0.47 -0.07,-0.79 0.97,-1.04 -0.77,0.19 -0.7,1.33 -0.76,0.72 -0.52,-0.05 -0.82,0.76 -0.12,0.56 -0.63,0.03 0,-0.24 2.5,-2.57 6.81,-3.66 4.79,-3.45 4.86,-4.53 0.47,-0.93 -0.08,-1.02 0.52,-2 -0.21,-2.17 0.67,-1.8 -0.51,-0.56 -0.04,-0.64 0.93,-1.14 0.19,-1.03 3.85,-2.86 1.41,-2.48 -0.98,-2.71 0.3,-1.37 -0.41,-1.28 0.38,-0.29 -0.39,-4.48 0.3,-0.78 -0.45,-3.4 1.34,-3.56 0.44,-3.02 1.14,-1.42 z" title="Campeche" id="MX-CAM" />
                    </g>
                    <path d="m 607.45786,458.00244 0.18,-0.64 0,0 -0.06,-0.41 0.4,0.01 0.76,1.15 -1.28,-0.11 z m -0.37,-4.01 -0.01,-0.78 0,0 -0.12,-2.12 0.52,-1.45 -1.25,-2.93 0.08,-0.85 2.19,-6.28 2.94,-2.62 0.8,-3.49 0.76,-1.02 -0.02,-2 0.34,-0.94 0,0 0.94,-1.13 1.95,-0.86 3.72,-2.89 0,0 2.53,-3.17 0.06,-1.61 1.39,-1.87 1.2,-0.79 0.59,-1.16 0.75,-7.08 1.66,-0.28 0.54,-0.61 2.14,0.85 1.39,1.69 0.77,0.35 2.79,-0.09 -0.35,1.69 -1.42,2.12 -0.14,0.58 0.38,0.93 2.07,2.18 -0.3,1.87 0.36,0.33 1.25,-0.06 0.44,-0.35 0.54,0.2 1.21,1.94 0.04,0.66 0.66,0.87 0.81,0.31 1.91,-0.84 2.42,-2.25 5.83,-4.27 0.57,-0.83 3.29,-1.19 0.39,-0.78 -0.41,-1.75 0.12,-0.37 0.43,0.08 -0.04,-0.44 1.77,0.48 1.95,-0.03 0.71,-1.84 1.45,0.37 -0.12,0.59 0.56,0.3 0.59,-0.44 1.19,0.18 1.21,-0.28 1.06,1.36 0.05,2.01 2.56,1.26 1.27,3.3 -0.75,2.66 4.34,1.2 0.19,0.83 1.31,0.37 1.1,1.79 -0.76,0.28 -0.53,1.03 0,0 -0.65,0.06 0.57,0.98 0.76,-0.04 0.98,1.12 0.83,-0.35 0.93,0.31 -0.02,0.83 0.53,0.74 0.63,0.26 0.33,0.96 1.12,1.16 1.05,0.23 0.3,1.03 1.38,1.37 0.11,0.64 1.34,0.4 0.53,0.62 0.27,-0.29 1.1,0.44 0.24,0.85 1.03,0 0.88,0.72 1.13,-0.08 0.04,0.55 2.14,1.25 1.38,2.18 0.35,3.22 0.82,-0.1 0.11,0.55 -0.67,0.23 0.23,0.4 0.76,-0.34 0.36,0.51 0.88,-0.31 0.57,0.63 0.57,-0.28 0.53,0.66 -0.15,0.49 1.71,0 0.38,0.59 0.12,0.58 -0.36,0.35 0.34,0.53 -0.33,0.88 -0.54,0.04 -0.18,0.64 0.36,0.35 -0.77,1.62 0.8,1.06 -0.67,0.44 0.56,0.29 -0.02,0.41 -0.64,-0.05 0.27,1.36 -32.14,-0.27 -12.25,21.07 3.87,5 -1,1.6 -0.85,-0.09 -0.35,0.72 0.13,2.49 -1.05,1.38 0.92,4.29 -0.73,1.17 -0.38,1.54 -0.86,0.71 -4.46,-4.06 -10.99,-11.58 -0.1,-0.85 -0.8,-0.19 -11.16,-10.52 -5.44,-4.29 -6.08,-4.22 -3.82,-1.84 0.28,-0.4 0.75,-0.06 0.29,0.61 0.63,-0.27 0.14,-0.48 -1.12,-1.84 -4.66,-1.01 -0.73,-0.91 -0.22,-1.31 z" title="Chiapas" id="MX-CHP" />
                    <path d="m 375.24786,107.48244 -2.26,4.16 0.02,0.35 1.71,0.61 0.01,1.04 -0.66,0.98 -0.84,-0.32 -0.7,0.34 -1.73,4.01 -1.41,1.11 -1.64,0.61 -2.27,3.78 -0.56,1.1 0.87,1.42 -0.94,1.38 -2.66,6.81 -0.6,0.38 -1.77,-0.71 -0.01,1.55 1.12,0.18 0.49,1.46 -0.34,0.48 -1.9,0.38 0.76,1.44 -0.06,0.83 -0.57,0.82 0.72,0.78 0.14,0.72 -1.09,1.16 0.81,4.52 1.13,0.5 0.24,0.83 0.09,1.06 -0.48,1.14 0.68,3.68 0.22,4.82 0.54,0.68 1.83,0.79 -0.41,1.54 -1.15,0.04 -1.07,1 -1.92,0.91 0.44,0.8 -0.1,1.31 2.15,1.9 1.08,1.83 0,0 -1.1,0.24 -1.15,-0.86 -0.51,0.68 -0.28,-0.17 0.44,-0.72 -0.79,-0.12 -3.21,1.05 -1.51,-0.57 -0.88,0.81 -1.43,-0.28 -0.68,-1 -1.43,-0.24 -1.38,-0.89 -0.73,0.32 -0.31,0.74 0.48,0.66 1.54,0.12 -0.07,1 -2.5,0.39 -1.15,1.52 -1.51,0.54 -1.89,3.08 0.24,1.34 -0.25,0.77 -0.44,0.24 -1.71,-0.2 -1.74,0.91 -0.98,-0.21 -1.72,-1.19 -1.95,-1.89 -2.54,0.24 -1.22,-0.33 -0.74,-0.68 -0.54,-0.04 -0.01,1.08 -1.6,0.7 -0.52,0.58 -0.57,0.09 -0.41,-0.54 -1.68,0.96 -0.23,-0.6 -1.56,-0.47 -1.27,0.25 -1.1,-1.89 -1.64,0.29 -0.76,-1.09 -0.98,0 -1.58,-1.36 -1.94,-0.23 -0.28,-0.58 -1.26,-0.71 -0.96,-1.94 -1.06,-0.23 -1.91,-1.23 -1.27,-0.06 -0.67,-0.89 -0.77,0.54 -0.21,1.29 -1.76,0.57 0.05,1.84 -0.63,0.47 -0.9,3.39 0.03,1.6 -0.9,1.53 0.15,0.46 1.12,0.5 -0.03,1.07 -0.33,0.58 -1.98,0.87 -0.86,0.87 0,1.36 -1,-0.16 -0.41,0.36 0.36,2.14 -0.92,0.26 -1.72,3.99 0.97,1.56 0.61,1.9 -2.12,3.42 -3.53,2.72 -1.23,1.61 -0.64,-0.28 -0.67,-1.21 -2.01,-0.33 -0.52,-0.86 -1.6,0.22 -1.08,-0.66 -0.31,-1.32 -2.31,0.78 -0.32,0.65 0,0 -2.14,-2.79 -0.59,-3.23 -2.89,-4.89 -2.36,-0.69 -3.19,-0.31 -3.81,-1.13 -1.22,-4.68 -3.11,-5.02 -0.07,-1.88 -1.42,-0.92 -0.32,-1.09 0.49,-2 -0.49,-0.82 0.4,-2.27 -1.06,-2.33 -1.22,0.25 -0.61,-0.24 -0.12,-2.9 -0.68,-0.38 -4.89,0.22 0,0 -1.76,-0.39 -2.02,0.62 -3.54,-1.84 0.02,-0.46 0.73,-0.42 -0.48,-3.44 1.25,-3.14 -0.04,-1.72 -1.63,-4.07 -0.97,-1.43 -0.63,-2.09 -2.81,-1.7 -0.52,-0.65 0.7,-2.45 -0.38,-1.66 -2.09,-2.98 -1.82,-0.74 -0.39,-0.69 0.59,-2.76 -1.56,-1.07 -0.19,-0.61 1.04,-1.39 2.53,-0.49 1.45,-0.85 0.77,0.14 1.77,1.31 0.5,-0.03 1.41,-1.05 1.14,-0.12 0.97,-1.22 0.93,-0.09 0.6,-1.19 -2.25,-0.86 -1.55,-1.81 0.42,-2.9 -0.83,-1.95 0.19,-1.04 1.48,-2.62 -0.8,-2.65 0.84,-1.28 -0.46,-2.55 1.49,-1.26 0.1,-2.69 1.38,-0.67 0.29,-0.51 -0.26,-5.670002 0.16,-0.9 0.8,-0.95 0.01,-2.6 -0.66,-6.22 -0.75,-0.96 -0.57,-0.02 -0.34,-1 0.59,-4.93 1.27,-2.57 0,-1.11 -1.45,-1.33 -0.16,-0.99 0.85,-0.52 0.28,-1.82 -1.94,-6.15 0.06,-1.19 -1.1,-1.46 -0.11,-0.81 0.67,-1.61 -1.04,-0.93 -0.09,-2.42 -2.73,-2.65 0.04,-0.61 1.57,-0.08 -0.02,-1.81 0.49,-1.27 -0.24,-1.6 -1.64,-2.84 -0.52,-1.92 0.94,-1.28 -1.05,-1.04 0,0 14.1,-0.04 0,-13.16 42.05,0 1,1.07 1.59,-0.13 1.01,0.56 0.87,1.03 1.75,4.03 0.76,0.41 1.13,2.37 3.2,1.96 1.81,0.18 1.25,0.8 0.59,1.48 0.57,-0.01 0.37,0.66 0.52,0 2.18,2.66 0.25,0.84 1.28,0.45 0.41,0.57 1.5,0.59 1.16,1 1.21,2.71 1.2,0.58 0.36,0.76 1.87,1.18 0.55,0.9 -0.17,0.47 0.98,0.16 1.46,1.01 0.28,-0.37 0.91,0.87 0.89,-0.25 0.21,0.62 0.4,-0.23 0.56,0.66 0.42,0.01 -0.11,0.44 1.2,0.19 0.8,1.35 0.85,0.53 0.91,-0.14 0.57,0.73 0.25,1.3 1.15,0.43 0.85,1.02 0.76,2.12 0.02,1.46 0.46,0.75 -0.19,0.85 1.11,0.73 -0.22,0.33 1.52,1.59 -0.08,0.53 1.36,1.1 0.46,1.59 -0.16,1.5 0.28,1 -0.49,2.07 0.36,0.21 -0.04,1.08 0.43,0.73 -0.31,0.41 0.27,1.07 1.08,0.93 1.14,1.91 1.31,3.91 3.45,2.74 0.4,0.83 1.13,0.62 0.53,-0.33 1.97,1 0.12,0.44 0.57,0.18 -0.12,0.63 1.22,1.72 1.44,0.56 1.39,1.31 1.97,0.9 3.01,0.420002 1.38,0.64 0.4,-0.16 0.22,1.28 0.4,-0.29 1,1.39 1.47,0.31 0.26,0.39 2.34,-0.02 2.11,2.09 -0.11,0.48 0.6,-0.07 0.49,0.75 z" title="Chihuahua" id="MX-CHH" />
                    <path d="m 463.90786,143.13244 -0.26,0.61 -1.09,0.79 -0.95,0.06 -1.92,1.3 -5.52,-0.92 -3.67,0.26 -1.13,0.63 -0.55,2.34 -1.69,2.6 -0.29,0.79 0.16,2.29 -0.63,0.49 -2.23,-0.12 -2.1,0.92 -1.19,-0.38 -1.19,1.04 -1.83,2.98 0.25,3.34 2.82,2.07 0.59,-0.05 0.7,-3.12 0.63,0.07 2.05,1.48 0.42,5.13 -0.84,2.24 -1.05,0.77 -1.14,2.19 -3.2,-0.04 -2.61,1.7 -3.51,0.28 -0.87,0.9 -1.04,2.73 -2.42,2.42 0.02,1.3 4.54,4.78 2.7,2.02 1.05,3.11 1.42,1.15 0.86,0.08 0.38,0.64 -0.99,2.9 0.24,2.47 0.84,1.78 1.11,0.14 0.84,0.66 2.13,0.08 0.35,0.36 0.56,3.41 0.82,0.85 3.28,1.88 -0.51,1.05 3.6,0.63 0.5,0.8 0.88,0.32 0.39,0.95 -0.75,0.89 -0.15,1.15 -0.34,0.2 -1.94,-0.03 -3.41,-0.88 -1.31,-1.53 -1.74,-0.17 -0.94,0.31 0.29,0.81 -1.79,0.57 -1.7,3.22 0.89,2.93 0.09,2.16 -0.2,0.39 -2.41,0.06 -0.16,0.37 0.29,0.83 -0.32,1.2 1.38,1.55 0.11,1.39 0.65,1.23 -1,3.26 0,0 -2.12,-0.47 -0.75,0.32 -0.18,0.78 -1.44,0.37 -2.09,-0.81 -1.37,-1.3 -1.92,-3.76 -1.25,-0.82 -2.96,-0.37 -2.27,0.51 -0.92,0.88 -2.83,-0.02 -0.62,-3.56 -1.16,-0.32 -1.47,0.41 -2.16,-3.07 -1.96,-1.66 -2.5,-0.97 -2.54,-1.71 -9.4,-0.61 -5.4,1.07 -0.63,0.53 -0.02,1.63 0,0 -3.05,2.03 -0.58,1.01 -0.51,2.14 0.5,1.72 -0.28,0.52 -0.69,0.21 -2.1,-1.35 -2.78,-0.16 -3.42,-1.59 -1.3,-1.2 -0.62,-0.86 -0.54,-3.12 -2.43,-1.93 -0.6,-1.74 -1.77,-2.12 -0.63,-3.15 1.36,-1.36 2.26,-0.45 -0.8,-1.23 -1.34,-0.26 -0.67,-0.82 0.09,-0.86 1.4,-2.15 1.06,-0.81 1.2,-3.11 -1.2,-4.47 -0.18,-1.99 0.41,-2.28 -1.68,-3.95 -0.17,-1.39 0.44,-2.93 -1.38,-3.97 -2.3,-2.13 -0.82,-1.21 -1.22,-1.18 -2.98,-0.79 -0.72,-0.63 0,0 -1.08,-1.83 -2.15,-1.9 0.1,-1.31 -0.44,-0.8 1.92,-0.91 1.07,-1 1.15,-0.04 0.41,-1.54 -1.83,-0.79 -0.54,-0.68 -0.22,-4.82 -0.68,-3.68 0.48,-1.14 -0.09,-1.06 -0.24,-0.83 -1.13,-0.5 -0.81,-4.52 1.09,-1.16 -0.14,-0.72 -0.72,-0.78 0.57,-0.82 0.06,-0.83 -0.76,-1.44 1.9,-0.38 0.34,-0.48 -0.49,-1.46 -1.12,-0.18 0.01,-1.55 1.77,0.71 0.6,-0.38 2.66,-6.81 0.94,-1.38 -0.87,-1.42 0.56,-1.1 2.27,-3.78 1.64,-0.61 1.41,-1.11 1.73,-4.01 0.7,-0.34 0.84,0.32 0.66,-0.98 -0.01,-1.04 -1.71,-0.61 -0.02,-0.35 2.26,-4.16 0,0 0.69,0.07 0.27,-0.63 0.42,0.08 -0.26,0.57 1.36,0.71 0.1,0.51 0.44,-0.45 0.34,0.4 1.61,-0.11 0.85,0.38 0.89,-0.36 0.51,-2.25 0.27,0.2 0.29,-1.06 0.82,-0.11 1.09,-1.72 0.02,-0.59 0.62,-0.25 0.37,0.29 0.99,-0.47 0.17,-0.71 0.63,0.22 0.46,-0.35 -0.2,-0.65 -0.8,-0.45 0.43,-0.810002 0.17,-1.76 1.03,-0.22 -0.08,-0.33 0.71,-0.91 -0.38,-0.25 0.05,-0.9 0.7,-1.25 -0.13,-1.05 0.74,-0.6 0.32,-1.55 0.54,0.13 0.07,-1.24 1.18,-1.1 -0.12,-0.42 0.69,-1.56 1.11,0.23 1.38,-0.59 0.63,0.32 0.86,-0.59 -0.08,-0.5 2.68,0.52 0.7,-0.64 0.41,-1.62 1.08,-0.99 1.4,0.32 0.01,0.39 2.13,0.35 1.61,1.42 1.4,0.17 0.5,-0.14 0.02,-0.33 1.03,-0.13 1.58,0.23 0.27,0.4 0.45,-0.39 2.05,-0.32 0.47,0.29 -0.06,0.54 0.78,-0.25 1.68,0.75 0.43,-0.19 0.37,0.32 0.41,-0.29 0.28,0.4 1.91,-0.56 0.08,-0.56 0.61,-0.5 0.19,1.49 1.98,-0.84 0.2,1.05 1.06,-0.53 0.23,0.21 -0.41,0.31 0.38,1.02 0.55,0.4 0.33,1.42 1.2,-0.21 0.38,0.59 -0.28,1.53 0.61,0.44 0.23,-1.33 0.31,-0.35 0.46,0.14 0.15,1.62 -0.49,1.07 0.3,0.34 1.91,0.18 0.56,1.05 2.21,0.49 1.3,2.52 1.64,0.75 1.43,1.03 0.3,0.800002 1.97,1.01 0.76,1.68 -0.24,0.42 2.38,1.79 0.4,0.88 0.35,3.74 0.46,1.22 0.74,0.07 0.66,2.01 0.68,0.11 0.34,0.61 0.1,1.32 0.61,0.6 0.19,2.13 1.31,0.64 0.02,0.81 1.25,0.77 -0.37,1.12 0.64,0.85 1.24,0.37 -0.12,0.41 -0.65,0.17 0.69,0.94 -0.23,1.37 1.5,2.4 -0.04,1.08 0.97,1.12 0.76,0.09 0.3,1.1 3.14,1.37 0.88,1.8 0.81,0.46 0.19,1.02 0.82,1.19 0.91,0.12 -0.02,1.09 1,1.01 -0.18,1.02 0.71,1.06 0,1.06 0.67,0.11 z" title="Coahuila" id="MX-COA" />
                    <path d="m 372.56786,382.21244 -2.47,2.24 -1.02,-0.31 -0.38,0.28 0.03,1.79 -1.86,1.18 -0.68,1.7 0,0 -5.51,-4.36 -5.18,-2.77 -4.02,-1.36 0.14,-0.84 0.46,-0.05 0.15,-0.62 -0.45,-0.52 -1.1,-0.6 -1.84,0.94 -0.25,-0.63 -1.75,-0.74 -4.53,-1.21 0.33,-0.44 0.62,0.41 0.18,-0.26 -0.59,-0.22 0,0 1.92,0.05 1.48,-1.79 1.14,0.48 0.56,-0.11 0.48,-0.84 0.87,-0.58 0.55,0.4 3.77,-0.88 1.27,0.38 1.13,-0.29 3.1,-2.32 3.25,0.32 1.41,-0.21 3.22,-1.68 2.51,-2.41 0.61,0.13 0.48,2.89 -0.16,1.02 0.97,0.83 0.21,0.78 1.07,0.48 -0.5,1.8 0.07,3.12 -0.56,1.32 0.82,1.54 z" title="Colima" id="MX-COL" />
                    <path d="m 488.38786,379.24244 -0.95,-0.02 -2.35,0.75 -0.91,-0.8 -0.63,0.12 -1.3,1.09 -1.33,-1.17 -1.33,0.24 0,0 -2.63,-4.38 -0.09,-0.98 3.17,-2.75 0.55,-1.98 2.24,-2.46 0.33,0.36 -0.05,1.06 1.57,1.92 0.48,1.55 2.14,1.79 0.32,1.48 0.47,-0.38 0.23,0.49 0.35,1.58 -0.47,1.67 z" title="Distrito Federal" id="MX-DIF" />
                    <path d="m 280.78786,200.80244 0.32,-0.65 2.31,-0.78 0.31,1.32 1.08,0.66 1.6,-0.22 0.52,0.86 2.01,0.33 0.67,1.21 0.64,0.28 1.23,-1.61 3.53,-2.72 2.12,-3.42 -0.61,-1.9 -0.97,-1.56 1.72,-3.99 0.92,-0.26 -0.36,-2.14 0.41,-0.36 1,0.16 0,-1.36 0.86,-0.87 1.98,-0.87 0.33,-0.58 0.03,-1.07 -1.12,-0.5 -0.15,-0.46 0.9,-1.53 -0.03,-1.6 0.9,-3.39 0.63,-0.47 -0.05,-1.84 1.76,-0.57 0.21,-1.29 0.77,-0.54 0.67,0.89 1.27,0.06 1.91,1.23 1.06,0.23 0.96,1.94 1.26,0.71 0.28,0.58 1.94,0.23 1.58,1.36 0.98,0 0.76,1.09 1.64,-0.29 1.1,1.89 1.27,-0.25 1.56,0.47 0.23,0.6 1.68,-0.96 0.41,0.54 0.57,-0.09 0.52,-0.58 1.6,-0.7 0.01,-1.08 0.54,0.04 0.74,0.68 1.22,0.33 2.54,-0.24 1.95,1.89 1.72,1.19 0.98,0.21 1.74,-0.91 1.71,0.2 0.44,-0.24 0.25,-0.77 -0.24,-1.34 1.89,-3.08 1.51,-0.54 1.15,-1.52 2.5,-0.39 0.07,-1 -1.54,-0.12 -0.48,-0.66 0.31,-0.74 0.73,-0.32 1.38,0.89 1.43,0.24 0.68,1 1.43,0.28 0.88,-0.81 1.51,0.57 3.21,-1.05 0.79,0.12 -0.44,0.72 0.28,0.17 0.51,-0.68 1.15,0.86 1.1,-0.24 0,0 0.72,0.63 2.98,0.79 1.22,1.18 0.82,1.21 2.3,2.13 1.38,3.97 -0.44,2.93 0.17,1.39 1.68,3.95 -0.41,2.28 0.18,1.99 1.2,4.47 -1.2,3.11 -1.06,0.81 -1.4,2.15 -0.09,0.86 0.67,0.82 1.34,0.26 0.8,1.23 -2.26,0.45 -1.36,1.36 0.63,3.15 1.77,2.12 0.6,1.74 2.43,1.93 0.54,3.12 0.62,0.86 1.3,1.2 3.42,1.59 2.78,0.16 2.1,1.35 0.69,-0.21 0.28,-0.52 -0.5,-1.72 0.51,-2.14 0.58,-1.01 3.05,-2.03 0,0 0.35,0.52 0.04,1.65 0.75,0.34 0.36,1.1 1.53,0.71 0.8,0.94 -0.81,4.9 1.21,0.45 1.02,4 -0.97,0.52 -0.02,0.41 0.5,0.37 -0.12,0.68 -6.07,0.58 -1.68,-0.23 -0.76,0.91 -2.66,-0.87 -1,-0.7 -1.12,-0.1 -2.25,0.8 -2.23,-0.7 -3.9,-0.27 -1.71,1.37 -0.47,1.34 -2.4,1.82 -2.07,2.83 -2.26,2.14 -2.4,0.72 -0.23,1.32 0.78,0.51 0.37,1.65 -0.31,1.68 0.37,1.89 -0.45,1.2 0.89,4.27 -2.8,2.42 -2.32,2.89 -0.09,1.88 -1.29,5.77 -0.61,0.37 -1.37,2.73 -0.08,1.28 0.85,3.09 -0.16,5.55 -0.25,0.63 -3.21,1.42 -1.01,1.51 -1.16,3.05 0,0 -2.94,1.3 -0.4,1.38 -0.48,0.03 -1.82,-1.11 -0.95,-2.07 -2.49,-2.39 -1.71,-0.43 -1.39,-1.76 -1.35,2.56 -0.81,0.85 -0.69,-0.03 -2.2,-4.58 1.69,-1.76 1.7,-0.87 0.6,-0.89 -0.12,-1.24 -1.15,0.03 -0.52,-0.37 -0.58,-2.46 -2.09,-0.16 -1.33,-0.6 -1.53,-1.75 -0.54,-0.03 -0.91,1.31 -1.68,0.35 -2.2,-2.64 0,0 -2.12,-2.18 -0.6,-0.06 -0.85,0.6 -2.04,-0.15 -0.61,-1.28 -0.13,-2.26 -1.22,-1.34 -0.74,-1.74 0.27,-0.93 -1.05,-2.92 -0.44,-2.81 -1.72,-1.65 -0.9,-1.98 -1.08,-1.21 -0.63,-2.95 -0.71,-1.06 -0.79,-2.59 0.26,-0.9 -1.03,-0.93 -0.09,-2.2 -1.74,-2.27 -0.14,-1.07 -1.08,-0.26 -0.89,-1.38 -1.45,-0.96 -4.04,-1.17 -0.67,1.04 -2.79,2.12 -1.33,0.19 -0.69,0.55 -0.7,-0.49 -0.84,0.18 -0.59,-1.96 -0.98,-1.41 -0.81,-4.12 -0.2,-0.25 -0.57,0.42 -0.57,-0.2 -1.21,-4.47 -1.32,-0.31 -0.89,-2.61 -2.3,-0.22 -0.53,0.44 -1.2,-0.96 0.33,-1.44 -1.2,-2.38 -0.75,-0.65 -0.48,-1.82 -1.01,-0.61 0.51,-1.96 0.09,-5.12 1.33,-3.21 -0.08,-0.68 -0.47,0.08 -0.6,-0.72 1.73,-2.22 1.19,-0.77 -0.15,-0.73 -0.73,0.16 z" title="Durango" id="MX-DUR" />

                    <path d="m 449.47786,379.54244 0.3,2.94 -1.05,1.92 -0.74,4.23 0.37,1.6 1.75,0.76 0.1,1.19 -0.25,0.72 -1.66,1.81 0.65,0.66 1.33,-0.27 1.51,0.33 0.22,1.08 1.57,1.96 0.04,-0.43 0.62,0.03 0.34,-0.39 0.19,0.37 1.98,-2.18 2.47,-0.58 -0.69,-1.38 0.35,-0.6 1.02,-0.49 0.79,0.43 3.51,-0.23 0.29,-0.58 0.88,-0.42 0.85,0.29 0.44,-1.56 1.76,-0.32 -0.36,-1.72 0.81,-0.05 0.91,1.08 1.98,0.67 0.82,-0.49 0.81,0.13 0,0 0.51,0.84 -0.65,1.12 0.44,0.35 1.08,-0.23 1.12,0.46 2.02,2.67 5.51,0.7 2.3,2.33 0,0 -0.05,1.23 1.35,1.18 1.34,0.62 1.22,2.25 2.99,-0.2 0.22,0.8 -0.83,0.97 4.21,1.78 0.12,1.07 1.4,-0.3 0.47,0.27 0.86,-0.86 1.55,-0.14 1.61,1.98 1.61,0.8 0,0 -1.74,3.95 -0.17,1.41 2.73,6.06 0.6,4.58 -0.92,0.83 -0.18,2.06 0.56,0.52 2.3,0.78 0.45,1.17 -0.11,1.91 0.27,0.59 1.16,0.25 0.42,0.54 0.36,1.56 -0.92,2.88 -0.91,0.92 -1.22,0.23 -0.93,0.67 -0.18,1.35 -4.11,3.59 -0.46,2.02 -4.64,3.54 0,0 -3.56,-3.61 -1.93,-2.51 -1.69,0.16 -0.33,0.56 -1.28,-0.19 -10.62,-3.2 -3.11,-0.65 -4,-0.04 -1.63,-0.53 -2.08,-1.09 -1.81,-1.48 -0.99,-0.26 0.62,-0.64 -0.23,-0.44 -0.98,0.04 0.19,0.43 -0.57,0.25 -1.11,-1.73 -0.88,-0.44 -26.59,-9.48 0.13,-0.58 -0.51,-0.64 -2.49,-1.75 -0.76,-0.98 -6.24,-2.63 0.23,-0.84 -0.91,-1.08 -0.81,-0.57 -2.18,-0.28 -0.1,-0.54 -1.05,-0.38 -0.76,-1.89 -1.86,-1.33 -1.37,-2.35 -3.81,-2.12 -2.2,-0.68 -1.37,0.18 -0.74,0.82 -0.53,-0.32 0,0 -0.82,-1.26 0.11,-3.93 0.76,-0.63 2.64,-0.82 0.86,0.25 1.46,-0.64 0.76,-0.77 1.62,0.37 0.82,-0.28 0.18,-0.32 -1.84,0.03 0.33,-0.9 -0.11,-1.23 -0.65,-1.41 0.58,-1.1 -0.63,-1.23 0.13,-0.34 0.64,-0.03 -0.47,-0.79 0.68,-0.39 0.62,0.14 -0.21,-0.46 0.56,-0.11 0.53,0.82 0.48,-0.77 -0.33,-0.41 1.06,-0.33 0.06,1.05 0.6,-0.38 0.29,0.38 0.15,-0.67 0.67,-0.24 1.13,0.03 1.21,1.9 2,0.91 3.46,-0.51 0.21,-0.46 2.03,-0.46 1.72,0.04 0.47,0.49 2.03,0.47 1.57,-0.19 1.13,0.28 1.18,1.66 0.08,0.82 0.64,0.13 1.42,-1.1 0.62,0.57 1.44,0.23 0.4,0.79 1.49,0.85 0.34,-0.42 0.4,0.3 0.27,1.06 0.81,-0.03 0.77,-1.01 -2.83,-3.79 -0.3,-3.14 -1.22,-4.24 0.47,-1.03 1.1,-0.85 0.42,0.04 0.57,1.57 2.44,-2.92 0.93,-0.53 1.09,-2.45 2.22,-1.41 z m 4.64,18.75 0.07,0.32 0.38,-0.34 -0.45,0.02 z" title="Guerrero" id="MX-GRO" />
                    <path d="m 496.62786,317.19244 0.84,0.17 0.3,0.75 -0.3,2.66 1.83,1.71 1.26,0.66 1.31,0.07 0.86,-0.9 2.03,0.62 2.53,3.42 -1.86,2.46 -0.63,2.21 0.56,1.06 -0.26,0.63 -1.45,0.23 -1.34,-1.39 -0.46,0 -2.39,2.16 -0.32,0.86 -0.65,0.54 -0.33,3.66 -0.58,1.3 -0.25,2.08 1.17,2.59 0.88,1.08 0.5,-0.22 1.33,-1.55 2.48,-1.16 1.88,-2.23 1.6,-0.73 2.14,-2.33 0.83,-0.35 1.46,0.95 0,0 0.07,3 -2.86,2.52 -0.91,1.38 -3.62,1.85 0.7,1.41 2.12,-0.48 0.46,2.19 -0.81,4.8 -1.54,3.08 0.7,4.73 0,0 -2.38,-0.5 -0.82,1.47 -1.45,1.21 -2.09,0.28 -1,-0.23 -5.01,1.71 0,0 -0.2,-1.41 1.84,-4.15 -0.17,-1.74 -5.81,0.61 -1.72,2.58 -0.24,0.21 -0.65,-0.32 0.02,-0.9 -0.87,-1.77 0.2,-0.52 0.91,-0.53 0.85,-0.08 1.11,-4.28 -0.47,-1.34 -0.6,-0.07 -2.73,1.39 -3.88,1.07 -0.53,3.75 -0.69,0.76 -2.13,-1.01 -0.17,2.24 -1.21,0.99 0.1,-2.49 -0.4,-1.34 -0.69,-0.65 -0.34,-1.25 -1.22,-1.26 0.7,-0.99 -1.51,-3.13 -0.64,-0.25 -0.13,-0.58 -4.65,-0.69 -2.63,-1.49 -1.18,-1.39 0,0 1.01,-6.54 1.58,-0.49 0.91,-0.68 2.93,-0.72 2.32,-1.61 -0.63,-2.02 1.15,-2.56 1.16,-0.42 0.81,-1.2 0.47,-2.21 0.83,-1.56 -0.27,-1.11 1.65,-1.43 1.21,0.71 4.11,-1.29 1.28,-3.13 0,0 2.26,-0.75 1.14,2.4 1.34,1.1 1.08,-0.04 1.35,-2.38 0.92,1.31 1.33,-2.96 1.58,-1.84 z" title="Hidalgo" id="MX-HID" />
                    <path d="m 390.52786,309.79244 2.05,-1.12 4.21,0.38 1.74,1.41 2.17,1.02 1.26,-0.06 3.02,-1.04 0.72,-0.5 2.55,-3.55 4.28,-1.97 -1.96,-2.14 0.24,-1.6 -0.26,-0.59 0,0 3.54,0.91 2.13,1.14 2.67,2.35 2.09,0.75 0.28,0.39 0,0 -1.22,1.29 0.74,0.83 -1.2,1.36 0.12,0.7 -1.52,5.53 0.7,0.12 -0.58,2.19 0.81,0.47 -0.67,1.37 -0.43,0.37 -1.47,0.09 -0.52,0.74 0.11,0.65 -1.12,2.71 -2.49,1.91 -1.91,3.95 -1.81,1.5 -0.12,0.83 -2.01,1.96 0.55,1.31 1.65,0.43 1.57,2.87 -1.79,3.43 -0.38,2.77 0,0 -2.8,0.01 -2.14,1.04 -1.71,-0.17 -1.33,0.46 -1.68,-0.13 -1.07,0.34 -2.06,1.64 -1.06,-0.08 -1.01,1.05 -0.94,0.33 -0.28,1.43 -2.97,0.73 -0.23,0.81 -0.44,0.04 -1.05,-1.3 -2.47,-0.45 -0.3,1.15 -0.93,-0.2 -0.36,0.27 -0.02,2.35 -0.89,1.51 0.5,0.84 0.5,0.05 0.45,-0.56 2.27,0.28 3.21,0.94 0.66,0.64 0.61,2.21 -0.33,0.81 -0.93,0.74 1.91,4.2 -0.63,2.59 3.36,-0.07 0.61,0.68 0.06,1.56 -2.36,2.5 -0.85,2.31 -2.31,-0.58 -1.37,0.72 -4.02,3.58 -2.2,1.21 -1.59,1.74 -0.29,0.09 -1.26,-1.76 -0.53,-0.1 -2.22,1.7 -1.55,-0.3 -1.66,0.41 0,0 -0.05,-1.96 -0.82,-1.54 0.56,-1.32 -0.07,-3.12 0.5,-1.8 -1.07,-0.48 -0.21,-0.78 -0.97,-0.83 0.16,-1.02 -0.48,-2.89 -0.61,-0.13 -2.51,2.41 -3.22,1.68 -1.41,0.21 -3.25,-0.32 -3.1,2.32 -1.13,0.29 -1.27,-0.38 -3.77,0.88 -0.55,-0.4 -0.87,0.58 -0.48,0.84 -0.56,0.11 -1.14,-0.48 -1.48,1.79 -1.92,-0.05 0,0 -0.56,-0.53 -0.63,0.09 -0.08,-0.51 -0.66,0.26 -0.49,-0.3 -0.85,0.13 0.01,-0.64 0.51,-0.55 -0.13,-0.46 -0.89,-0.29 -0.23,0.43 -0.93,0.19 -2,-1.07 -1.89,-1.72 0.36,-0.72 -0.37,-0.73 -0.84,-0.47 0.09,-0.85 -0.45,-0.22 -0.22,-1.49 -0.76,-0.74 -0.84,-0.03 0.04,-0.36 -2.83,-2.11 -0.26,-0.73 -1.43,-1.51 -0.4,-1.11 -3.92,-5.33 -1.12,-2.32 0.21,-2.21 -0.34,-1.22 -0.68,-0.24 -0.13,-0.6 -2.24,-2.34 -0.46,-1.65 1.05,-0.51 0.95,-1.13 7.41,-1.16 1.5,-1.1 0.66,-1.61 -0.31,-0.97 -1.28,-1.06 0,0 4.45,-5.62 1.17,-0.45 2.33,0.47 3.19,-2.44 1.25,-0.21 1.5,0.73 1.21,1.43 3.08,0.78 2.66,3.01 1.08,0.56 2.3,2.12 0.67,0.78 0.5,1.55 0.51,0.32 0.03,-1.46 -1.18,-1.46 0.29,-0.35 -0.73,-0.75 -0.37,-1.53 0.45,-0.64 0.82,-0.18 1.5,-8.51 4.04,-0.23 0.95,-0.4 0.97,-0.97 1.71,-0.28 2.25,-1.28 0.4,-0.82 0.4,-4.22 -0.24,-1.48 -1.39,-1.24 -1.74,-4.29 -4.5,-0.6 -0.85,-1.61 -0.11,-2.72 -0.53,-0.48 -1.11,-0.09 -1.2,-1.16 -1.65,0.52 -0.46,-3.02 1.24,-4.89 -0.18,-0.48 0,0 1.08,-1.21 1.35,0.34 0.36,-3.03 3.1,-1.17 0.53,0.37 -1.05,3.24 0.27,0.49 1.8,-1.14 1.03,-1.18 -0.16,-1.43 -1.74,-3.84 0.11,-0.79 2.16,-1.53 2.66,-0.38 1.81,1.01 -0.17,0.91 -1.1,0.82 -1.45,1.87 -1.69,4.22 -0.04,3.32 1.21,1.78 1.16,0.17 0.38,-1.16 0,-7.04 0.63,-0.57 3.43,-0.67 1.42,0.51 1.4,1.32 0.6,1.93 -0.04,1.16 -3.78,6.17 -0.09,0.45 0.58,0.66 1.93,0.02 0.69,-0.8 1.27,0.2 0.71,0.52 0.9,-0.44 0.93,-1.73 2.39,-1.89 -1.24,-1.03 0.31,-1.87 1.88,-0.73 2.17,0.17 0.41,0.86 -0.76,1.51 0.5,0.44 2.15,0.14 0.51,0.38 -0.7,3.47 -1.19,2.91 -0.74,0.69 -1.26,0.2 -3.28,1.68 -1.77,1.73 -2.92,2.07 0.18,1.79 -0.33,2.47 -1.62,1.88 -1.79,0.46 0.85,2.48 0.93,0.54 1.02,-0.49 0.67,0.14 0.34,0.58 -0.1,1.02 -1.17,1.12 -4.04,1.81 0.17,0.5 2.5,0.62 0.75,0.81 0.75,1.7 0.94,0.49 2.26,-0.19 2.9,1.61 0.99,-0.48 0.88,0.07 0.22,-0.56 1.34,-0.26 1.71,0.43 0.11,-0.37 1.47,-0.52 0.33,-2.02 0.63,-0.54 1.37,-0.49 1.52,0.5 3.58,-2.91 2.29,-1.4 0.96,-1.31 0.48,-2.69 -2.78,-1.78 -0.65,-1.85 z" title="Jalisco" id="MX-JAL" />
                    <path d="m 454.56786,398.27244 -0.38,0.34 -0.07,-0.32 0.45,-0.02 z m 8.86,-51.68 1.17,1.4 2.64,1.49 4.64,0.69 0.13,0.58 0.64,0.26 1.51,3.12 -0.7,1 1.22,1.25 0.34,1.25 0.69,0.65 0.4,1.34 -0.1,2.49 1.21,-1 0.17,-2.24 2.13,1.01 0.69,-0.77 0.53,-3.75 3.88,-1.08 2.73,-1.38 0.59,0.06 0.47,1.34 -1.11,4.28 -0.85,0.08 -0.91,0.52 -0.21,0.52 0.87,1.78 -0.01,0.89 0.64,0.32 0.24,-0.2 1.72,-2.58 5.82,-0.61 0.17,1.74 -1.84,4.15 0.19,1.42 0,0 0.97,1.82 0.76,-0.24 0.52,0.6 0,0 0.39,1.82 -0.56,0.61 -0.04,1.09 1.04,3.63 0.12,4.4 0,0 -0.89,0.18 -2.61,2.06 -2.55,-0.94 -0.93,-1.59 -0.98,-0.83 0,0 -0.19,-0.83 0.47,-1.67 -0.35,-1.58 -0.23,-0.5 -0.47,0.38 -0.31,-1.48 -2.14,-1.8 -0.48,-1.54 -1.57,-1.92 0.05,-1.06 -0.33,-0.36 -2.24,2.46 -0.56,1.98 -3.17,2.75 0.1,0.98 2.62,4.38 0,0 -3.95,6.3 -0.45,1.43 -1.56,1.84 -0.24,1 0,0 -0.81,-0.13 -0.82,0.49 -1.98,-0.67 -0.91,-1.08 -0.81,0.05 0.36,1.72 -1.76,0.32 -0.44,1.56 -0.85,-0.29 -0.88,0.42 -0.29,0.58 -3.51,0.23 -0.79,-0.43 -1.02,0.49 -0.35,0.6 0.69,1.38 -2.47,0.58 -1.98,2.18 -0.19,-0.37 -0.34,0.39 -0.62,-0.03 -0.04,0.43 -1.57,-1.96 -0.22,-1.08 -1.51,-0.33 -1.33,0.27 -0.65,-0.66 1.66,-1.81 0.25,-0.72 -0.1,-1.19 -1.75,-0.76 -0.37,-1.6 0.74,-4.23 1.05,-1.92 -0.3,-2.94 0,0 0.56,-0.38 0.23,-1.13 1.5,-1.83 1.1,-2.39 -0.28,-0.98 0.76,-1.78 0.43,-0.6 0.67,-0.12 0.3,-0.62 -0.44,-5.18 -0.57,-0.47 -0.96,-1.95 1.51,0.1 1.44,-0.5 0.29,-0.51 0.28,-2.06 1.33,-1.7 -0.04,-0.61 -0.87,-0.82 0.08,-2.43 0,0 2.55,-0.31 1.92,-2.01 -0.29,-1.73 -0.54,-0.96 0.24,-0.31 0.88,0.6 0.65,-0.13 -0.21,-0.72 0.3,-0.63 1.15,-0.72 z" title="México" id="MX-MEX" />
                    <path d="m 408.26786,344.95244 0.86,0.05 0.33,0.54 0.55,-0.07 0.57,0.49 -0.36,0.4 0.68,2.85 0.44,0.45 0.81,0.09 1.18,-0.7 0.48,0.43 2.21,-0.14 0.91,0.3 2.01,-2.8 2.1,-0.69 0.63,0.39 1.43,-0.24 1.09,0.75 1.34,1.8 -0.63,0.27 -1.04,-0.52 0.45,1.73 0.02,3.24 0.47,0.5 2.54,0.24 1.8,0.74 1.22,-0.52 -0.33,-0.82 0.66,-0.58 1.39,0.44 2.21,-0.6 0.46,2.34 -0.21,0.47 0.26,0.1 0.61,-0.29 1.3,0.14 2.58,0.91 3.44,0.17 1.38,-1.02 1.94,-0.48 0.5,0.24 -0.33,1.5 0.62,-0.18 0.48,-1.4 0.73,-0.79 2.06,-0.28 1.18,-1.15 0.08,-0.99 -0.67,-0.05 0.51,-1.75 -0.1,-1.32 -0.6,-1.18 0.43,-1.09 0,0 1.55,0.99 1.22,1.92 -0.18,0.75 3.29,3.04 0,0 -0.08,2.43 0.87,0.81 0.03,0.62 -1.33,1.7 -0.28,2.05 -0.29,0.52 -1.43,0.49 -1.52,-0.1 0.96,1.96 0.57,0.47 0.43,5.18 -0.3,0.62 -0.66,0.11 -0.44,0.6 -0.76,1.79 0.28,0.98 -1.1,2.39 -1.5,1.83 -0.23,1.13 -0.56,0.39 0,0 -2.25,1.38 -1.09,2.46 -0.93,0.53 -2.44,2.92 -0.57,-1.57 -0.42,-0.04 -1.1,0.85 -0.47,1.03 1.22,4.23 0.3,3.15 2.83,3.79 -0.77,1.01 -0.81,0.02 -0.27,-1.06 -0.4,-0.3 -0.34,0.41 -1.48,-0.84 -0.4,-0.79 -1.44,-0.23 -0.62,-0.57 -1.41,1.1 -0.65,-0.12 -0.08,-0.83 -1.18,-1.66 -1.13,-0.27 -1.57,0.19 -2.03,-0.47 -0.47,-0.5 -1.72,-0.04 -2.03,0.46 -0.21,0.46 -3.46,0.5 -1.99,-0.91 -1.21,-1.9 -1.13,-0.03 -0.66,0.25 -0.15,0.67 -0.29,-0.38 -0.6,0.38 -0.06,-1.06 -1.06,0.34 0.32,0.4 -0.48,0.77 -0.53,-0.82 -0.56,0.11 0.21,0.46 -0.62,-0.14 -0.68,0.39 0.47,0.79 -0.64,0.03 -0.13,0.34 0.63,1.23 -0.58,1.1 0.65,1.4 0.11,1.23 -0.33,0.9 1.84,-0.02 -0.18,0.31 -0.82,0.28 -1.62,-0.37 -0.76,0.78 -1.47,0.64 -0.86,-0.25 -2.63,0.82 -0.76,0.63 -0.11,3.93 0.82,1.27 0,0 0.19,0.76 -1.28,0.53 -2.96,-1.46 -4.05,-1.21 -7.91,-1.73 -5.13,-2.39 -3.78,-0.7 -4.95,-1.86 -0.52,0.23 -3.81,-2.32 -1.77,-4.11 -2.87,-2.23 0.36,-0.84 -1.56,-1.89 0,0 0.68,-1.7 1.86,-1.18 -0.03,-1.79 0.38,-0.28 1.02,0.31 2.47,-2.24 0,0 1.66,-0.41 1.55,0.3 2.22,-1.7 0.53,0.1 1.26,1.76 0.29,-0.09 1.59,-1.74 2.2,-1.21 4.02,-3.58 1.37,-0.72 2.31,0.58 0.85,-2.31 2.36,-2.5 -0.06,-1.56 -0.61,-0.68 -3.36,0.07 0.63,-2.59 -1.91,-4.2 0.93,-0.74 0.33,-0.81 -0.61,-2.21 -0.66,-0.64 -3.21,-0.94 -2.27,-0.28 -0.45,0.56 -0.5,-0.05 -0.5,-0.84 0.89,-1.51 0.02,-2.35 0.36,-0.27 0.93,0.2 0.3,-1.15 2.47,0.45 1.05,1.3 0.44,-0.04 0.23,-0.81 2.97,-0.73 0.28,-1.43 0.94,-0.33 1.01,-1.05 1.06,0.08 2.06,-1.64 1.07,-0.34 1.68,0.13 1.33,-0.46 1.71,0.17 2.14,-1.04 z" title="Michoacán" id="MX-MIC" />
                    <path d="m 479.58786,379.45244 1.33,-0.24 1.33,1.17 1.3,-1.09 0.63,-0.12 0.91,0.8 2.35,-0.75 0.95,0.02 0,0 0.98,0.83 0.93,1.59 2.55,0.94 2.62,-2.06 0.89,-0.18 0,0 -2.76,7.08 1.27,7.84 -0.55,0.72 -2.76,-2.64 -0.51,0.12 -0.8,1.26 -1.16,0.64 -0.61,0.99 -2.77,1.9 0,0 -2.3,-2.34 -5.51,-0.69 -2.02,-2.68 -1.13,-0.45 -1.07,0.23 -0.44,-0.36 0.65,-1.12 -0.5,-0.83 0,0 0.24,-1.01 1.56,-1.84 0.44,-1.43 z" title="Morelos" id="MX-MOR" />
                    <path d="m 304.00786,319.19244 0.16,0.81 -0.79,0.37 -0.46,-0.71 0.42,-0.46 0.67,-0.01 z m -5.18,-4.35 1.56,0.44 0.4,0.56 -0.51,0.38 -0.15,0.76 -2.29,-0.87 -0.4,-0.53 1.39,-0.74 z m -5.42,-5.3 2.62,0.7 0.4,0.44 -0.06,0.59 0.77,0.78 -0.21,0.87 -0.6,0.37 -2.37,-1.27 -0.54,-1.38 -0.01,-1.1 z m -0.44,-2.1 0.36,1 -0.51,0.23 -0.24,-0.83 0.39,-0.4 z m 24.72,-21.4 0.58,1.44 -0.17,1.35 0.55,0.48 -0.21,0.67 0.94,6.35 -0.6,0.03 -0.18,-0.4 -0.75,-4.16 -1.96,-4.49 0.28,-0.25 1.1,1.77 0.76,-0.25 -0.74,-2.17 0.4,-0.37 z m 7.2,-12.79 2.2,2.64 1.68,-0.35 0.91,-1.31 0.54,0.03 1.52,1.75 1.33,0.6 2.09,0.16 0.58,2.47 0.52,0.37 1.15,-0.03 0.12,1.24 -0.59,0.89 -1.7,0.87 -1.69,1.76 2.2,4.58 0.69,0.03 0.81,-0.85 1.35,-2.56 1.39,1.76 1.7,0.43 2.49,2.39 0.96,2.07 1.81,1.12 0.48,-0.04 0.4,-1.38 2.94,-1.3 0,0 0.21,2.77 0.42,0.96 0.73,0.43 0,0 0.18,0.48 -1.25,4.89 0.46,3.02 1.66,-0.52 1.2,1.15 1.11,0.09 0.53,0.48 0.11,2.72 0.85,1.62 4.5,0.6 1.74,4.29 1.39,1.24 0.24,1.47 -0.4,4.22 -0.4,0.83 -2.25,1.28 -1.72,0.28 -0.97,0.97 -0.96,0.4 -4.04,0.23 -1.5,8.51 -0.82,0.18 -0.45,0.64 0.38,1.53 0.73,0.75 -0.29,0.35 1.18,1.46 -0.04,1.46 -0.51,-0.32 -0.5,-1.55 -0.68,-0.78 -2.3,-2.12 -1.08,-0.55 -2.66,-3.01 -3.08,-0.79 -1.21,-1.43 -1.5,-0.73 -1.25,0.22 -3.19,2.43 -2.33,-0.46 -1.17,0.45 -4.45,5.62 0,0 -1.22,-1.75 -0.47,-0.08 -0.88,0.73 -3,-0.99 0.77,-0.63 0.92,-2.15 0.36,0.09 0.87,-1.57 1.21,-0.8 0.88,-1.17 0.15,-0.84 1.02,0.35 1.14,-1.62 -0.28,-0.98 0.5,-3.15 -0.65,-2.83 1.39,-2.69 -0.21,-1.25 -0.74,-0.84 -0.93,0.31 -4.66,-3.17 -1.43,-3.57 -2.97,-5.06 -0.73,-2.66 0.18,-3.21 0.8,-0.38 0.46,1.19 0.6,0.1 0.31,0.8 1.98,0.97 0.3,-1.52 -1.02,-0.71 -0.25,0.25 -0.35,-0.75 -1.02,0.34 -0.19,-0.57 0.38,-0.35 -0.07,-0.61 -0.45,-0.06 -0.33,0.42 -0.33,-0.3 0.13,-0.7 -0.52,-0.97 -0.21,-3.39 -0.3,-0.57 0.19,-0.85 -0.58,-0.39 0.25,-0.68 -0.63,-2.11 0.33,-0.17 0,0 2.1,1.24 3.46,0.57 0.36,-0.89 -0.23,-2.04 -0.4,-0.36 -0.21,-1.33 -1.31,-1.3 -0.45,-1.3 0.33,-1.02 1.69,-2.1 0.56,-3.41 0.9,-0.62 z" title="Nayarit" id="MX-NAY" />
                    <g class="selected active">
                        <path d="m 466.82786,145.86244 -0.65,0.34 -1.28,1.73 -2.78,0.8 -0.62,0.69 0.27,0.79 -0.35,1.07 0.6,0.45 4,0.19 0.05,0.88 -1.17,1.42 1.27,0.87 -0.22,2.46 0.24,1.38 1.15,1.13 0.42,3.19 -1.64,1.39 -0.81,2.39 0.13,1.12 1.47,-0.05 1.25,0.66 0.52,0.78 -0.47,1.29 -0.23,3.22 0.8,0.82 0.88,-0.37 0.67,0.4 0.84,1.9 1.88,0.22 1.24,4.14 1.82,2.49 1.41,-0.13 -0.06,1 1.17,1.62 0.69,0.09 0.75,-0.73 0.63,0.05 0.18,0.6 -0.36,0.73 0.76,1.34 -0.89,0.33 0.82,0.46 0.37,0.65 3.28,0.46 0.65,0.59 1.19,2.34 0.95,0.54 2.66,-1.53 1.07,0.15 3.38,-0.69 0.69,0.45 0.14,1.47 0.79,1.01 -0.3,3.35 0.59,1.52 -0.47,0.77 -0.2,2.07 0.69,1.57 -0.41,0.8 0.99,0.83 1.99,0.63 0.4,0.26 0.03,0.52 -1.54,1.58 -0.59,1.37 -1.25,0.62 -1.36,1.44 -0.78,0.08 -0.99,1.13 -4.38,0.85 -0.99,1.14 -0.75,2.03 -2.8,-0.22 -0.61,-1.17 -0.51,-0.04 -1.46,1.97 -1.26,0.41 -0.25,0.4 0.6,2.24 0.67,0.36 -0.38,1.67 -0.9,0.09 -0.92,0.69 -0.47,1.6 -1.12,0.45 -0.38,-1.52 -0.38,0.13 -0.36,1.04 -1.15,0.47 -1.12,1.6 -1.76,-0.1 -1.3,2.13 -2.87,1.27 -1.99,1.35 -0.69,2.1 0.22,0.28 1.83,-0.09 1.26,2.62 -0.86,6.77 1.77,2.09 1.4,3.64 1.37,0.77 0.76,2.34 -2.25,-0.44 -0.36,0.1 -0.34,1.51 -1.76,0.97 -0.71,0.15 -2.55,-0.68 -2.31,1.23 -0.66,2.81 -1.48,1.77 -0.33,0.96 0.39,2.84 -0.21,1.77 -3.09,-0.38 -0.8,0.68 0.55,1.35 -0.43,0.77 0,0 -3.9,-0.74 -2.34,2.8 -1.5,-0.72 -1.24,-1.47 -0.56,-1.65 -0.25,-4.09 -0.51,-1.27 1.15,-5.6 -0.11,-0.89 -0.97,-1.46 0.21,-4.37 -0.88,-2.25 -2.48,-3.13 0.13,-1.43 -1.79,-1.71 -0.29,-0.81 1.2,-1.57 0.05,-0.33 -0.69,-0.26 0.48,-1.57 -1.39,-0.5 -1.05,0.19 -1.72,-2.32 0,0 0.55,-0.42 0,0 1,-3.26 -0.65,-1.23 -0.11,-1.39 -1.38,-1.55 0.32,-1.2 -0.29,-0.83 0.16,-0.37 2.41,-0.06 0.2,-0.39 -0.09,-2.16 -0.89,-2.93 1.7,-3.22 1.79,-0.57 -0.29,-0.81 0.94,-0.31 1.74,0.17 1.31,1.53 3.41,0.88 1.94,0.03 0.34,-0.2 0.15,-1.15 0.75,-0.89 -0.39,-0.95 -0.88,-0.32 -0.5,-0.8 -3.6,-0.63 0.51,-1.05 -3.28,-1.88 -0.82,-0.85 -0.56,-3.41 -0.35,-0.36 -2.13,-0.08 -0.84,-0.66 -1.11,-0.14 -0.84,-1.78 -0.24,-2.47 0.99,-2.9 -0.38,-0.64 -0.86,-0.08 -1.42,-1.15 -1.05,-3.11 -2.7,-2.02 -4.54,-4.78 -0.02,-1.3 2.42,-2.42 1.04,-2.73 0.87,-0.9 3.51,-0.28 2.61,-1.7 3.2,0.04 1.14,-2.19 1.05,-0.77 0.84,-2.24 -0.42,-5.13 -2.05,-1.48 -0.63,-0.07 -0.7,3.12 -0.59,0.05 -2.82,-2.07 -0.25,-3.34 1.83,-2.98 1.19,-1.04 1.19,0.38 2.1,-0.92 2.23,0.12 0.63,-0.49 -0.16,-2.29 0.29,-0.79 1.69,-2.6 0.55,-2.34 1.13,-0.63 3.67,-0.26 5.52,0.92 1.92,-1.3 0.95,-0.06 1.09,-0.79 0.26,-0.61 0,0 0.75,-0.17 0.24,0.93 0.77,0.25 z" title="Nuevo León" id="MX-NEL" />
                    </g>
                    <path d="m 543.86786,396.11244 1.17,-2.18 0.3,-0.96 -0.49,-0.74 0.05,-0.86 0.65,-0.61 1.15,1.16 1,0.35 -0.58,1.27 0.61,2.74 0.64,0.9 1.96,1.55 1.3,-0.38 1.39,0.81 1.02,1.89 1.38,0.09 -0.54,0.9 0.7,0.35 2.47,-0.78 1.43,0.52 1.15,-0.19 2.03,0.48 0.52,0.44 1,3.79 -0.22,1.25 -0.81,1.12 -0.99,2.57 -0.72,0.68 0.34,0.72 -0.17,1.18 2.17,4.42 1.96,0.58 1.26,-0.65 2.87,-0.17 3.01,-2.1 3.66,-0.92 1.21,-1.09 0.42,0.07 1.37,0.84 -0.18,0.68 -1.49,0.66 -0.23,1.13 3.36,4.41 3.45,2.79 -0.01,0.99 0.64,0.57 -0.33,1.37 28.57,1.75 0,0 -0.34,0.94 0.03,2 -0.76,1.02 -0.8,3.49 -2.94,2.62 -2.19,6.29 -0.08,0.85 1.24,2.93 -0.52,1.46 0.12,2.11 0,0 0.04,0.44 -1.98,0.89 -0.49,-0.09 -0.52,-0.43 -0.72,0.07 -0.79,-0.87 -0.87,0.02 -0.89,-1.51 -1.12,0.39 0.02,0.99 -0.66,0.05 -0.02,0.63 1.12,0.96 4.37,0.32 3.07,2.29 0,0 -0.18,0.64 0,0 -4.71,-2.07 -2.96,-0.91 -7.69,-1.12 -0.24,-0.45 2.64,-0.9 0.73,-0.65 0.4,-1.13 -2.38,-0.84 -1.29,0.9 -0.39,0.77 -0.96,0.05 -0.27,0.61 -0.51,-0.15 -0.1,-0.39 1.1,-0.94 -1.1,-0.93 0.24,-0.61 -1.39,-1.05 -1.67,0.44 -1.3,2.23 -1.25,-0.03 -0.92,0.82 0.21,0.86 -0.61,0.06 -0.44,0.8 6.42,-0.01 1.84,0.24 0.12,0.29 -3.64,0.06 -3.99,0.67 -1.85,-0.16 -0.16,0.61 -2.02,0.17 -0.48,0.46 -0.63,0 -0.16,1 -2.02,0.89 -0.34,0.52 0.21,0.78 -1.37,0.46 -0.18,0.54 -1.55,-0.18 -0.11,0.58 -1.97,0 -0.11,0.47 -2.03,0.89 -2.44,0.34 -1.28,0.85 -3.85,1.01 -2.73,1.26 0.01,0.26 -1.46,0.4 0.18,0.33 -2.95,1.43 -4.45,-0.27 -1.87,0.97 -1.57,-0.03 -3.54,-1.49 -4.01,-0.6 -1.55,-0.95 -2.43,-0.76 -0.77,-0.54 -0.27,-0.77 -3.76,-1.7 -3.26,-0.61 -2.02,0.13 -2.64,-0.73 -0.74,0.18 -2.57,-0.4 -0.44,0.39 -2.43,-0.37 -5.68,-3.74 -5.44,-2.9 -4.67,-0.84 -3.82,-1.38 0,0 4.64,-3.55 0.46,-2.01 4.11,-3.59 0.19,-1.35 0.93,-0.67 1.22,-0.23 0.9,-0.91 0.92,-2.88 -0.36,-1.55 -0.42,-0.54 -1.16,-0.26 -0.27,-0.59 0.11,-1.91 -0.45,-1.17 -2.29,-0.78 -0.56,-0.51 0.18,-2.07 0.92,-0.83 -0.61,-4.58 -2.73,-6.06 0.17,-1.42 1.74,-3.95 0,0 1.2,-1.4 2.07,-1.35 1.57,-0.36 3.46,-0.01 1.45,-0.59 2.19,1.61 1.18,0.36 0.72,-0.21 1.77,-1.64 -0.07,-0.43 -2.35,-1.64 -0.44,-0.76 2.03,-4.33 1.56,-0.68 1.59,-0.2 0.48,0.34 0.23,0.97 -0.1,0.46 -1.33,0.9 0.1,0.4 1.31,0.96 0.74,1.08 1.44,2.82 0.36,1.64 0.82,0.7 0.87,-0.85 0.91,-1.9 2.6,-2.58 1.36,-0.29 3.72,0.89 1.78,-1.48 0.11,-0.89 0.29,0.56 1.36,-0.9 2.39,-0.51 1.92,-3.45 z" title="Oaxaca" id="MX-OAX" />
                    <path d="m 511.59786,338.20244 0.7,-2.56 0.96,-0.75 0.09,-0.83 0.88,-0.94 0.27,-1.02 1.18,0.39 2.03,-0.32 -0.01,1.79 -1.23,0.75 0.16,0.3 0.87,-0.19 0.81,0.6 -0.37,0.84 0.16,0.84 0.81,0.84 2.23,1.22 0.48,1.12 -1.5,2.47 -1.61,-0.92 -1.17,0.76 0.06,4.01 0.46,2.37 0.68,0.55 2.04,-0.22 0.86,1.78 0.59,0.2 1.61,-1.4 1.22,-1.95 0.82,-0.66 7.06,2.48 0.08,0.51 -2.16,2.99 -1.65,4.28 -0.2,0.81 0.32,0.98 -0.34,0.97 -0.67,0.87 -0.97,2.63 -0.57,0.24 -0.25,0.7 1.38,2.99 -0.55,1.38 0.34,0.42 1.43,0.99 3.63,0.82 2.93,1.27 0.47,0.59 0.11,1.28 -0.16,0.7 -0.53,0.12 -4.82,-0.22 -0.19,0.9 0.52,6.12 -0.07,0.55 -1.86,2.41 0,2.99 0.36,1.11 0.85,0.73 3.81,1.11 -0.17,0.75 1.86,3.13 1.43,0.1 0.95,-1.05 1.39,-0.8 2.58,0.83 1.85,2.16 0,0 -0.81,0.84 -1.92,3.45 -2.39,0.51 -1.36,0.9 -0.29,-0.56 -0.11,0.89 -1.78,1.48 -3.72,-0.89 -1.36,0.29 -2.6,2.58 -0.91,1.9 -0.87,0.85 -0.82,-0.7 -0.36,-1.64 -1.44,-2.82 -0.74,-1.08 -1.31,-0.96 -0.1,-0.4 1.33,-0.9 0.1,-0.46 -0.23,-0.97 -0.48,-0.34 -1.59,0.2 -1.56,0.68 -2.03,4.33 0.44,0.76 2.35,1.64 0.07,0.43 -1.77,1.64 -0.72,0.21 -1.18,-0.36 -2.19,-1.61 -1.45,0.59 -3.46,0.01 -1.57,0.36 -2.07,1.35 -1.2,1.4 0,0 -1.61,-0.8 -1.6,-1.98 -1.55,0.14 -0.86,0.86 -0.47,-0.27 -1.4,0.31 -0.13,-1.08 -4.2,-1.78 0.83,-0.97 -0.22,-0.8 -2.98,0.2 -1.22,-2.25 -1.35,-0.62 -1.35,-1.18 0.05,-1.22 0,0 2.77,-1.9 0.61,-0.99 1.16,-0.64 0.8,-1.26 0.51,-0.12 2.76,2.64 0.55,-0.72 -1.27,-7.84 2.76,-7.08 0,0 -0.12,-4.4 -1.04,-3.63 0.04,-1.09 0.55,-0.61 -0.38,-1.83 0,0 0.7,-0.29 1.16,0.37 3.03,2.31 1.32,1.38 0.54,1.38 1.18,1.31 4.06,2.24 0.86,-0.14 3.07,-2.68 0.57,-0.04 1.46,0.99 0.77,-0.05 1.24,-0.84 1.4,-2.33 0.84,0.32 2.68,-0.51 0.82,-0.55 0.28,-1.15 -0.94,-0.2 -0.67,-0.6 -0.31,-1.17 -1.21,-1.24 -0.59,-0.38 -1.53,0.5 -0.84,-0.17 0.13,-1.73 -4.1,-3.41 -0.71,-1.06 -0.49,-0.07 -1.55,1.83 -0.61,0.24 -2.06,-0.38 0,0 -0.7,-4.73 1.54,-3.08 0.81,-4.8 -0.46,-2.19 -2.12,0.48 -0.7,-1.41 3.62,-1.85 0.91,-1.38 2.86,-2.52 z" title="Puebla" id="MX-PUE" />
                    <path d="m 483.94786,320.33244 -1.28,3.13 -4.11,1.29 -1.21,-0.71 -1.65,1.43 0.27,1.11 -0.83,1.56 -0.47,2.21 -0.81,1.2 -1.16,0.42 -1.15,2.56 0.63,2.02 -2.32,1.61 -2.93,0.72 -0.91,0.68 -1.58,0.49 -1.01,6.54 0,0 -1.1,0.79 -0.3,0.63 0.21,0.72 -0.66,0.12 -0.88,-0.6 -0.24,0.31 0.54,0.96 0.29,1.73 -1.92,2.01 -2.55,0.31 0,0 -3.29,-3.04 0.18,-0.75 -1.22,-1.92 -1.55,-0.99 0,0 -0.72,-1.67 -2.02,-1.41 -1.09,-1.86 0.01,-2.71 -0.65,-1.74 -0.96,-0.71 -0.14,-0.76 0.65,-3.8 0.72,-1.41 4.58,-0.28 1.5,-0.71 2.72,0.38 0.66,-0.4 0.22,-1.1 0.82,0.48 0.67,-1.6 -0.1,-1.45 2.25,-3.34 1.52,-0.56 1.73,1.75 1.1,-0.17 0.56,-1.03 1.45,-0.67 0.71,-1.44 0.04,-1.17 -2.48,-0.61 1.15,-1.91 0.11,-2.06 -0.5,-0.49 0,0 -0.59,-0.57 1.54,-0.38 -0.28,-0.45 0.18,-0.48 1.1,0.04 1.51,1 0.59,1.89 0.63,0.66 2.49,0.25 1.94,-0.5 0.58,0.36 1.06,-2.77 0.56,-0.37 0.8,0.24 0.48,-0.28 0.99,2.2 3.22,3.35 0.82,1.46 z" title="Querétaro" id="MX-QUE" />
                    <path d="m 792.18786,339.01244 -1.08,2.58 -1.14,1.48 -0.35,0.05 -2.56,3.35 -1.57,0.97 -0.67,-1.71 0.12,-1.91 2.29,-3.75 0.7,-0.36 0.72,0.76 0.34,-0.33 0.46,0.28 1.55,-0.4 1.19,-1.01 z m -60.53,69.87 -0.25,-2.46 2.44,-2.83 0.57,-1.26 -0.28,-4.7 -0.47,-1.38 0.57,-1.67 -0.82,-0.46 0.51,-1.37 -0.15,-0.71 -0.99,-1.24 -0.17,-1.27 0.8,-5.13 -0.22,-2.52 0.41,-0.67 1.17,-0.66 0.18,-5.85 -3.41,-4.67 -5.3,-4.25 -1.34,-1.81 0,0 0.93,-2 0.33,-1.46 -0.17,-0.87 0.56,-0.49 3.54,-0.17 1.39,-1.39 2.43,-1.05 2.43,-0.04 1.18,-0.41 1.92,-1.78 1.08,0.92 0.3,-0.32 -0.27,-0.69 1.87,-1.6 1.78,-1.04 5.51,-1.98 0.46,-0.47 0.79,-2.37 0.51,-0.42 1,0.01 0.93,1.68 0.36,-0.05 -0.25,-2.19 1.5,-2.76 1.17,-0.56 1.14,1 1.54,-0.44 1.51,0.1 3.11,-1.83 3.13,-2.7 1.72,-0.82 0.86,-1.17 0.27,-1.58 0.86,-1.08 0.48,-2.46 1.15,-2.05 0.1,-0.97 -1.33,-3.21 0.47,-3.16 0.88,-0.86 0.13,-0.76 -0.33,-5.31 0,0 1.33,0.09 -0.04,0.41 0.57,0.28 0.67,-0.32 2.09,0.59 0.33,0.39 0.65,-0.25 1.63,0.19 0.44,0.4 0.29,-0.53 2.71,-0.87 0.23,-1.96 -0.63,-0.27 0.64,-0.78 0.46,-0.16 0.44,0.5 1.44,0.39 0.56,0.83 0.34,-0.16 0.54,0.45 0.05,0.79 1.58,2.18 0.97,4.05 0.43,-0.1 0.22,-1.61 0.74,-0.67 -0.07,-0.9 -0.65,-1.07 0.65,0.22 0.11,1.72 -0.64,1.63 0.4,1.16 -0.16,1.37 0.19,0.8 1.2,0.85 -0.69,2.49 -0.75,0.05 -0.31,0.71 -1.27,4.05 -1.18,1.14 -1.11,1.59 0.04,0.49 -1.15,0.68 -0.33,0.81 -1.92,2.16 -3.88,3.04 -1.73,2.42 -1.02,2.47 -1.46,1.73 -1.41,3.98 -0.01,1.89 0.64,1.93 0.42,0.14 0.16,1.15 -0.58,1.37 -0.85,0.83 0.41,-0.93 0.44,0.01 0.56,-1.33 -0.06,-0.59 -0.62,-0.38 0.07,1.29 -1.05,1.79 -0.77,0.28 -0.34,-0.38 -0.92,0.55 -1.62,2.72 -2.43,0.42 -0.19,1.9 1,0.69 0.15,0.59 0.7,-0.34 -0.1,0.78 0.36,0.14 -0.25,0.71 0.58,-0.08 0.89,-1.26 1.58,-0.34 0.6,0.65 0.82,-0.78 -0.27,-0.41 1.72,-0.22 0.54,0.8 -0.74,2.5 -1.98,1.91 -0.47,-0.03 0.08,-0.79 -2.46,1.48 -0.62,1.69 0,1.25 -0.67,0.79 0.36,0.08 -0.06,0.74 1.4,-0.05 2.03,-2.79 0.8,-0.38 0.45,0.17 -0.34,1.4 0.35,-1.12 0.97,-0.08 -2.21,2.63 -0.28,3.21 -2.04,4.14 -1.12,4.75 -0.9,0.96 -0.82,4.76 -0.45,0.9 -0.04,2.04 -1.44,2.34 -0.56,3.33 -0.73,-0.54 -0.64,0.06 0.02,-0.68 0.56,-0.38 -0.12,-0.96 -0.41,0.1 0.4,-1.48 -0.52,-0.3 -0.15,-0.62 -0.81,-0.24 0.19,-1.03 -2.62,-0.79 -1.04,-1.23 0.74,-0.46 0.34,-2.04 0.93,-1.7 -0.47,-0.53 0.38,-1.24 -0.41,-1.43 -0.73,-0.62 0.24,-0.91 -0.79,-0.29 -2.26,3.58 -1.09,0.38 0.01,0.25 0.98,-0.43 -3.24,5.92 -2.26,0.13 -0.21,-0.27 -1.06,0.42 -1.2,-0.28 -0.92,0.82 -0.88,3.01 -1.06,1.13 -0.45,2.03 -1.09,1.38 -1.15,2.88 -1.42,0.78 -0.58,1.42 -1.62,1.31 0.11,1.6 -0.93,-1.04 -0.91,-0.39 -0.63,-0.95 -1.05,0.04 -0.96,-1.16 -1.8,0.39 -1.27,1.2 z m 50.74,-96.48 -0.21,0.54 -2,1.2 -1.46,-0.03 -0.56,0.38 -0.91,-0.52 -0.48,-0.76 1.72,0.56 1.4,-0.1 2.5,-1.27 z" title="Quintana Roo" id="MX-ROO" />
                    <path d="m 438.60786,232.61244 1.72,2.32 1.05,-0.19 1.39,0.5 -0.48,1.57 0.69,0.26 -0.05,0.33 -1.2,1.57 0.29,0.81 1.79,1.71 -0.13,1.43 2.48,3.13 0.88,2.25 -0.21,4.37 0.97,1.46 0.11,0.89 -1.15,5.6 0.51,1.27 0.25,4.09 0.56,1.65 1.24,1.47 1.5,0.72 2.34,-2.8 3.9,0.74 0,0 0.9,1.06 0.14,2.06 1.03,0.78 0.48,1.15 -0.33,3.63 0.22,2.98 0.2,0.69 1.09,0.92 4.2,1.37 3.27,0.26 2.2,0.73 0.65,-0.43 -0.05,-1.03 0.97,-0.56 0.62,0.33 0.81,1.29 1.69,0.56 1.38,1.08 0.83,1.17 0.92,2.53 2.16,2.85 1.78,-0.23 2,0.39 2.32,-0.07 0.71,-0.8 1.89,1.19 2.14,-0.45 0.96,0.17 0,0 0.29,0.93 0.53,0.26 2.36,-0.04 4.43,1.37 0.66,0.73 1.2,3.56 -2.53,0.05 -1.07,0.72 0.32,2.55 -0.26,0.67 -0.41,0.28 -2.17,-0.26 -0.27,0.41 0.38,0.38 1.13,0 -0.58,0.53 0.35,0.26 -0.13,1.23 0.59,0.72 0.45,-0.11 0.03,0.48 1.19,1.11 -1.7,0.79 -0.29,0.82 -1.06,-0.06 0.05,0.7 -1.26,0 -0.2,0.86 0.89,3.31 1.33,0.22 0.14,3.34 0,0 -1.68,-0.02 -1.58,1.84 -1.33,2.96 -0.92,-1.31 -1.35,2.38 -1.08,0.04 -1.34,-1.1 -1.14,-2.4 -2.26,0.75 0,0 -0.88,-0.26 -0.82,-1.46 -3.22,-3.35 -0.99,-2.2 -0.48,0.28 -0.8,-0.24 -0.56,0.37 -1.06,2.77 -0.58,-0.36 -1.94,0.5 -2.49,-0.25 -0.63,-0.66 -0.59,-1.89 -1.51,-1 -1.1,-0.04 -0.18,0.48 0.28,0.45 -1.54,0.38 0.59,0.57 0,0 -2.64,1.33 -1.61,-0.04 -0.68,-0.84 -0.39,0.54 -1.81,0.17 -1.7,-2.13 -0.48,0.09 -0.27,-0.69 -3.15,-2 -3.89,-1.28 -1.08,0.73 -0.62,1.83 0.15,1.12 -1.52,0.61 -2.75,0.03 -2.74,-1.43 -4.97,-3.72 -1.07,0.04 -1.23,-0.75 -4.63,-1.06 -1.26,-0.73 -2.91,-0.31 -1.16,-0.67 0,0 1.93,-3.97 0.35,-0.96 -0.26,-0.18 0.13,-0.55 0.39,0.03 0.36,-1.64 -1.38,-3.86 3.3,-7.3 0.19,-1.65 -1.97,-2.58 -0.71,0.05 -1.46,0.7 -4.45,4.61 -2.43,0.73 -2.08,-0.05 -1.48,-2.02 -0.92,-2 -1.07,-0.58 -2.31,-0.34 -1.11,-1.32 -4.18,-2.53 -0.94,-1 -0.25,-1.51 0.2,-1.26 1.26,-3.99 -1.03,-3.02 0.51,-1.69 -0.62,-0.81 0.87,-1.67 0.66,-0.2 2.32,0.93 2.94,-0.58 0.52,-1.44 0.85,-1.03 2.28,-0.84 3.56,-2.13 3.48,-5.14 4.74,-1.59 1.1,-1.54 1.18,-2.96 -1.01,-1.18 0.83,-3.45 0.64,-0.62 1.87,-0.48 1.36,-0.88 0.92,-1.78 0.21,-1.49 0.67,-0.52 1.58,0.07 0.98,-0.5 0.69,-1.72 1.19,-1 0.36,-1.78 z" title="San Luis Potosí" id="MX-SLP" />
                    <path d="m 317.37786,283.99244 0.42,0.06 0.54,0.94 -0.45,0.73 -0.51,-1.73 z m -61.12,-65.4 1.17,1.35 0.5,-0.19 0.27,0.31 0.01,0.9 0.59,1.13 -0.27,2.7 -0.48,-0.01 -0.69,-2.11 -1.08,-1.17 -0.02,-2.91 z m -4.82,-2.05 1.41,0.93 3.59,4.56 0.73,1.14 0.05,1.38 -0.39,0.16 -2.7,-5.14 -2.82,-2.59 0.13,-0.44 z m -0.55,-2.3 1.78,1.24 0.21,0.57 -1.66,-0.8 -0.33,-1.01 z m -21.58,-30.8 1.03,0.12 0,0 0.46,0.38 -0.13,1.01 -0.38,0.28 1.78,1.47 -0.35,-1.14 0.77,-0.64 -0.17,-0.47 -0.31,0.28 -0.46,-0.25 -0.92,-1.8 -0.02,-0.74 0,0 -0.15,-1.56 0.29,-0.19 0.24,1.87 0.39,0.17 0.5,-0.94 0.79,0.91 0.13,0.78 0.48,-0.08 -0.05,0.81 0.34,0.35 2.93,-1.7 1.28,-1.17 2,-0.58 0.11,-2.49 0.47,-0.87 4.09,-0.98 2.06,-3.86 1.86,-0.55 -0.29,-2.49 3.12,-3.88 0.31,-1.78 0,0 4.88,-0.22 0.68,0.38 0.12,2.9 0.62,0.24 1.22,-0.26 1.05,2.33 -0.4,2.26 0.5,0.82 -0.5,2.01 0.33,1.09 1.41,0.91 0.07,1.88 3.11,5.02 1.22,4.68 3.81,1.13 3.19,0.31 2.36,0.7 2.89,4.88 0.59,3.23 2.14,2.79 0,0 0.06,0.67 0.73,-0.16 0.16,0.73 -1.2,0.77 -1.73,2.21 0.6,0.72 0.47,-0.08 0.07,0.68 -1.33,3.21 -0.08,5.12 -0.51,1.97 1,0.61 0.48,1.82 0.75,0.65 1.2,2.37 -0.33,1.45 1.2,0.95 0.53,-0.44 2.3,0.23 0.9,2.61 1.32,0.3 1.21,4.47 0.57,0.2 0.57,-0.42 0.21,0.25 0.81,4.12 0.98,1.41 0.59,1.95 0.83,-0.17 0.7,0.49 0.69,-0.55 1.33,-0.19 2.79,-2.13 0.67,-1.04 4.04,1.18 1.45,0.96 0.9,1.37 1.08,0.26 0.15,1.07 1.74,2.27 0.08,2.2 1.03,0.94 -0.25,0.9 0.79,2.59 0.71,1.07 0.63,2.94 1.08,1.21 0.91,1.98 1.72,1.65 0.44,2.81 1.05,2.92 -0.27,0.93 0.74,1.74 1.22,1.33 0.13,2.26 0.6,1.28 2.04,0.14 0.85,-0.6 0.6,0.07 2.12,2.18 0,0 -0.83,0.61 -0.56,3.41 -1.69,2.1 -0.33,1.02 0.45,1.3 1.31,1.3 0.21,1.33 0.4,0.36 0.23,2.04 -0.36,0.89 -3.46,-0.57 -2.1,-1.24 0,0 0.23,-1.02 -1.5,-1.63 0.25,-0.59 0.74,-0.35 -0.69,-0.57 -0.54,0.7 0.52,1.9 0.54,0.51 -0.56,1.68 0.52,1.68 -0.37,0.56 -3.72,-5.81 -2.97,-2.87 -1.78,-1.1 -4.22,-5.17 -4.67,-4.58 0.44,-0.33 1.15,1.27 0.08,-0.33 -1.45,-1.15 -0.54,0.21 -0.19,0.56 -0.36,-0.33 0.1,-0.69 -0.7,-0.5 -0.92,-1.65 0.31,-0.41 -1.25,-1.96 -2.55,-2.5 0.08,-0.35 -1.39,-1.18 -0.64,-1.1 -2.56,-1.94 0.41,-0.5 -2.2,-3.4 -0.23,-1.22 -7.52,-6.96 0.92,0.2 0.31,-0.36 -0.45,-0.3 0.11,-0.8 -0.56,-0.11 -0.18,0.49 -0.54,0.21 -3.82,-3.04 -1.4,-0.34 -5.04,-3.96 -4.64,-2.85 0.23,-0.56 0.62,0.69 3.14,1.7 0.45,0.74 1,0.13 0.51,0.81 0.62,-0.07 0.75,1.11 0.5,-0.13 -0.54,-0.59 0.07,-0.7 0.71,-0.22 0.04,-0.4 -0.29,-1.18 -1.48,-2.02 -1.28,0.03 0.11,1.39 -1.12,0.24 -1.09,-1.43 -0.6,0.53 -1.04,-0.19 -0.18,-0.93 -1.63,-1.49 -2.1,-0.87 -0.25,-0.46 -0.58,0.4 -1.08,-0.5 -0.79,-1.06 0.07,-1.15 -1.39,-1.6 0.62,-0.28 1.21,1.17 0.69,-1.18 -0.6,-0.45 -0.17,-0.77 -0.29,0.03 0.08,-0.85 0.47,-0.52 -0.71,-0.29 -0.04,-0.5 0.52,-0.64 0.08,-0.78 -1.03,-0.68 -0.28,-1.88 -0.51,-0.7 -1.55,-1.02 -0.02,0.52 -0.88,-0.16 -1.89,-1.7 -0.31,-0.82 -1.64,0 0.11,-1.13 -1.25,-0.58 -0.56,0.84 0.28,0.65 -0.35,0.58 -1.92,-2.15 -5.4,-2.7 0.52,-0.63 -0.38,-0.49 -1.32,0.35 -1.52,-2.32 0.68,-1.33 -0.44,-0.63 -1.19,0.43 -0.4,-0.96 -1.27,-0.09 -0.41,0.23 0.24,0.6 -0.24,0.71 0.48,0.27 -0.68,1.09 -0.5,0.23 -0.06,-0.59 -0.38,-0.15 0.21,-0.44 -0.81,-0.31 -1.19,0.2 0.28,0.81 -0.81,0.23 -1.83,-2.13 1.17,-0.17 0.42,-0.44 0.05,-0.8 0.93,0.87 0.89,-0.43 0.23,-0.99 0.68,0.15 0.46,-0.49 -0.34,-1.31 -1.1,-0.04 -1.02,0.64 -0.87,1.83 -1.57,-0.48 -0.16,0.52 -0.63,-0.11 -0.37,-1.12 -1.72,-1.57 -0.47,0.45 1.6,1.16 0.08,0.75 -1.6,-1.01 -2.87,-0.52 -0.18,-0.33 2.04,0.27 0.07,-1.96 -0.5,-0.04 -1.61,-1.32 -1.08,0.28 -0.37,-0.69 0.17,-2.66 0.24,-0.09 -0.35,-1.08 -0.45,-0.16 -0.04,-0.67 0.7,-2.13 0.35,0.04 0.02,-0.83 2.14,-3.42 0.7,-2.41 1.04,-1.11 0.25,0.11 -0.21,0.99 -0.86,0.28 -0.59,2.71 0.42,0.55 0.31,-0.17 0.38,-0.98 -0.34,-0.58 0.17,-0.27 0.34,0.51 0.81,-1.72 0.18,-1.67 z" title="Sinaloa" id="MX-SIN" />
                    <path d="m 230.32786,183.56244 -1.03,-0.12 0,0 0.1,-0.52 0.48,0 0.45,0.64 z m -1.68,-0.71 0.1,-1.54 0.22,0.97 -0.32,0.57 z m -34.04,-28.51 0.63,0.87 -0.19,0.34 1.34,0.61 -0.29,0.39 -1.5,-0.91 0.01,-1.3 z m -42.07,-52.81 0.48,1.56 -0.27,1.14 0.96,1.2 1.04,2.6 -0.42,0.37 -0.1,1.38 -1.54,3.96 -0.05,1.02 -0.74,0.63 -0.48,-0.47 -0.77,0.11 -1.21,-1.14 -1.34,-0.07 -0.31,-0.56 -0.52,-0.01 -0.13,-0.37 -2.03,-1.13 1.66,-1.22 0.59,-0.87 -0.39,-3.25 0.71,-2.99 0.59,-0.87 1.34,0.23 0.99,-0.9 1.94,-0.35 z m -58.919998,-72.960002 0.83,0.13 -0.05,0.64 -1.46,-0.41 -0.02,-0.35 0.7,0 z m -3.73,-1.81 1,0.48 0.71,1.44 1.33,0.95 0.53,1.09 -0.28,0.68 -0.8,-0.65 -0.7,0.08 -1.04,-0.54 -0.88,-0.91 -0.39,-0.99 0.16,-1.44 0.36,-0.19 z m 150.529998,14.22 1.05,1.04 -0.94,1.28 0.52,1.91 1.64,2.84 0.24,1.6 -0.5,1.28 0.02,1.81 -1.57,0.07 -0.04,0.62 2.73,2.65 0.08,2.42 1.04,0.92 -0.67,1.61 0.11,0.81 1.1,1.47 -0.06,1.19 1.93,6.15 -0.28,1.81 -0.85,0.53 0.16,0.99 1.45,1.32 0,1.11 -1.27,2.57 -0.59,4.93 0.34,1 0.57,0.03 0.75,0.96 0.67,6.22 -0.01,2.6 -0.8,0.95 -0.16,0.9 0.25,5.670002 -0.29,0.51 -1.38,0.68 -0.1,2.69 -1.49,1.27 0.46,2.54 -0.85,1.28 0.8,2.65 -1.48,2.62 -0.19,1.04 0.83,1.95 -0.42,2.9 1.55,1.81 2.25,0.86 -0.59,1.19 -0.93,0.1 -0.97,1.22 -1.15,0.12 -1.4,1.05 -0.51,0.03 -1.77,-1.31 -0.77,-0.14 -1.45,0.85 -2.53,0.49 -1.04,1.39 0.19,0.6 1.56,1.08 -0.59,2.75 0.39,0.7 1.83,0.74 2.09,2.98 0.38,1.66 -0.7,2.45 0.52,0.65 2.82,1.7 0.63,2.09 0.97,1.42 1.63,4.07 0.04,1.72 -1.25,3.14 0.47,3.45 -0.73,0.42 -0.02,0.46 3.54,1.84 2.02,-0.62 1.77,0.39 0,0 -0.31,1.78 -3.12,3.88 0.29,2.49 -1.86,0.55 -2.06,3.86 -4.09,0.98 -0.47,0.87 -0.11,2.49 -2,0.58 -1.28,1.17 -2.93,1.7 -0.34,-0.35 0.05,-0.81 -0.48,0.08 -0.13,-0.78 -0.79,-0.91 -0.5,0.94 -0.39,-0.17 -0.24,-1.87 -0.29,0.19 0.15,1.56 0,0 -0.42,0.01 -0.24,0.54 -1.26,-1.71 0.12,-1.01 -1.35,-2.45 -2.29,-2.56 -1.45,-1.02 -0.85,-0.13 1.05,0.16 0.05,-0.36 -0.4,-0.93 -0.57,0.04 -0.36,-0.75 -0.64,0.2 -0.07,-0.57 -0.39,-0.09 -0.73,1.06 0.42,0.75 -2.67,-0.07 -0.5,0.65 -2.54,-1 -1.19,-1.04 -0.93,-1.27 0.01,-0.96 -1.03,-2.8 -1.35,-1.86 0.19,-0.15 0.97,1.35 0.18,-0.86 -0.63,-0.42 0.25,-0.38 -0.31,-1.63 -1.73,-1.38 -0.3,0.36 -0.42,-0.41 -1.08,0.96 -1.03,-0.68 -4.98,-1.24 -3.05,-3.03 -1.39,-0.7 0.31,-0.23 -0.41,-0.92 0.08,-1.29 -0.63,-0.39 -0.52,0.37 -0.7,-0.53 -0.15,-1.27 -0.39,-0.05 -0.4,-0.75 0.25,-2.06 -0.62,-1.18 0.23,-0.39 -0.81,-0.79 0.11,-0.77 1.37,-0.98 -0.75,-0.12 -0.24,0.79 0.17,-1.54 0.69,-0.35 -0.69,-0.12 -0.29,-1.11 0.48,-0.37 -0.15,-0.75 0.41,-0.77 0.86,0.18 0.29,-0.52 -0.99,-0.79 -0.82,-0.19 -0.54,0.48 -0.63,-0.53 -3.87,-0.91 -0.33,-0.84 -1.64,0.87 0.56,0.91 -0.19,1.05 -1.22,-0.44 -0.97,-1.01 0.4,-0.56 -0.58,-0.15 -0.02,-0.71 -1.34,-0.27 -1.32,0.75 -1.49,-1.36 -0.98,-0.33 -0.88,-1.28 -0.97,-0.3 -0.69,-0.84 -0.19,-0.87 -1.06,-1.24 -0.08,-0.87 -0.69,-0.9 -0.39,0.08 -0.46,-1.58 -0.4,0 -1.16,-1.13 -0.1,-1.37 -0.87,-0.75 -5.45,-2.01 -0.16,-1.14 -1.16,-2.62 -4.01,-3.66 -0.48,-1.25 0.57,-0.07 0.51,-0.58 0.53,1.17 0.64,-0.41 -0.02,-0.85 -0.63,-0.49 -0.53,0.38 -0.48,-0.74 -0.27,0.21 -1.28,-1.02 -1.21,-0.29 -0.44,-1.13 -0.97,-0.77 -0.27,-0.74 -1.91,-0.55 0.56,-0.73 -0.42,-0.83 -0.05,-1.32 -0.34,-0.19 0.46,-0.98 -0.47,-1.12 -0.4,-0.14 -0.05,-0.62 -0.69,-0.07 0.53,-1.81 -0.62,-1.810002 -0.64,-0.59 -1.32,0.01 -0.82,0.4 -1.66,-0.87 -0.21,-1.1 1,-2.8 -0.3,-0.57 -0.99,-0.54 -0.16,-1.18 -1,-0.83 -1.67,-2.84 -0.93,-0.65 -0.65,-1.94 -1.14,-1.61 -0.33,-1.6 -1.19,-0.57 -0.64,0.18 -0.24,-0.33 0.35,-2.46 -0.62,-1.47 0.13,-3.46 -0.51,-1.41 -1.95,-1.89 -0.11,-3.05 -0.97,-2 -2.41,-2.05 -2.54,-4.66 -0.91,-3.44 0.73,-2.28 0.06,-3.03 0.3,0.08 0.67,-1.01 0.08,-1.12 -0.5,-2.75 -0.31,0.11 -0.19,-0.79 -0.47,0.03 -2.31,-1.36 -0.67,-1.1 -0.82,0.73 -3.88,-0.94 -0.24,-0.35 -0.31,0.24 -2.58,-0.49 -0.1,-0.48 -0.56,-0.27 -1.29,-0.16 0.23,-1.47 -0.57,-1.59 0.06,-0.83 -0.54,-0.92 -1.19,-0.97 -4.33,-1.85 -0.13,-0.59 -0.38,0.14 -0.22,-0.52 -0.38,0.58 -0.79,-0.55 -0.58,0.69 -0.18,0.62 0.35,-0.07 0.21,0.52 -0.71,0.95 -0.71,-0.08 -0.41,1.19 -2.85,-0.1 -3.13,-1.43 -1.44,-1.55 -2.909998,-1.6 -0.44,-0.59 -0.75,-0.16 -2.41,-2.33 -2.15,-0.14 -1.28,-0.58 -0.98,-1.17 -0.82,0 0,0 -3.82,-2.76 -0.92,-0.13 -0.96,-0.95 0.6,-0.98 -0.24,-0.98 0.42,-2.67 -0.29,-1.14 0.62,-1.83 -1.4,-1.99 1.81,-2.43 0.05,-1.34 0.47,-0.48 0.6,-2.05 1.34,-0.01 0.47,0.4 0.85,-0.51 0,0 93.649998,34.22 57.68,-0.13 z" title="Sonora" id="MX-SON" />
                    <g class="selected">
                        <path d="m 620.40786,397.20244 -4.06,1.46 -0.39,0.56 -1.89,0.16 6.34,-2.18 z m 28.1,-6.87 1.14,3.72 0.63,0.91 1.44,1 0.99,0.05 0.69,1.06 0.53,-0.13 0.08,-0.42 0.36,0.16 1.11,1.42 -0.18,1.97 0.45,0.32 1.08,2.59 1.22,1.83 3.47,2.33 0.87,1.43 1.31,0.66 1.5,-0.15 2.21,1.12 1.29,-0.64 1.68,-0.11 0.3,-0.72 -0.34,-1.82 0.3,-1.3 2.79,-0.13 3.65,0.8 1.64,1.55 1.56,0.66 0.77,0.9 0.68,-0.42 3.98,1.58 -0.02,1.64 0,0 -0.21,14.5 -10.56,0.18 0,0 0.53,-1.03 0.76,-0.28 -1.1,-1.79 -1.31,-0.37 -0.19,-0.83 -4.34,-1.2 0.75,-2.66 -1.27,-3.3 -2.56,-1.26 -0.05,-2.01 -1.06,-1.36 -1.21,0.28 -1.19,-0.18 -0.59,0.44 -0.56,-0.3 0.12,-0.59 -1.45,-0.37 -0.71,1.84 -1.95,0.03 -1.77,-0.48 0.04,0.44 -0.43,-0.08 -0.12,0.37 0.41,1.75 -0.39,0.78 -3.29,1.19 -0.57,0.83 -5.83,4.27 -2.42,2.25 -1.91,0.84 -0.81,-0.31 -0.66,-0.87 -0.04,-0.66 -1.21,-1.94 -0.54,-0.2 -0.44,0.35 -1.25,0.06 -0.36,-0.33 0.3,-1.87 -2.07,-2.18 -0.38,-0.93 0.14,-0.58 1.42,-2.12 0.35,-1.69 -2.79,0.09 -0.77,-0.35 -1.39,-1.69 -2.14,-0.85 -0.54,0.61 -1.66,0.28 -0.75,7.08 -0.59,1.16 -1.2,0.79 -1.39,1.87 -0.06,1.61 -2.53,3.17 0,0 -1.93,-0.76 -0.38,-2.2 0.38,-1 -0.17,-1.25 -1.11,-3.08 -0.44,-0.48 -2.51,-0.97 -0.42,-0.58 -1.16,-0.04 -1.44,-2.03 -1.39,-0.39 -1.06,-0.96 0.02,-3.02 -0.56,-1.47 -0.12,-2.83 -0.51,-0.4 0.86,-0.87 0.92,0.51 0.24,-0.29 -2.27,-0.39 1.89,-0.89 0,0 4.46,-1.51 0.14,1.24 2.66,-0.47 0.58,-0.41 -0.29,-0.97 0.71,-0.41 1.04,-0.14 0.23,0.44 0.75,0.06 1.31,-0.24 0.6,-0.63 -0.12,-1.19 3.28,-0.8 0.25,0.68 0.85,-0.87 5.38,-0.23 0.88,0.41 -0.67,0.56 0.07,0.89 0.8,0.04 0.8,-0.44 0.07,0.28 0.67,0 0.38,-0.56 -1.83,-0.75 1.08,-0.46 2.89,0.28 2.22,-0.3 3.01,-1.63 2.29,-2.75 5.28,-0.99 z" title="Tabasco" id="MX-TAB" />
                    </g>
                    <path d="m 517.14786,239.79244 -0.24,4.46 -0.28,0.09 0.52,-4.55 z m 6.77,-26.4 0.46,0.16 -2.84,6.97 -0.33,-1.37 0.25,-0.9 0.58,-0.5 0.14,-1.01 1.74,-3.35 z m -8.7,81.32 -2,1.4 -1.52,-1.64 -0.42,-1.14 -1.2,-1.05 -1.35,-0.17 -1.57,-1.2 -1.15,-0.39 -0.72,-1.3 -2.54,0.29 -0.4,0.7 0.21,0.69 -1.98,0.44 -0.15,-0.6 -0.41,0.18 -0.73,-0.58 -1.11,-0.22 -4.16,0.25 -1.78,1.01 0,0 -0.96,-0.17 -2.14,0.44 -1.89,-1.18 -0.71,0.79 -2.32,0.08 -2,-0.39 -1.79,0.22 -2.15,-2.85 -0.92,-2.52 -0.83,-1.17 -1.38,-1.08 -1.69,-0.56 -0.81,-1.29 -0.62,-0.33 -0.97,0.56 0.05,1.03 -0.65,0.43 -2.2,-0.73 -3.26,-0.26 -4.21,-1.37 -1.09,-0.93 -0.19,-0.69 -0.23,-2.98 0.34,-3.63 -0.48,-1.15 -1.03,-0.78 -0.15,-2.05 -0.89,-1.06 0,0 0.42,-0.77 -0.54,-1.35 0.8,-0.68 3.1,0.38 0.21,-1.77 -0.39,-2.84 0.33,-0.96 1.47,-1.77 0.67,-2.81 2.31,-1.23 2.55,0.68 0.71,-0.14 1.75,-0.97 0.34,-1.51 0.36,-0.1 2.25,0.45 -0.76,-2.34 -1.37,-0.78 -1.4,-3.63 -1.76,-2.09 0.86,-6.77 -1.26,-2.63 -1.84,0.09 -0.22,-0.28 0.69,-2.1 2,-1.35 2.87,-1.27 1.31,-2.13 1.75,0.11 1.12,-1.6 1.15,-0.48 0.36,-1.03 0.38,-0.13 0.39,1.52 1.11,-0.45 0.47,-1.6 0.92,-0.69 0.91,-0.09 0.38,-1.67 -0.67,-0.36 -0.6,-2.24 0.25,-0.4 1.26,-0.41 1.46,-1.97 0.51,0.04 0.6,1.17 2.8,0.23 0.75,-2.03 0.99,-1.14 4.38,-0.85 0.99,-1.13 0.77,-0.08 1.37,-1.44 1.25,-0.63 0.59,-1.37 1.54,-1.57 -0.02,-0.52 -0.4,-0.27 -2,-0.63 -0.99,-0.83 0.41,-0.8 -0.69,-1.57 0.21,-2.07 0.47,-0.77 -0.59,-1.52 0.3,-3.34 -0.8,-1.02 -0.13,-1.47 -0.69,-0.44 -3.39,0.68 -1.06,-0.15 -2.66,1.52 -0.96,-0.54 -1.19,-2.34 -0.65,-0.59 -3.28,-0.46 -0.38,-0.66 -0.82,-0.46 0.9,-0.33 -0.76,-1.34 0.36,-0.72 -0.18,-0.6 -0.63,-0.05 -0.75,0.74 -0.69,-0.09 -1.17,-1.62 0.06,-0.99 -1.42,0.12 -1.81,-2.48 -1.25,-4.14 -1.88,-0.23 -0.85,-1.9 -0.67,-0.4 -0.88,0.38 -0.8,-0.82 0.23,-3.22 0.47,-1.29 -0.52,-0.78 -1.26,-0.66 -1.46,0.05 -0.13,-1.12 0.81,-2.39 1.64,-1.39 -0.42,-3.19 -1.15,-1.14 -0.24,-1.38 0.22,-2.46 -1.27,-0.87 1.17,-1.42 -0.05,-0.88 -4,-0.19 -0.6,-0.45 0.35,-1.07 -0.27,-0.79 0.62,-0.69 2.78,-0.8 1.28,-1.72 0.65,-0.34 0,0 0.18,0.29 1.26,0 0.11,0.71 0.7,0.18 0.18,-0.39 0.75,0 0.7,1.05 0.34,-0.27 0.36,0.2 0.71,1.22 -0.38,1.72 0.75,0 0.44,0.53 -0.34,2.9 -0.99,1.99 1.04,0.14 -0.13,0.93 0.27,0.28 0.74,-0.19 0.36,0.55 0.39,1.93 -0.35,2.01 0.31,0.46 -0.52,0.66 0.16,1.22 0.76,0.16 0.83,1.21 -0.29,0.39 0.46,0.73 1.06,0.31 0.42,1.5 0.77,0.27 1.02,2.08 -0.06,0.78 0.88,1.05 0.47,2.36 0.42,0.22 0.1,2.37 1.22,0.55 0.71,1.17 -0.47,1.26 0.97,1.02 0.81,-0.42 0.8,0.55 0.87,-0.21 0.48,0.13 0.05,0.6 0.75,-0.11 0.74,0.58 0.36,-0.28 1.93,-0.01 0.33,0.89 1.29,0.26 1.52,2.03 2.38,-0.11 0,0.58 0.31,-0.11 0.18,0.44 0.5,-0.48 0.94,0.46 -0.05,0.42 1.6,-0.35 0.01,0.66 1.35,1.21 1.32,-0.12 0.04,0.76 0.75,0.8 1.49,0.86 0.79,0.07 0.36,0.44 0.54,-0.52 0.7,0.6 1.73,-0.51 0.37,0.72 0.67,0.03 0.1,-0.51 1.26,-0.17 0.35,0.36 2.62,-0.27 0.7,0.42 0.74,-0.35 0.39,0.23 -0.15,0.48 0.83,0.24 2.89,-0.01 1.11,1.91 0.45,-0.13 0.5,0.98 0.39,-0.27 0.73,1.35 1.9,0.57 -0.19,0.31 0.64,0.43 1.51,-0.27 -0.11,-1.67 0.7,-0.59 0.48,0.32 0.18,-0.35 0.93,-0.04 0.07,-0.51 1.62,-0.27 1.37,-0.05 0.35,0.28 -0.33,4.95 -0.98,3.8 -5.65,11.07 -0.79,-0.25 1.81,-3.11 -0.71,-0.57 0.46,-0.61 -0.41,-0.59 -1.12,0.05 0.16,-0.55 -1.54,-0.16 -0.62,-0.79 -1,1.08 0.73,-0.13 0.69,1.12 0.22,-0.19 0.33,1.1 -0.31,0.25 -0.24,-0.53 -0.63,0.2 -0.38,0.77 0.35,0.19 0.31,1.24 -0.77,0.28 -0.3,-1.37 -0.83,0.61 -0.36,-0.59 -0.01,-1.12 -1.79,-0.24 0.06,0.44 -0.87,0.81 0.51,0.81 -0.31,0.94 -0.52,0.08 -0.89,-0.6 -0.21,0.56 0.56,0.09 0.65,0.89 0.31,-0.21 0.58,0.32 -0.19,0.78 0.89,0.66 -0.77,1.06 0.06,1.31 -1.34,2.92 0.4,0.45 0.74,-0.03 0.4,0.74 0.86,0.2 -1.51,1.13 -0.23,0.99 -0.42,0.07 -0.05,0.69 0.6,0.36 0.13,0.78 -0.54,2.97 0.41,0.11 0.33,0.83 -0.87,4.23 -0.51,0.04 -0.28,-0.54 0.13,-1.43 -0.97,0.28 -0.87,-0.65 0.23,0.93 -0.69,0.44 0.41,0.56 -0.3,1.03 0.92,2.21 0.38,0.18 -0.22,0.7 0.6,-0.15 0.12,-1.64 0.76,-0.7 0.24,3.22 -0.68,6.41 -0.35,0.47 -0.23,-0.08 0.26,-0.56 -0.59,-0.08 -0.05,0.5 0.89,0.43 0.04,7.06 0.88,0.46 0.04,0.41 -0.44,0.32 -0.35,2.07 0.18,0.66 0.35,0.09 0.1,-1.98 -0.25,0.04 -0.08,-0.71 0.53,-0.31 -0.94,9.63 0.3,11.01 -0.21,3.59 -0.47,0.65 -0.38,1.92 -1.25,1.51 -0.98,2.08 -0.17,1.21 0.98,0.73 0.05,2.82 -0.39,-0.03 -0.01,0.99 0.56,1.95 0.45,-0.13 1.17,2.73 -0.16,0.36 z" title="Tamaulipas" id="MX-TAM" />
                    <path d="m 505.90786,362.68244 2.06,0.38 0.61,-0.24 1.55,-1.83 0.49,0.07 0.71,1.06 4.1,3.41 -0.13,1.73 0.84,0.17 1.53,-0.5 0.59,0.38 1.21,1.24 0.31,1.17 0.67,0.6 0.94,0.2 -0.28,1.15 -0.82,0.55 -2.68,0.51 -0.84,-0.32 -1.4,2.33 -1.24,0.84 -0.77,0.05 -1.46,-0.99 -0.57,0.04 -3.07,2.68 -0.86,0.14 -4.06,-2.24 -1.18,-1.31 -0.54,-1.38 -1.32,-1.38 -3.03,-2.31 -1.16,-0.37 -0.7,0.29 0,0 -0.53,-0.6 -0.76,0.25 -0.96,-1.83 0,0 5.01,-1.71 1,0.23 2.09,-0.28 1.45,-1.21 0.82,-1.47 z" title="Tlaxcala" id="MX-TLA" />
                    <path d="m 524.98786,315.32244 -0.73,2.05 -0.82,0.98 -0.12,-1.51 1.67,-1.52 z m -7.43,-10.52 1.69,3.57 -0.48,-0.14 -0.97,-1.58 -0.24,-1.85 z m 2.09,1.04 1.9,2.41 5.33,4.9 -0.65,3.08 -1.71,4.14 -0.52,0.45 -0.18,-2.06 1.77,-3.43 -0.13,-1.33 -1.75,-1.65 -1.29,-2 -2.83,-3.13 -1.48,-3.68 -0.47,0.12 0.08,-0.8 1.93,2.98 z m -27.41,-14.46 1.78,-1.01 4.16,-0.25 1.11,0.22 0.73,0.58 0.41,-0.18 0.15,0.6 1.98,-0.44 -0.21,-0.69 0.4,-0.7 2.54,-0.29 0.72,1.3 1.15,0.39 1.57,1.2 1.35,0.17 1.2,1.05 0.42,1.14 1.52,1.64 2,-1.4 0,0 0.63,5.37 1.66,4.54 -0.12,1.02 -0.4,0.22 0.62,1.35 0.43,3.26 0.83,0.93 0.08,1.11 1.85,3.26 1.51,-0.34 0.52,0.75 -0.38,1.3 0.5,1.74 0.99,0.8 0.07,1.12 0.51,0.17 0.74,2.9 4.69,9.94 0.64,2.94 0.79,1.36 4.18,4.12 0.71,1.22 5.91,6.38 3.46,4.36 0.64,1.38 2.61,2.89 1.15,3.28 0.11,2 0.64,1.06 -0.1,1.11 1.52,2.13 -0.18,1.8 0.67,2.64 1.72,1.32 1.22,0.46 0.17,0.7 0.99,0.45 0.96,1.36 -0.31,0.65 0.21,0.9 0.76,0.66 2.41,0.34 0.3,2.52 0.67,1.77 0.86,0.93 3.52,1.69 0.01,0.72 -2.04,-1.35 -0.97,-0.08 -0.06,0.3 0.47,0.15 0,0.65 0.75,0.32 0.31,0.61 -0.12,0.24 -0.67,-0.33 -0.34,0.29 0.17,0.5 1.17,-0.13 -0.07,-0.66 0.91,-0.27 0.63,0.3 0.22,-1.19 1.8,1.17 2.71,0.74 9.53,0.24 3,2.35 0.58,1.17 2.21,0.61 3.33,0.3 0.51,0.43 0.57,1.84 0.76,0.77 0.13,0.67 2.8,2.79 0.56,2.39 2.67,1.28 3.79,-0.39 7.27,-1.8 0,0 -1.89,0.89 2.27,0.39 -0.24,0.29 -0.92,-0.51 -0.86,0.87 0.51,0.4 0.12,2.83 0.56,1.47 -0.02,3.02 1.06,0.96 1.39,0.39 1.44,2.03 1.16,0.04 0.42,0.58 2.51,0.97 0.44,0.48 1.11,3.08 0.17,1.25 -0.38,1 0.38,2.2 1.93,0.76 0,0 -3.72,2.89 -1.95,0.86 -0.94,1.13 0,0 -28.57,-1.75 0.33,-1.37 -0.64,-0.57 0.01,-0.99 -3.45,-2.78 -3.36,-4.41 0.23,-1.13 1.49,-0.66 0.18,-0.68 -1.37,-0.84 -0.42,-0.06 -1.21,1.08 -3.66,0.92 -3.01,2.11 -2.87,0.16 -1.26,0.66 -1.96,-0.58 -2.18,-4.43 0.17,-1.17 -0.34,-0.72 0.73,-0.68 0.99,-2.58 0.81,-1.11 0.22,-1.25 -1,-3.79 -0.52,-0.44 -2.03,-0.48 -1.15,0.19 -1.43,-0.52 -2.47,0.79 -0.7,-0.35 0.53,-0.9 -1.38,-0.09 -1.02,-1.89 -1.39,-0.81 -1.31,0.38 -1.96,-1.56 -0.64,-0.9 -0.6,-2.74 0.58,-1.27 -1,-0.35 -1.15,-1.15 -0.65,0.61 -0.05,0.86 0.5,0.74 -0.3,0.96 -1.17,2.18 0,0 -1.85,-2.17 -2.58,-0.82 -1.39,0.8 -0.96,1.05 -1.43,-0.1 -1.86,-3.13 0.17,-0.75 -3.81,-1.12 -0.85,-0.72 -0.36,-1.12 0,-2.98 1.86,-2.41 0.07,-0.55 -0.52,-6.12 0.18,-0.9 4.82,0.22 0.53,-0.12 0.16,-0.7 -0.11,-1.29 -0.47,-0.59 -2.93,-1.27 -3.63,-0.82 -1.44,-0.99 -0.34,-0.42 0.56,-1.38 -1.38,-2.98 0.24,-0.7 0.57,-0.24 0.98,-2.63 0.67,-0.87 0.34,-0.97 -0.31,-0.98 0.19,-0.81 1.66,-4.28 2.15,-2.98 -0.07,-0.51 -7.06,-2.49 -0.82,0.67 -1.22,1.95 -1.61,1.4 -0.59,-0.19 -0.86,-1.78 -2.04,0.22 -0.68,-0.55 -0.46,-2.37 -0.06,-4.01 1.17,-0.76 1.61,0.92 1.5,-2.48 -0.48,-1.12 -2.22,-1.22 -0.81,-0.83 -0.16,-0.85 0.36,-0.83 -0.81,-0.6 -0.87,0.19 -0.16,-0.3 1.23,-0.76 0.01,-1.79 -2.03,0.32 -1.19,-0.39 -0.27,1.02 -0.88,0.94 -0.08,0.84 -0.97,0.75 -0.7,2.56 0,0 -1.45,-0.95 -0.83,0.36 -2.14,2.33 -1.6,0.73 -1.89,2.23 -2.48,1.15 -1.33,1.55 -0.5,0.22 -0.88,-1.08 -1.17,-2.59 0.25,-2.08 0.58,-1.3 0.33,-3.66 0.65,-0.54 0.31,-0.86 2.39,-2.16 0.46,0 1.34,1.39 1.45,-0.23 0.25,-0.63 -0.56,-1.05 0.63,-2.21 1.86,-2.46 -2.53,-3.42 -2.03,-0.62 -0.86,0.89 -1.32,-0.06 -1.26,-0.66 -1.83,-1.71 0.3,-2.66 -0.3,-0.75 -0.85,-0.17 0,0 -0.13,-3.35 -1.33,-0.22 -0.89,-3.31 0.21,-0.85 1.26,0 -0.05,-0.7 1.05,0.05 0.29,-0.82 1.71,-0.79 -1.19,-1.11 -0.04,-0.48 -0.45,0.12 -0.59,-0.73 0.13,-1.23 -0.35,-0.26 0.58,-0.53 -1.14,0 -0.38,-0.38 0.27,-0.42 2.18,0.26 0.41,-0.27 0.25,-0.67 -0.31,-2.55 1.06,-0.71 2.53,-0.05 -1.2,-3.56 -0.65,-0.73 -4.44,-1.38 -2.36,0.04 -0.53,-0.26 -0.23,-0.95 z" title="Veracruz" id="MX-VER" />
                    <g class="selected">
                        <path d="m 771.88786,315.18244 0.33,5.3 -0.14,0.76 -0.88,0.87 -0.47,3.16 1.33,3.2 -0.1,0.97 -1.14,2.05 -0.49,2.45 -0.86,1.08 -0.26,1.58 -0.86,1.17 -1.72,0.82 -3.13,2.7 -3.11,1.84 -1.51,-0.11 -1.53,0.44 -1.14,-1 -1.17,0.56 -1.5,2.76 0.25,2.19 -0.36,0.05 -0.93,-1.68 -1.01,-0.01 -0.5,0.42 -0.79,2.37 -0.46,0.48 -5.51,1.98 -1.78,1.04 -1.88,1.6 0.27,0.69 -0.3,0.32 -1.08,-0.92 -1.92,1.78 -1.19,0.41 -2.43,0.03 -2.43,1.05 -1.39,1.39 -3.54,0.17 -0.56,0.49 0.17,0.87 -0.32,1.45 -0.93,2.01 0,0 -0.44,-0.46 -0.79,-3.44 -3.16,-3.58 -1.18,-2.49 -3.85,-2.1 -1.99,-4.46 -1.82,-1.16 -0.57,-1.04 0.11,-0.91 -1.03,-1.76 -0.42,-0.28 -0.79,0.73 -0.4,1.01 -0.48,0.09 -0.94,-0.98 -1.12,0.34 -0.44,-0.18 -0.97,-2.01 -4.13,-0.52 0.16,-7.29 0,0 0.07,-1.38 0.61,-0.59 0.72,-1.71 -0.15,-0.52 -0.33,0.21 -1.11,3.43 -0.56,0.54 0.3,-1.55 1.02,-2.96 1.05,-1.38 5.6,-3.54 2.5,-0.57 2.08,-1.28 0.92,-0.01 0.26,-0.45 0.98,-0.31 2.9,-0.67 0.06,0.4 0.57,-0.01 -0.12,-0.29 0.65,-0.36 4,-0.73 16.6,-2.2 5.03,-1.91 0.56,-1.4 5.5,-1.17 3.23,0.26 1.33,-0.37 2.26,-1.47 2.09,0.47 -0.17,0.45 1.73,0.63 3.59,0.25 0.5,0.81 1.01,0.57 2.17,0.09 1.9,0.54 0.42,-0.41 -3.78,-0.93 z" title="Yucatán" id="MX-YUC" />
                    </g>
                    <path d="m 391.19786,219.24244 0.02,-1.63 0.63,-0.53 5.4,-1.07 9.4,0.61 2.54,1.71 2.5,0.97 1.96,1.66 2.16,3.07 1.47,-0.41 1.16,0.32 0.62,3.56 2.83,0.02 0.92,-0.88 2.27,-0.51 2.96,0.37 1.25,0.82 1.92,3.76 1.37,1.3 2.09,0.81 1.44,-0.37 0.18,-0.78 0.75,-0.32 2.12,0.47 0,0 -0.55,0.42 0,0 -0.81,0.44 -0.36,1.78 -1.19,1 -0.69,1.72 -0.98,0.5 -1.58,-0.07 -0.67,0.52 -0.21,1.49 -0.92,1.78 -1.36,0.88 -1.87,0.48 -0.64,0.62 -0.83,3.45 1.01,1.18 -1.18,2.96 -1.1,1.54 -4.74,1.59 -3.48,5.14 -3.56,2.13 -2.28,0.84 -0.85,1.03 -0.52,1.44 -2.94,0.58 -2.32,-0.93 -0.66,0.2 -0.87,1.67 0.62,0.81 -0.51,1.69 1.03,3.02 -1.26,3.99 -0.2,1.26 0.25,1.51 0.94,1 4.18,2.53 1.11,1.32 2.31,0.34 1.07,0.58 0.92,2 1.48,2.02 2.08,0.05 2.43,-0.73 4.45,-4.61 1.46,-0.7 0.71,-0.05 1.97,2.58 -0.19,1.65 -3.3,7.3 1.38,3.86 -0.36,1.64 -0.39,-0.03 -0.13,0.55 0.26,0.18 -0.35,0.96 -1.93,3.97 0,0 -0.81,0.94 -0.97,-0.63 0,0 -0.28,-0.39 -2.09,-0.75 -2.67,-2.35 -2.13,-1.14 -3.54,-0.91 0,0 -1.14,-2.04 -0.59,-2.44 -4.44,-2.63 -1.33,-1.34 -0.77,-1.39 -0.73,0.17 -0.39,1.26 -1.21,0.92 -3.47,1.97 -1.79,0.38 -1.07,0.73 -0.93,3.24 -3.33,4.59 -1.24,2.87 0.07,1.21 2.34,2.26 0,0 -0.09,2.21 0.65,1.85 2.78,1.78 -0.48,2.69 -0.96,1.31 -2.29,1.4 -3.58,2.91 -1.52,-0.5 -1.37,0.49 -0.63,0.54 -0.33,2.02 -1.47,0.52 -0.11,0.37 -1.71,-0.43 -1.34,0.26 -0.22,0.56 -0.88,-0.07 -0.99,0.48 -2.9,-1.61 -2.26,0.19 -0.94,-0.49 -0.75,-1.7 -0.75,-0.81 -2.5,-0.62 -0.17,-0.5 4.04,-1.81 1.17,-1.12 0.1,-1.02 -0.34,-0.58 -0.67,-0.14 -1.02,0.49 -0.93,-0.54 -0.85,-2.48 1.79,-0.46 1.62,-1.88 0.33,-2.47 -0.18,-1.79 2.92,-2.07 1.77,-1.73 3.28,-1.68 1.26,-0.2 0.74,-0.69 1.19,-2.91 0.7,-3.47 -0.51,-0.38 -2.15,-0.14 -0.5,-0.44 0.76,-1.51 -0.41,-0.86 -2.17,-0.17 -1.88,0.73 -0.31,1.87 1.24,1.03 -2.39,1.89 -0.93,1.73 -0.9,0.44 -0.71,-0.52 -1.27,-0.2 -0.69,0.8 -1.93,-0.02 -0.58,-0.66 0.09,-0.45 3.78,-6.17 0.04,-1.16 -0.6,-1.93 -1.4,-1.32 -1.42,-0.51 -3.43,0.67 -0.63,0.57 0,7.04 -0.38,1.16 -1.16,-0.17 -1.21,-1.78 0.04,-3.32 1.69,-4.22 1.45,-1.87 1.1,-0.82 0.17,-0.91 -1.81,-1.01 -2.66,0.38 -2.16,1.53 -0.11,0.79 1.74,3.84 0.16,1.43 -1.03,1.18 -1.8,1.14 -0.27,-0.49 1.05,-3.24 -0.53,-0.37 -3.1,1.17 -0.36,3.03 -1.35,-0.34 -1.08,1.21 0,0 -0.72,-0.43 -0.43,-0.96 -0.2,-2.77 0,0 1.16,-3.05 1.01,-1.51 3.21,-1.42 0.25,-0.63 0.16,-5.55 -0.85,-3.09 0.08,-1.28 1.37,-2.73 0.61,-0.37 1.29,-5.77 0.09,-1.88 2.32,-2.89 2.8,-2.42 -0.89,-4.27 0.45,-1.2 -0.37,-1.89 0.31,-1.68 -0.37,-1.65 -0.78,-0.51 0.23,-1.32 2.4,-0.72 2.26,-2.14 2.07,-2.83 2.4,-1.82 0.47,-1.34 1.71,-1.37 3.9,0.27 2.23,0.7 2.25,-0.8 1.12,0.1 1,0.7 2.66,0.87 0.76,-0.91 1.68,0.23 6.07,-0.58 0.12,-0.68 -0.5,-0.37 0.02,-0.41 0.97,-0.52 -1.02,-4 -1.21,-0.45 0.81,-4.9 -0.8,-0.94 -1.53,-0.71 -0.36,-1.1 -0.75,-0.34 -0.04,-1.65 z" title="Zacatecas" id="MX-ZAC" />
                    <path d="m 465.44786,314.42244 0.5,0.49 -0.11,2.06 -1.15,1.91 2.48,0.61 -0.04,1.17 -0.71,1.44 -1.45,0.67 -0.56,1.03 -1.1,0.17 -1.73,-1.75 -1.52,0.56 -2.25,3.34 0.1,1.45 -0.67,1.6 -0.82,-0.48 -0.22,1.1 -0.66,0.4 -2.72,-0.38 -1.5,0.71 -4.58,0.28 -0.72,1.41 -0.65,3.8 0.14,0.76 0.96,0.71 0.65,1.74 -0.01,2.71 1.09,1.86 2.02,1.41 0.72,1.67 0,0 -0.43,1.09 0.6,1.18 0.1,1.32 -0.51,1.75 0.67,0.05 -0.08,0.99 -1.18,1.15 -2.06,0.28 -0.73,0.79 -0.48,1.4 -0.62,0.18 0.33,-1.5 -0.5,-0.24 -1.94,0.48 -1.38,1.02 -3.44,-0.17 -2.58,-0.91 -1.3,-0.14 -0.61,0.29 -0.26,-0.1 0.21,-0.47 -0.46,-2.34 -2.21,0.6 -1.39,-0.44 -0.66,0.58 0.33,0.82 -1.22,0.52 -1.8,-0.74 -2.54,-0.24 -0.47,-0.5 -0.02,-3.24 -0.45,-1.73 1.04,0.52 0.63,-0.27 -1.34,-1.8 -1.09,-0.75 -1.43,0.24 -0.63,-0.39 -2.1,0.69 -2.01,2.8 -0.91,-0.3 -2.21,0.14 -0.48,-0.43 -1.18,0.7 -0.81,-0.09 -0.44,-0.45 -0.68,-2.85 0.36,-0.4 -0.57,-0.49 -0.55,0.07 -0.33,-0.54 -0.86,-0.05 0,0 0.38,-2.77 1.79,-3.43 -1.57,-2.87 -1.65,-0.43 -0.55,-1.31 2.01,-1.96 0.12,-0.83 1.81,-1.5 1.91,-3.95 2.49,-1.91 1.12,-2.71 -0.11,-0.65 0.52,-0.74 1.47,-0.09 0.43,-0.37 0.67,-1.37 -0.81,-0.47 0.58,-2.19 -0.7,-0.12 1.52,-5.53 -0.12,-0.7 1.2,-1.36 -0.74,-0.83 1.22,-1.29 0,0 0.97,0.63 0.81,-0.94 0,0 1.16,0.67 2.91,0.31 1.26,0.73 4.63,1.06 1.23,0.75 1.07,-0.04 4.97,3.72 2.74,1.43 2.75,-0.03 1.52,-0.61 -0.15,-1.12 0.62,-1.83 1.08,-0.73 3.89,1.28 3.15,2 0.27,0.69 0.48,-0.09 1.7,2.13 1.81,-0.17 0.39,-0.54 0.68,0.84 1.61,0.04 z" title="Guanajuato" id="MX-GUA" />
                </svg>

            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>


<script>
$(".sliderPrincipal").owlCarousel({
    items: 1,
    navigation: false,
    dots: true,
    slideSpeed: 500,
    paginationSpeed: 500,
    singleItem: true,
    autoplay: true,
    autoplayTimeout: 6000,
});
$('.sliderServicios').owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    dots: true,
    nav: true,
    stagePadding: 50,
    items: 3,
    navText: ["<img src='<?php echo get_template_directory_uri().'/img/flecha-Izq.png';?>'>", "<img src='<?php echo get_template_directory_uri().'/img/flecha-Der.png';?>'>"],
    responsive: {
        0: {
            items: 1,
            nav: false,
            stagePadding: 0,
        },
        768: {
            items: 2,
        },
        1024: {
            items: 3,
        }
    },
});
$('.sliderMercados').owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    dots: true,
    nav: true,
    stagePadding: 50,
    items: 5,
    navText: ["<img src='<?php echo get_template_directory_uri().'/img/flecha-Izq.png';?>'>", "<img src='<?php echo get_template_directory_uri().'/img/flecha-Der.png';?>'>"],
    responsive: {
        0: {
            items: 1,
            nav: false,
            stagePadding: 0,
        },
        768: {
            items: 3,
        },
        1024: {
            items: 4,
        },
        1280: {
            items: 5,
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
    navText: ["<img src='<?php echo get_template_directory_uri().'/img/flecha-Izq.png';?>'>", "<img src='<?php echo get_template_directory_uri().'/img/flecha-Der.png';?>'>"],
    responsive: {
        0: {
            items: 1,
            nav: false,
            stagePadding: 0,
        },
        768: {
            items: 2,
        },
        1024: {
            items: 3,
        }
    }
});

$(document).ready(function(e) {
    /*
    let states = document.querySelectorAll('.selected');
    states.forEach(state => {
        state.addEventListener("click", function (e) {
            e.preventDefault();
            if (document.querySelector('.selected.active')) {
                document.querySelector('.selected.active').classList.remove("active");
            }
            this.classList.add("active");
        });
    });
    */

    $(".contenedor-general-mapa .map-container .cont-contenido .contenedor-mapa .contenedor-item").on("click", function() {
        $(".contenedor-general-mapa .map-container .cont-contenido .contenedor-mapa .contenedor-item").removeClass("active");
        $(this).addClass("active");
    });

});
</script>
