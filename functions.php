<?php
/*
* Agregar tamaño de imágenes
*/

add_theme_support( 'post-thumbnails' );
add_image_size( 'slider', 1000, 400, true );

/**
 * Registrar dos menus para cabecera y footer.
 * 
 */

function register_my_menus() {
  register_nav_menus(
    array(
      'Principal' => __( 'Principal' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>