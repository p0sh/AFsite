<?php

// use custom menu for top nav
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'current ';
     }
     return $classes;
}

// support featured image
add_theme_support( 'post-thumbnails' );

// remove hardcoded width/height in featured image tag
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
//add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}


?>