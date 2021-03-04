<?php
function dlc_order_customizer($wp_customize, $id_panel)
{
    //Settings
    $wp_customize->add_setting('dlc_bg_order_image', array(
      'type'=> 'theme_mod',
      'default' => ''
    ));
    $wp_customize->add_setting('dlc_order_activated', array(
      'type'=> 'theme_mod',
      'default' => true
    ));
    $wp_customize->add_setting('dlc_order_description', array(
      'type'=> 'theme_mod',
      'default' => 'Descrição da seção'
    ));
    $wp_customize->add_setting('dlc_order_description_color', array(
      'type'=> 'theme_mod',
      'default' => '#777'
    ));
    $wp_customize->add_setting('dlc_order_address', array(
      'type'=> 'theme_mod',
      'default' => ''
    ));
    $wp_customize->add_setting('dlc_order_map', array(
      'type'=> 'theme_mod',
      'default' => ''
    ));

    //Sections
    $wp_customize->add_section('dlc_order_section', array(
    'title' => __('Order Section Settings', 'leiteria'),
    'capability' => 'edit_theme_options',
    'priority' => '10',
    'description' => __('Settings about order section', 'leiteria'),
    'panel' => $id_panel,
  ));

    //Controllers
    $wp_customize->add_control('dlc_order_activated', array(
    'type' => 'checkbox',
    'label' => __('Ativar esta seção', 'leiteria'),
    'section' => 'dlc_order_section',
    'capability' => 'edit_theme_options',
    'priority' => '10',
    'description' => __('Ativa essa seção', 'leiteria'),
    'settings' => 'dlc_order_activated',
    'panel' => $id_panel,
  ));
    $wp_customize->add_control('dlc_order_map', array(
    'type' => 'textarea',
    'label' => __('Coloca um mapa nessa seção', 'leiteria'),
    'section' => 'dlc_order_section',
    'capability' => 'edit_theme_options',
    'priority' => '10',
    'description' => __('Coloque aqui o iframe do mapa', 'leiteria'),
    'settings' => 'dlc_order_map',
  ));
    $wp_customize->add_control('dlc_order_description', array(
    'type' => 'textarea',
    'label' => __('Descrição da seção', 'leiteria'),
    'section' => 'dlc_order_section',
    'capability' => 'edit_theme_options',
    'priority' => '10',
    'description' => __('Coloque aqui a descrição desta seção', 'leiteria'),
    'settings' => 'dlc_order_description',
  ));
    $wp_customize->add_control('dlc_order_address', array(
    'type' => 'text',
    'label' => __('Endereço', 'leiteria'),
    'section' => 'dlc_order_section',
    'capability' => 'edit_theme_options',
    'priority' => '10',
    
    'description' => __('Endereço por extenso', 'leiteria'),
    'settings' => 'dlc_order_address',
  ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'dlc_bg_order_image',
            array(
        'label' => 'Imagem de Fundo',
        'section' => 'dlc_order_section',
        'settings' => 'dlc_bg_order_image',
        'description' => __('Place a background image in the order section', 'leiteria'),
      )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'dlc_order_description_color',
            array(
          'label'      => __('Description Color', 'leiteria'),
          'section'    => 'dlc_order_section',
          'settings'   => 'dlc_order_description_color',
          'description' => __('Changes the color of the description text', 'leiteria'),
      )
        )
    );
}
