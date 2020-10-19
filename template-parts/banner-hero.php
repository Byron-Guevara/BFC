<?php $img_featured = get_the_post_thumbnail_url();?>
<?php $post_type = get_post_type(); ?>
<?php $post_type_object = get_post_type_object($post_type); ?>

<div class="contenedor-general-banner" style="background-image: url(<?php echo $img_featured; ?>">
    <div class="contenedor-info <?php if($post_type == 'casosdeexito') echo('caso-exito'); ?>">
        <div class="cont-contenido-page">

            <?php if($post_type == "casosdeexito"){ ?>
            <h1><?php
            $the_id = get_the_ID();
            $cat = get_the_category($the_id) ;
            if($cat[0]->name){
                echo $cat[0]->name;
            }else{
                echo $post_type_object->label;
            }
            ?></h1>

            <?php }else if($post_type != "page"){ ?>

            <h1> <?php echo $post_type?> </h1>

            <?php } ?>

            <h2>
                <?php the_title(); ?>
            </h2>
        </div>
    </div>
</div>
