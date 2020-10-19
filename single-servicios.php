<?php get_header(); ?>

<?php get_template_part('template-parts/banner','hero') ?>

<div class="contenedor-general-page">
    <div class="cont-contenido-page">
        <?php
        $post = get_post($id); 
        $content = apply_filters('the_content', $post->post_content); 
        echo $content;
        ?>


        <?php if( have_rows('capas', $id) ): ?>

        <div class="contenedor-general-capas">

            <div class="contenedor-items-capas">

                <?php 
                    $ind = 1;
                    while( have_rows('capas', $id) ): the_row(); 
                    $titulo = get_sub_field('titulo');
                ?>

                <div class="cont-item-capa <?php if($ind == 1) echo('active'); ?>">
                    <div class="cont-info">
                        <p class="title">0<?php echo $ind ?></p>
                        <p> <?php echo $titulo ?> </p>
                    </div>
                </div>

                <?php 
                    $ind++;
                    endwhile; 
                ?>

            </div>


            <div class="contenedor-items-contenido">

                <?php 
                    $ind = 1;
                    while( have_rows('capas', $id) ): the_row(); 
                    $contenido_encabezado = get_sub_field('contenido_encabezado');
                    $contenidos = get_sub_field('contenidos');
                ?>

                <div class="cont-item-contenido <?php if($ind == 1) echo('active'); ?>">

                    <div class="cont-item-encabezado">
                        <?php echo $contenido_encabezado ?>
                    </div>

                    <div class="contenedor-item-columnado">
                        <?php 
                        while( have_rows('contenidos', $id) ): the_row(); 
                        $contenido = get_sub_field('contenido');
                        ?>

                        <div class="cont-item-columnado">
                            <?php echo $contenido ?>
                        </div>

                        <?php 
                            endwhile; 
                        ?>
                    </div>
                    

                </div>

                <?php 
                    $ind++;
                    endwhile; 
                ?>

            </div>

        </div>


        <?php endif; ?>
        
        <div class="contenedor-contactaexperto">
            <a href="#">Contacta a un experto</a>
        </div>
        
    </div>
</div>

<?php get_footer(); ?>