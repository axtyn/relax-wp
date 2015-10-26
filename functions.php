<?php

function theme_styles(){
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('normalize_css', get_template_directory_uri().'/css/normalize.css' );
}
//Carga scripts de una funcion
add_action('wp_enqueue_scripts', 'theme_styles'); 

function theme_js(){
    global $wp_scripts;
    wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '','',false);
    wp_register_script('respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '','',false);

    $wp_scripts -> add_data('html5_shiv', 'conditional', 'lt IE 9');
    $wp_scripts -> add_data('respond_js', 'conditional', 'lt IE 9');

    wp_enqueue_script('bootstrap_js',get_template_directory_uri(), '/js/bootstrap.min.js', array('jquery'),'',true);
}

add_action( 'wp_enqueue_scripts', 'theme_js');

//Ocultar barra admin
//add_filter('show_admin_bar','__return_false');

//MuestrA configuración de menus en backend
add_theme_support('menus');

function our_theme_menus(){
    register_nav_menus(
        array(
                'header-menu' => __('Menu Principal')
                )
         );
}


add_action('init','our_theme_menus');

function create_widget($name, $id, $description){
    register_sidebar(array(
            'name'          => __( $name ),
            'id'            => $id,
            'description'   => __($description),
            //'class'         => '',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ));
}

//Imagen Destacada
if ( function_exists( 'add_theme_support' ) ){
add_theme_support( 'post-thumbnails' );
//add_image_size( 'post-thumbnail', 1020, 280, true );
}


create_widget('Portada Izq','frontleft','Se muestra en el lado izquierdo');
create_widget('Portada Cent','frontcent','Se muestra en el lado cen');
create_widget('Portada Der','frontright','Se muestra en el lado der');

create_widget('Sidebar','sidebar','Se muestra en el lado derecho de una página');
create_widget('Sidebar Blog','blog','Se muestra en el lado derecho del blog');


// Numeric Page Navi (built into the theme by default)
function my_page_navi() {
  global $wp_query;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  echo '<nav class="pagination">';
  echo paginate_links( array(
    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format'       => '',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
    'prev_text'    => '&larr;',
    'next_text'    => '&rarr;',
    'type'         => 'list',
    'end_size'     => 3,
    'mid_size'     => 3
  ) );
  echo '</nav>';
}





?>