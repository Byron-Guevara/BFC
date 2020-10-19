<?php
function bfc_load_widget() {
    register_widget( 'bfc_widget' );
}
add_action( 'widgets_init', 'bfc_load_widget' );

// Creating the widget
class bfc_widget extends WP_Widget {
    function __construct() {
        parent::__construct('bfc_widget',__('BFC Redes Sociales', 'bfc_widget_domain'),array( 'description' => __( 'Botones de redes sociales.', 'bfc_widget_domain' ), ));
    }
    
    public function widget( $args, $instance ) {
        $facebook = $instance['bfc_facebook'];
        $linkedin = $instance['bfc_linkedin'];
        $twitter = $instance['bfc_twitter'];

        echo $args['before_widget'];

        if( ! empty($facebook)){
            echo "<a href='".$facebook."' target='_blank'><img src='".get_template_directory_uri().'/img/facebook-r.png'."' alt=''></a>";
        }   
        if( ! empty($linkedin)){
            echo "<a href='".$linkedin."' target='_blank'><img src='".get_template_directory_uri().'/img/linkedin-r.png'."' alt=''></a>";
        }  
        if( ! empty($twitter)){
            echo "<a href='".$twitter."' target='_blank'><img src='".get_template_directory_uri().'/img/twitter-r.png'."' alt=''></a>";
        }   
        
        echo $args['after_widget'];
    }


public function form( $instance ) {

    if ( isset( $instance[ 'bfc_facebook' ] ) ) {
        $facebook = $instance[ 'bfc_facebook' ];
    }else{
        $facebook = __( '#', 'bfc_widget_domain' );
    }
    
    if ( isset( $instance[ 'bfc_linkedin' ] ) ) {
        $linkedin = $instance[ 'bfc_linkedin' ];
    }else{
        $linkedin = __( '#', 'bfc_widget_domain' );
    }

    if ( isset( $instance[ 'bfc_twitter' ] ) ) {
        $twitter = $instance[ 'bfc_twitter' ];
    }else{
        $twitter = __( '#', 'bfc_widget_domain' );
    }
// Widget admin form
?>

<ul>
    <li>
        <label
            for="<?php echo $this->get_field_id('bfc_facebook');?>"><strong><?php _e( 'Facebook:' ); ?></strong></label>
        </br>
        <input type="text" id="<?php echo $this->get_field_id('bfc_facebook');?>"
            name="<?php echo $this->get_field_name('bfc_facebook');?>" value="<?php echo esc_attr( $facebook ); ?>">
        <hr>
    </li>
    <li>
        <label
            for="<?php echo $this->get_field_id('bfc_linkedin');?>"><strong><?php _e( 'Linkedin:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('bfc_linkedin');?>"
            name="<?php echo $this->get_field_name('bfc_linkedin');?>"
            value="<?php echo esc_attr( $linkedin ); ?>">
        <hr>
    </li>
    <li>
        <label
            for="<?php echo $this->get_field_id('bfc_twitter');?>"><strong><?php _e( 'Twitter:' ); ?></strong></label></br>
        <input type="text" id="<?php echo $this->get_field_id('bfc_twitter');?>"
            name="<?php echo $this->get_field_name('bfc_twitter');?>" value="<?php echo esc_attr( $twitter ); ?>">
        <hr>
    </li>

</ul>
<?php 
}
public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['bfc_facebook'] = ( ! empty( $new_instance['bfc_facebook'] ) ) ? strip_tags( $new_instance['bfc_facebook'] ) : '';
    $instance['bfc_linkedin'] = ( ! empty( $new_instance['bfc_linkedin'] ) ) ? strip_tags( $new_instance['bfc_linkedin'] ) : '';
    $instance['bfc_twitter'] = ( ! empty( $new_instance['bfc_twitter'] ) ) ? strip_tags( $new_instance['bfc_twitter'] ) : '';
    return $instance;
}
} 