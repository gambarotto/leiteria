<?php
function dlc_resale_customizer($wp_customize,$id_panel){
   //Settings
    $wp_customize->add_setting('dlc_resale_activated', array(
      'type'=> 'theme_mod',
      'default' => true
    ));
    $wp_customize->add_setting('dlc_resale_title', array(
      'type'=> 'theme_mod',
      'default' => 'Revenda'
    ));
    $wp_customize->add_setting('dlc_resale_description', array(
      'type'=> 'theme_mod',
      'default' => 'Descrição'
    ));
    $wp_customize->add_setting('dlc_resale_description_color', array(
      'type'=> 'theme_mod',
      'default' => '#777'
    ));
    $wp_customize->add_setting('dlc_bg_resale_image', array(
      'type'=> 'theme_mod',
      'default' => ''
    ));
    $wp_customize->add_setting('dlc_resale_image', array(
      'type'=> 'theme_mod',
      'default' => ''
    ));
  //Sections
    $wp_customize->add_section('dlc_resale_section', array(
    'title' => __('Revenda','leiteria'),
    'capability' => 'edit_theme_options', 
    'priority' => '10',
    'description' => __('Configurações sobre a seção revenda', 'leiteria'),
    'panel' => $id_panel,
  ));

  //Controllers
  $wp_customize->add_control('dlc_resale_activated',array(
    'type' => 'checkbox',
    'label' => __('Ativar esta seção','leiteria'),
    'section' => 'dlc_resale_section',
    'capability' => 'edit_theme_options', 
    'priority' => '10',
    'description' => __('Se ativado, essa seção estará visível no site', 'leiteria'),
    'settings' => 'dlc_resale_activated',
  ));
  $wp_customize->add_control('dlc_resale_title',array(
    'type' => 'text',
    'label' => __('Título desta Seção','leiteria'),
    'section' => 'dlc_resale_section',
    'capability' => 'edit_theme_options', 
    'priority' => '10',
    'settings' => 'dlc_resale_title',
  ));
  $wp_customize->add_control('dlc_resale_description',array(
    'type' => 'textarea',
    'label' => __('Descrição desta Seção','leiteria'),
    'section' => 'dlc_resale_section',
    'capability' => 'edit_theme_options', 
    'priority' => '10',
    'settings' => 'dlc_resale_description',
  ));
  $wp_customize->add_control( 
    new WP_Customize_Color_Control( 
    $wp_customize, 
    'dlc_resale_description_color', 
    array(
        'label'      => __( 'Cor da descrição', 'leiteria' ),
        'section'    => 'dlc_resale_section',
        'settings'   => 'dlc_resale_description_color',
        'description' => __('Cor do texto da descrição','leiteria'),
    ) ) 
  );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'dlc_bg_resale_image',
      array(
        'label' => 'Imagem de Fundo',
        'section' => 'dlc_resale_section',
        'settings' => 'dlc_bg_resale_image',
        'description' => __('Coloca uma image de fundo na seção', 'leiteria'),
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'dlc_resale_image',
      array(
        'label' => 'Imagem da Seção',
        'section' => 'dlc_resale_section',
        'settings' => 'dlc_resale_image',
        'description' => __('Coloca uma image ao lado do formulário', 'leiteria'),
      )
    )
  );


}