<?php

// Remove the header color control in Color section of te Customizer.
// The section itself will also disappear if no plugin adds its own
// controls to it. Remove the Header Image section of te Customizer.
add_action( 'customize_register', function( $wp_customize ) {
  $wp_customize->remove_control( 'header_textcolor' );
  $wp_customize->remove_section( 'header_image' );
}, 20 );
