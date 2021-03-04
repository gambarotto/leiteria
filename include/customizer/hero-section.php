<?php
function dlc_hero_customizer($wp_customize, $id_panel)
{
  $count = 0;
  $limit = 5;

  //Settings
  while ($count < $limit) {
    $wp_customize->add_setting('dlc_image' . $count, array(
      'type'=> 'theme_mod',
      'default' => ''
    ));
    $count = $count + 1;
  };
    $wp_customize->add_setting('dlc_title', array(
      'type'=> 'theme_mod',
      'default' => ''
    ));
    $wp_customize->add_setting('dlc_subtitle', array(
      'type'=> 'theme_mod',
      'default' => ''
    ));

  //Sections
  $wp_customize->add_section('dlc_hero_section_section', array(
    'title' => 'Hero Images',
    'priority' => '1',
    'panel' => $id_panel,
  ));

  $count = 0;
  $limit = 5;
  //Controllers
  $wp_customize->add_control('dlc_title', array(
    'type' => 'text',
    'label' => 'Digite o título',
    'description' => 'Título que aparecerá sobre a imagem de fundo',
    'capability' => 'edit_theme_options', 
    'priority' => '10',
    'section' => 'dlc_hero_section_section',
    'settings' => 'dlc_title',
  ));
  $wp_customize->add_control('dlc_subtitle', array(
    'type' => 'text',
    'label' => 'Digite o sub título',
    'description' => 'Sub título que aparecerá sobre a imagem de fundo',
    'capability' => 'edit_theme_options', 
    'priority' => '10',
    'section' => 'dlc_hero_section_section',
    'settings' => 'dlc_subtitle',
  ));
  while ($count < $limit) {
    $wp_customize->add_control(
      new WP_Customize_Image_Control(
        $wp_customize,
        'dlc_image' . $count,
        array(
          'label' => $count + 1 . '° Imagem',
          'section' => 'dlc_hero_section_section',
          'settings' => 'dlc_image' . $count,
        )
      )
    );
    $count = $count + 1;
  }
}
