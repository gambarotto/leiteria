<?php
require get_template_directory(  ).'/include/setup.php';
require get_template_directory(  ).'/include/customizer/customizer.php';
require get_template_directory(  ).'/include/wpform/whatsapp-hook.php';

add_action('wp_enqueue_scripts','dlc_theme_css_js');
add_action( 'after_setup_theme', 'dlc_after_setup' );
add_action('customize_register', 'dlc_customize_register');
add_action( 'widgets_init', 'dlc_widgets');

add_action( 'wpforms_process_complete', 'dlc_wpform_whatsapp_redirect', 10, 4 );
// add_filter( 'wpforms_is_amp', '__return_true' );