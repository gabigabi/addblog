<?php

add_action( 'after_setup_theme', 'add_setup' );

if ( ! function_exists( 'add_setup' ) ):
  function add_setup() { 
  	add_editor_style();
    add_theme_support('html5');
    add_theme_support( 'post-thumbnails' );
    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
      'principal' => __( 'Navegacion principal', 'addblogtheme' ),
      'catblog' => __( 'Navegacion del blog', 'addblogtheme' )
    ) );
  }
  endif;

// Para archivos javascript y Estilos
add_action('wp_enqueue_scripts', 'add_add_scripts');

if(! function_exists(add_add_scripts)):
  function add_add_scripts() {

    /* Add SCRIPTS */
    wp_register_script(
      'bootstrap',
      get_template_directory_uri().'/js/bootstrap.min.js',
      array('jquery-core'),
      '3.3.5',
      true
    );

     wp_register_script(
      'jssocialsjs',
      get_template_directory_uri().'/js/jssocials.min.js',
      array('bootstrap'),
      '1.3.1',
      true
    );

     wp_register_script(
      'addjs',
      get_template_directory_uri().'/js/addjs.js',
      array('jssocialsjs'),
      '1.0.0',
      true
    );

    wp_enqueue_script( 'masonry' );
    wp_enqueue_script('addjs');

    /* Finish Add SCRIPTS */

    /* Add Styles */
    wp_register_style(
      'bootstrap-style',
      get_template_directory_uri().'/css/bootstrap.min.css'
    );
    wp_register_style(
      'fawesomecss',
      get_template_directory_uri().'/css/font-awesome.min.css',
      array('bootstrap-style')
    );
    wp_register_style(
      'jssocialscss',
      get_template_directory_uri().'/css/jssocials.css',
      array('fawesomecss')
    );
    wp_register_style(
      'jssocialscss-min',
      get_template_directory_uri().'/css/jssocials-theme-flat.css',
      array('jssocialscss')
    );
    wp_register_style(
      'addstyle',
      get_stylesheet_uri(),
      array('jssocialscss-min')
    );
    wp_enqueue_style('addstyle');
    /* Finish Add Styles */
  }
endif;


// Nuestros propios Shortcodes

//// Mostrar los tags del Artículo

function tagCloud_shortcode($atts) {
  $tagstring = '<ul class="tags">';
  $posttags = get_the_tags();
  if ($posttags) {
    foreach($posttags as $tag) {
       $tagstring .= '<li>' . $tag->name . '</li> '; 
    }
  }
  $tagstring .= '</ul>';

  return $tagstring;
}
add_shortcode( 'showtags', 'tagCloud_shortcode');


//// Bootstrap ROW

function row_shcd($atts, $content = null) {
  return '<div class="row">' . do_shortcode($content)  . '</div>';
}
add_shortcode( 'row', 'row_shcd');

//// Bootstrap COLS  [col size="md" span="6"]

function col_shcd($atts, $content = null) {

    $a = shortcode_atts( array(
        'size' => 'md',
        'span' => '12',
    ), $atts );

  return '<div class="col-' . $a['size'] . '-' . $a['span'] . '">' . do_shortcode($content)  . '</div>';
}
add_shortcode( 'col', 'col_shcd');
