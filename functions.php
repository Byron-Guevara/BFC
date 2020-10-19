<?php
add_theme_support( 'post-thumbnails' );

include_once ('widgets/footer-redes-sociales.php');
include_once ('widgets/footer-contacto.php');

function register_bfc_menus(){

    register_nav_menus( array(
        'Header'   => __( 'Header Menu', 'BFC' ),
        'Footer'   => __( 'Footer Menu', 'BFC' ),
        )
    );
}
add_action('init', 'register_bfc_menus');


function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'generals', get_template_directory_uri().'/css/generals.css');

    //wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), filemtime( get_stylesheet_directory() . '/css/animate.css' ), 'all');

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);
    wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');
    wp_enqueue_script('owl.carousel.min.js', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/owl.carousel.min.js' ), false);

    if(is_front_page()){
        wp_enqueue_style( 'page-home', get_template_directory_uri() . '/css/page-home.css', array(), filemtime( get_stylesheet_directory() . '/css/page-home.css' ), 'all');
    }
    if(!is_front_page()){
        wp_enqueue_style( 'page', get_template_directory_uri() . '/css/page.css', array(), filemtime( get_stylesheet_directory() . '/css/page.css' ), 'all');
        wp_enqueue_style( 'swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '1.1', 'all');
        wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array('jquery'), 'https://unpkg.com/swiper/swiper-bundle.min.js', false);
        wp_enqueue_script('generals', get_template_directory_uri().'/js/generals.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/generals.js' ), false);
    }

    wp_enqueue_script('menu', get_template_directory_uri().'/js/menu.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/menu.js' ), false);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function wpb_widgets_init() {

    register_sidebar( array(
        'name' =>__( 'Footer Contacto', 'wpb'),
        'id' => 'footer-contacto',
    ) );

    register_sidebar( array(
        'name' =>__( 'Footer Redes Sociales', 'wpb'),
        'id' => 'footer-redes-sociales',
    ) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );



add_action( 'init', 'bfc_post_type_servicios' );
function bfc_post_type_servicios() {

  $labels = array(
    'name'               => __( 'Servicios' ),
    'singular_name'      => __( 'Servicios' ),
    'add_new'            => __( 'Agregar Nuevo Servicio' ),
    'add_new_item'       => __( 'Agregar Nuevo Servicio' ),
    'edit_item'          => __( 'Editar Servicio' ),
    'new_item'           => __( 'Nuevo Servicio' ),
    'all_items'          => __( 'Todos Los Servicios' ),
    'view_item'          => __( 'Ver Servicio' ),
    'search_items'       => __( 'Buscar Servicio' ),
    'not_found' => 'No se han encontrado servicios',
	'not_found_in_trash' => 'No se han encontrado servicios en la papelera'
  );

  $args = array(
    'labels'            => $labels,
    'description'       => 'Información especifica de cada servicio',
    'public'            => true,
    'menu_position'     => 5,
    'show_in_rest'      => true,
    'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments'),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'query_var'         => 'servicios'
  );

  register_post_type( 'servicios', $args);

}

add_action( 'init', 'bfc_post_type_mercados' );
function bfc_post_type_mercados() {

  $labels = array(
    'name'               => __( 'Mercados' ),
    'singular_name'      => __( 'Mercados' ),
    'add_new'            => __( 'Agregar Nuevo Mercado' ),
    'add_new_item'       => __( 'Agregar Nuevo Mercado' ),
    'edit_item'          => __( 'Editar Mercado' ),
    'new_item'           => __( 'Nuevo Mercado' ),
    'all_items'          => __( 'Todos Los Mercados' ),
    'view_item'          => __( 'Ver Mercado' ),
    'search_items'       => __( 'Buscar Mercado' ),
    'not_found' => 'No se han encontrado mercados',
	'not_found_in_trash' => 'No se han encontrado mercados en la papelera'
  );

  $args = array(
    'labels'            => $labels,
    'description'       => 'Información especifica de cada mercado',
    'public'            => true,
    'menu_position'     => 5,
    'show_in_rest'      => true,
    'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments'),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'query_var'         => 'mercados'
  );

  register_post_type( 'mercados', $args);

}

add_action( 'init', 'bfc_post_type_casos' );
function bfc_post_type_casos() {

  $labels = array(
    'name'               => __( 'Casos de Éxito' ),
    'singular_name'      => __( 'Casos de Éxito' ),
    'add_new'            => __( 'Agregar Nuevo Caso de Éxito' ),
    'add_new_item'       => __( 'Agregar Nuevo Caso de Éxito' ),
    'edit_item'          => __( 'Editar Caso de Éxito' ),
    'new_item'           => __( 'Nuevo Caso de Éxito' ),
    'all_items'          => __( 'Todos Los Casos de Éxito' ),
    'view_item'          => __( 'Ver Caso de Éxito' ),
    'search_items'       => __( 'Buscar Caso de Éxito' ),
    'not_found' => 'No se han encontrado casos de éxito',
	'not_found_in_trash' => 'No se han encontrado casos de éxito en la papelera'
  );

  $args = array(
    'labels'            => $labels,
    'description'       => 'Información especifica de cada caso de éxito',
    'public'            => true,
    'menu_position'     => 5,
    'show_in_rest'      => true,
    'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments'),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'query_var'         => 'casosdeexito'
  );

  register_post_type( 'casosdeexito', $args);

}



add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Servicios.
        acf_register_block_type(array(
            'name'              => 'servicios',
            'title'             => __('Servicios'),
            'description'       => __('Carrusel servicios.'),
            'render_template'   => 'blocks/servicios.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'servicios', 'quote' ),
        ));

        // Galeria.
        acf_register_block_type(array(
            'name'              => 'carrusel-imagenes',
            'title'             => __('Carrusel de Imagenes'),
            'description'       => __('Carrusel de Imagenes.'),
            'render_template'   => 'blocks/carrusel-imagenes.php',
            'category'          => 'ap-blocks',
            'icon'              => 'format-gallery',
            'keywords'          => array( 'carrusel-imagenes', 'quote' ),
        ));

        // Carrusel de Nosotros.
        acf_register_block_type(array(
          'name'              => 'carrusel-contenido',
          'title'             => __('Carrusel de Contenido'),
          'description'       => __('Carrusel de Contenido.'),
          'render_template'   => 'blocks/carrusel-contenido.php',
          'category'          => 'ap-blocks',
          'icon'              => 'admin-comments',
          'keywords'          => array( 'carrusel-contenido', 'quote' ),
      ));

      // Items Destacados de Nosotros.
      acf_register_block_type(array(
        'name'              => 'items-destacados',
        'title'             => __('Items Destacados'),
        'description'       => __('Items Destacados.'),
        'render_template'   => 'blocks/items-destacados.php',
        'category'          => 'ap-blocks',
        'icon'              => 'images-alt',
        'keywords'          => array( 'items-destacados', 'quote' ),
    ));

    // Items Destacados de Contacto.
    acf_register_block_type(array(
      'name'              => 'contacto',
      'title'             => __('Contacto'),
      'description'       => __('Contacto.'),
      'render_template'   => 'blocks/contacto.php',
      'category'          => 'ap-blocks',
      'icon'              => 'images-alt',
      'keywords'          => array( 'contacto', 'quote' ),
    ));

    }
}

add_post_type_support( 'themes', 'thumbnail' );
