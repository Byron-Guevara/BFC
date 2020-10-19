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
    <?php 
    if($post->ID != 235)
    {
    ?>
        <div class="contenedor-contactaexperto">
            <a href="<?php echo get_home_url(); ?>/contacto/">Contacta a un experto</a>
        </div>
    <?php 
    }
    ?>
</div>

<?php get_footer(); ?>