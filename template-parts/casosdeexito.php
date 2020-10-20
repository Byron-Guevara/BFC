<div class="sliderCasos cont-servicios-casos owl-carousel owl-theme">
    <?php
        $args = array( 'post_type' => 'casosdeexito', 'post_status' => 'publish', 'posts_per_page' => -1, 'orderby'=>'fecha', 'order'=>'ASC');
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
                <p class="title">
                    <?php the_title(); ?>
                </p>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Ver más</a>
            </div>
        </div>
    </div>
    <?php
        endwhile;
    ?>
</div>
