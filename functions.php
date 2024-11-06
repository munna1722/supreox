<?php

function custom_theme_style () {

    wp_enqueue_style( 'font-css', 'https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round' );
    wp_enqueue_style(  'main-css', get_stylesheet_uri(), ['font-css'], get_the_time() );

}
add_action('wp_enqueue_scripts', 'custom_theme_style');



function ms_read_more_link( $excerpt ) {

    $extended_excerpt = $excerpt;
    $extended_excerpt .= ' <a href="' . get_permalink() . '"> ';
    $extended_excerpt .= 'read more &raquo;';
    $extended_excerpt .= '</a>';

 return $extended_excerpt;

}
add_filter( 'get_the_excerpt', 'ms_read_more_link', 10);

?>