<?php get_header(); ?>

<?php get_template_part('template-parts/banner','hero') ?>

<div class="contenedor-general-page">
    <div class="cont-contenido-page">
        <?php
        $post = get_post($id); 
        $content = apply_filters('the_content', $post->post_content); 
        echo $content;
        ?> 
    </div>
    <div class="contenedor-contactaexperto">
        <a href="#">Contacta a un experto</a>
    </div>
</div>

<?php get_footer(); ?>