<?php 
function dlc_about_customizer($wp_customize, $id_panel){
  //Settings
    $wp_customize->add_setting('dlc_about_image', array(
      'type'=> 'theme_mod',
      'default' => ''
    ));
    $wp_customize->add_setting('dlc_about_bg_image', array(
      'type'=> 'theme_mod',
      'default' => ''
    ));
    $wp_customize->add_setting('dlc_about_activated', array(
      'type'=> 'theme_mod',
      'default' => true
    ));
    $wp_customize->add_setting('dlc_about_description_color', array(
      'type'=> 'theme_mod',
      'default' => '#777'
    ));

  //Sections
    $wp_customize->add_section('dlc_about_section', array(
    'title' => 'About Image',
    'capability' => 'edit_theme_options', 
    'priority' => '10',
    'description' => __('Put image in about section', 'leiteria'),
    'panel' => $id_panel,
  ));

  //Controllers
  $wp_customize->add_control('dlc_about_activated',array(
    'type' => 'checkbox',
    'label' => __('Enable About Section','leiteria'),
    'section' => 'dlc_about_section',
    'capability' => 'edit_theme_options', 
    'priority' => '10',
    'description' => __('Enable or disable the about section', 'leiteria'),
    'settings' => 'dlc_about_activated',
    'panel' => $id_panel,
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'dlc_about_image',
      array(
        'label' => '° Imagem Sobre',
        'section' => 'dlc_about_section',
        'settings' => 'dlc_about_image',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'dlc_about_bg_image',
      array(
        'label' => 'Imagem de fundo',
        'section' => 'dlc_about_section',
        'settings' => 'dlc_about_bg_image',
      )
    )
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control( 
    $wp_customize, 
    'dlc_about_description_color', 
    array(
        'label'      => __( 'Description Color', 'leiteria' ),
        'section'    => 'dlc_about_section',
        'settings'   => 'dlc_about_description_color',
        'description' => __('Changes the color of the description text','leiteria'),
    ) ) 
  );
}