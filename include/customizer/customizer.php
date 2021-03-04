<?php
require get_template_directory(  ). '/include/customizer/hero-section.php';
require get_template_directory(  ).'/include/customizer/about-section.php';
require get_template_directory(  ).'/include/customizer/order-section.php';
require get_template_directory(  ).'/include/customizer/resale-section.php';
require get_template_directory(  ).'/include/customizer/footer-customizer.php';

function dlc_customize_register($wp_customize)
{
  $id_panel = 'dlc_panel';
    //Painel
  $wp_customize->add_panel( $id_panel, array( 
    'priority' => 10, 
    'capability' => 'edit_theme_options', 
    'title' => __('Opções das Seções do Tema', 'leiteria'), 
    'description' => __('Personalize as seções do tema por aqui', 'leiteria')
  ));

  dlc_hero_customizer($wp_customize, $id_panel);
  dlc_about_customizer($wp_customize,$id_panel);
  dlc_order_customizer($wp_customize,$id_panel);
  dlc_resale_customizer($wp_customize,$id_panel);
  dlc_footer_customizer($wp_customize,$id_panel);
}
