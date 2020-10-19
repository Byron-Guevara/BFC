<?php

/**
 * Servicios Carrusel Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'servicios-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'servicios';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text = get_field('testimonial') ?: 'Your testimonial here...';
/*
$author = get_field('author') ?: 'Author name';
$role = get_field('role') ?: 'Author role';
$image = get_field('image') ?: 295;
*/
$background_color = get_field('background_color');
$text_color = get_field('text_color');

?>


<?php if(have_rows('servicios')): ?>
<div class="contenedor-servicios">
    <div class="sliderServicios owl-carousel owl-theme">
    <?php while(have_rows('servicios')): the_row(); ?>
        <div class="cont-servicio">
            <?php if(get_sub_field('titulo')) { ?>
            <p><?php the_sub_field('titulo'); ?></p>
            <?php } ?>
            <?php if(get_sub_field('descripcion')) { ?>
            <p><?php the_sub_field('descripcion'); ?></p>
            <?php } ?>
        </div>
    <?php endwhile; ?>
    </div>
</div>
<?php endif; ?>