<?php get_header(); ?>

<?php get_template_part('template-parts/banner','hero') ?>

<div class="contenedor-general-page">
    <div class="cont-contenido-page">
        <?php
        $post = get_post($id); 
        $content = apply_filters('the_content', $post->post_content); 
        echo $content;
        ?>
        <!-- Servicios -->
        <div class="contenedor-servicios-mercados">
            <div class="cont-enc">
                <h1>
                NUESTROS SERVICIOS
                </h1>
            </div>
            <div class="slider-servicios-mercados owl-carousel owl-theme">
                <?php
                $args = array( 'post_type' => 'servicios', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby'=>'fecha', 'order'=>'ASC');
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                $thumbID = get_post_thumbnail_id( $post->ID );
				$imgDestacada = wp_get_attachment_url( $thumbID );
                ?>
                    <a href="<?php the_permalink(); ?>" class="cont-servicios-mercados" style="background-image: url(<?php the_field('imagen_carrusel'); ?>);">
                        <div class="mask-info">
                            <p>
                                <?php the_title(); ?>
                            </p>
                        </div>
                    </a>
                <?php
                endwhile;
                ?>
            </div>
        </div>
        <!-- Servicios -->
        <div class="contenedor-contactaexperto">
            <a href="<?php echo get_home_url(); ?>/contacto/">Contacta a un experto</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>