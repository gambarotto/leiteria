<?php
function dlc_footer_customizer($wp_customize)
{
    $wp_customize->add_setting('dlc_footer_credit', array(
    'type'=> 'theme_mod',
    'default' => 'Desenvolvido por Diego'
  ));
    $wp_customize->add_setting('dlc_footer_color', array(
    'type'=> 'theme_mod',
    'default' => '#fff',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
    $wp_customize->add_setting('dlc_footer_title_widgets_color', array(
    'type'=> 'theme_mod',
    'default' => '#fff',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
    //Sections
    $wp_customize->add_section('dlc_footer_section', array(
    'title' => __('Rodapé', 'leiteria'),
    'capability' => 'edit_theme_options',
    'priority' => '10',
    'description' => __('Configurações do Rodapé', 'leiteria'),
  ));
    //Controllers
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'dlc_footer_color',
            array(
        'label'      => __('Cor do rodapé', 'leiteria'),
        'section'    => 'dlc_footer_section',
        'settings'   => 'dlc_footer_color',
        'description' => __('Cor do fundo do rodapé', 'leiteria'),
    )
        )
    );
    $wp_customize->add_control('dlc_footer_credit', array(
    'type' => 'text',
    'label' => __('Texto dos créditos', 'leiteria'),
    'section' => 'dlc_footer_section',
    'capability' => 'edit_theme_options',
    'priority' => '10',
    'settings' => 'dlc_footer_credit',
  ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'dlc_footer_title_widgets_color',
            array(
        'label'      => __('Cor dos Textos dos widgets ', 'leiteria'),
        'section'    => 'dlc_footer_section',
        'settings'   => 'dlc_footer_title_widgets_color',
        'description' => __('Cor dos Textos dos widgets do Rodapé', 'leiteria'),
    )
        )
    );
}
