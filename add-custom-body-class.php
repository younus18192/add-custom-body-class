<?php
/*
 * Plugin Name: add custom body class
 */
function custom_body_class($classes) {
    $classes[] = 'hide';
    return $classes;
}
add_action( 'body_class', 'custom_body_class' );
?>
