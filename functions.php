<?php

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer', 'scripts_theme' );
add_action( 'after_setup_theme', 'headerMenu' );

//Read More
function wpdocs_excerpt_more( $more ) {
    return '<a class="output-of-posts-classes__column-read-more" href="'.get_the_permalink().'" rel="nofollow">Read More...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

//Post preview length
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//Menu Registration
function headerMenu() {
    register_nav_menu( 'top', 'Header Menu' );
    add_image_size( 'output_of_posts_classes', 310, 206, true );
}

//Adding Styles
function style_theme() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/app/css/app.min.css' );
}

//Adding scripts
function scripts_theme() {
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js', array('jquery') );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/node_modules/swiper/swiper-bundle.min.js', array('jquery') );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/app/js/app.min.js', array('jquery') );
}

//Adding a class to "a"
function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

//Adding a class to "li"
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

//Logo size
add_theme_support( 'custom-logo', [
	'height'      => 80,
	'width'       => 80,
	'flex-width'  => false,
	'flex-height' => false,
	'header-text' => '',
	'unlink-homepage-logo' => false,
] );
add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );


