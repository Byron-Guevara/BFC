<?php $img_featured = get_the_post_thumbnail_url();?>
<?php $post_type = get_post_type(); ?>

<div class="contenedor-general-banner" style="background-image: url(<?php echo $img_featured; ?>">
    <div class="contenedor-info <?php if($post_type == 'casosdeexito') echo('caso-exito'); ?>">
        <div class="cont-contenido-page">
            <?php 
                if($post_type != "page")
                {
            ?>
            <h1>
                <?php echo $post_type; ?>
            </h1>
            <?php
                }
            ?>
            <h2>
                <?php the_title(); ?>
            </h2>
        </div>
    </div>
</div>