<?php
function bfc_contacto_load_widget() {
    register_widget( 'bfc_contacto_widget' );
}
add_action( 'widgets_init', 'bfc_contacto_load_widget' );

// Creating the widget
class bfc_contacto_widget extends WP_Widget {
    function __construct() {
        parent::__construct('bfc_contacto_widget',__('BFC Contacto', 'bfc_contacto_widget_domain'),array( 'description' => __( 'Información de Contacto.', 'bfc_contacto_widget_domain' ), ));
    }
    
    public function widget( $args, $instance ) {
        $telefono = $instance['bfc_telefono'];
        $telefono2 = $instance['bfc_telefono2'];
        $telefono3 = $instance['bfc_telefono3'];
        $correo = $instance['bfc_correo'];
        $correo2 = $instance['bfc_correo2'];

/*
        $telefono2 = $instance['bfc_telefono2'];
        $telefono3 = $instance['bfc_telefono3'];
*/
        echo $args['before_widget'];

        echo "<div class='cont-telefonos'>";

        if( ! empty($telefono)){
            echo "<a href='tel:".$telefono."' target='_blank'>".$telefono."</a>";
        }
        
        if( ! empty($telefono2)){
            echo "<span>|</span>";
            echo "<a href='tel:".$telefono2."' target='_blank'>".$telefono2."</a>";    
            if( ! empty($telefono3)){
                echo "<span>|</span>";
                echo "<a href='tel:".$telefono3."' target='_blank'>".$telefono3."</a>";
                echo "</div>";
            }
            else{
                echo "</div>";
            }
        }
        else{
            echo "</div>";
        }

        echo "<div class='cont-correos'>";

        if( ! empty($correo)){
            echo "<a href='mailto:".$correo."' target='_blank'>".$correo."</a>";
        }
        
        if( ! empty($correo2)){
            echo "<span>|</span>";
            echo "<a href='mailto:".$correo2."' target='_blank'>".$correo2."</a>";
            echo "</div>";
        }
        else{
            echo "</div>";
        } 
        
        echo $args['after_widget'];
    }


public function form( $instance ) {

    if ( isset( $instance[ 'bfc_telefono' ] ) ) {
        $telefono = $instance[ 'bfc_telefono' ];
    }else{
        $telefono = __( '#', 'bfc_contacto_widget_domain' );
    }
    
    if ( isset( $instance[ 'bfc_telefono2' ] ) ) {
        $telefono2 = $instance[ 'bfc_telefono2' ];
    }else{
        $telefono2 = __( '#', 'bfc_contacto_widget_domain' );
    }

    if ( isset( $instance[ 'bfc_telefono3' ] ) ) {
        $telefono3 = $instance[ 'bfc_telefono3' ];
    }else{
        $telefono3 = __( '#', 'bfc_contacto_widget_domain' );
    }

    if ( isset( $instance[ 'bfc_correo' ] ) ) {
        $correo = $instance[ 'bfc_correo' ];
    }else{
        $correo = __( '#', 'bfc_contacto_widget_domain' );
    }

    if ( isset( $instance[ 'bfc_correo2' ] ) ) {
        $correo2 = $instance[ 'bfc_correo2' ];
    }else{
        $correo2 = __( '#', 'bfc_contacto_widget_domain' );
    }
// Widget admin form
?>

<ul>
    <li>
        <label
            for="<?php echo $this->get_field_id('bfc_telefono');?>"><strong><?php _e( 'Teléfono:' ); ?></strong></label>
        </br>
        <input type="text" id="<?php echo $this->get_field_id('bfc_telefono');?>"
            name="<?php echo $this->get_field_name('bfc_telefono');?>" value="<?php echo esc_attr( $telefono ); ?>">
        <hr>
    </li>
    <li>
        <label
            for="<?php echo $this->get_field_id('bfc_telefono2');?>"><strong><?php _e( 'Teléfono 2:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('bfc_telefono2');?>"
            name="<?php echo $this->get_field_name('bfc_telefono2');?>"
            value="<?php echo esc_attr( $telefono2 ); ?>">
        <hr>
    </li>
    <li>
        <label
            for="<?php echo $this->get_field_id('bfc_telefono3');?>"><strong><?php _e( 'Teléfono 3:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('bfc_telefono3');?>"
            name="<?php echo $this->get_field_name('bfc_telefono3');?>" value="<?php echo esc_attr( $telefono3 ); ?>">
        <hr>
    </li>
    <li>
        <label
            for="<?php echo $this->get_field_id('bfc_correo');?>"><strong><?php _e( 'Correo:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('bfc_correo');?>"
            name="<?php echo $this->get_field_name('bfc_correo');?>" value="<?php echo esc_attr( $correo ); ?>">
        <hr>
    </li>
    <li>
        <label
            for="<?php echo $this->get_field_id('bfc_correo2');?>"><strong><?php _e( 'Correo 2:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('bfc_correo2');?>"
            name="<?php echo $this->get_field_name('bfc_correo2');?>" value="<?php echo esc_attr( $correo2 ); ?>">
        <hr>
    </li>
</ul>
<?php 
}
public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['bfc_telefono'] = ( ! empty( $new_instance['bfc_telefono'] ) ) ? strip_tags( $new_instance['bfc_telefono'] ) : '';
    $instance['bfc_telefono2'] = ( ! empty( $new_instance['bfc_telefono2'] ) ) ? strip_tags( $new_instance['bfc_telefono2'] ) : '';
    $instance['bfc_telefono3'] = ( ! empty( $new_instance['bfc_telefono3'] ) ) ? strip_tags( $new_instance['bfc_telefono3'] ) : '';
    $instance['bfc_correo'] = ( ! empty( $new_instance['bfc_correo'] ) ) ? strip_tags( $new_instance['bfc_correo'] ) : '';
    $instance['bfc_correo2'] = ( ! empty( $new_instance['bfc_correo2'] ) ) ? strip_tags( $new_instance['bfc_correo2'] ) : '';
    return $instance;
}
} 

function custom_widget_title( $title ) {
    $title = str_replace( 'spice_line_break', '<br/>', $title );
    return $title;
}    
add_filter( 'widget_title', 'custom_widget_title' );