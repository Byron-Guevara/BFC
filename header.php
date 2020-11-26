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

                <div class="cont-burguer">
                    <div class="burguer">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>

            <!-- Mobile -->
            <div class="mobile-cont-menu">
                <div class="contenedor-menu">
                
                    <div class="cont-languaje">
                        <a href="#"><span class="active">ES</span></a><span class="divider">|</span><a href="#"><span>EN</span></a>
                    </div>
                

                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'Header'
                        )
                    );
                    ?>

                </div>
            </div>
            <!-- Mobile -->

            <div class="contenedor-menu">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'Header'
                        )
                    );
                ?>
            
                <div class="cont-languaje">
                    <a href="#"><span class="active">ES</span></a><span class="divider">|</span><a href="#"><span>EN</span></a>
                </div>
            
            </div>
        </div>
    </header>
