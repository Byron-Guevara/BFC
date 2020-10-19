<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> <?php bloginfo('name'); ?> | <?php echo the_title(); ?> </title>
    <?php wp_head() ?>
</head>
<body>

    <header>
        <div class="contenedor-header cont-contenido">
            <div class="contenedor-logo">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri().'/img/logo-BFC.png';?>" alt="">
                </a>
            </div>
            <div class="contenedor-menu">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'Header'
                        )
                    );
                ?>
                <!--
                <ul>
                    <li> <a href="#">Nosotros</a> </li>
                    <li> <a href="#">Servicios</a> </li>
                    <li> <a href="#">Mercados</a> </li>
                    <li> <a href="#">Capacitación</a> </li>
                    <li> <a href="#">Contacto</a> </li>
                </ul>
                -->
                <div class="cont-languaje">
                    <span class="active">ES</span> <span class="divider">|</span> <span>EN</span>
                </div>
            </div>
        </div>
    </header>