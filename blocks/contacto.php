<?php

/**
 * Contacto Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'contacto-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'contacto';
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

<div class="contenedor-general-contacto">
    <div class="contenedor-direccion">
        <h2>
            Nuestros <br> especialistas están <br> listos para ayudarte.
        </h2>
        <div class="cont-direccion">
            <div class="contenedor-info">
                <div class="cont-icono">
                    <img src="<?php echo get_template_directory_uri().'/img/icono-ubicacion.png';?>" alt="">
                </div>
                <div class="cont-info">
                    <p class="title">NUESTRA DIRECCIÓN</p>
                    <p><?php the_field('direccion'); ?></p>
                </div>
            </div>
            <div class="contenedor-info">
                <div class="cont-icono">
                    <img src="<?php echo get_template_directory_uri().'/img/icono-telefonos.png';?>" alt="">
                </div>
                <div class="cont-info">
                    <p class="title">LLÁMANOS</p>
                    <?php while(have_rows('telefonos')): the_row(); ?>
                        <a href="tel:<?php the_sub_field('telefono'); ?>" target="_blank"><?php the_sub_field('telefono'); ?></a>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="contenedor-info">
                <div class="cont-icono">
                    <img src="<?php echo get_template_directory_uri().'/img/icono-correo.png';?>" alt="">
                </div>
                <div class="cont-info">
                    <p class="title">ESCRÍBENOS</p>
                    <a href="mailto:<?php the_field('correo'); ?>" target="_blank"><?php the_field('correo'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="contenedor-contacto">
        <div class="form">
            <h2>CONTÁCTANOS</h2>

            <div class="form-control half">
                <input type="text" placeholder="Nombre*">
            </div>

            <div class="form-control half">
                <input type="text" placeholder="Apellidos*">
            </div>

            <div class="form-control half">
                <input type="text" placeholder="Teléfono*">
            </div>

            <div class="form-control half">
                <input type="text" placeholder="Correo*">
            </div>

            <div class="form-control full">
                <textarea placeholder="Mensaje"></textarea>
            </div>
                        
            <div class="form-control full">
                <input type="submit" value="Enviar">
            </div>
        </div>
    </div>
</div>