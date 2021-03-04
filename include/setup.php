<?php
function dlc_theme_css_js()
{
    wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');
    wp_enqueue_style('googlefonts_css', 'https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap');
    wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('theme_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '', true);
    wp_enqueue_script('heroimages_js', get_template_directory_uri().'/assets/js/heroImages.js', array(), '', true);
    wp_enqueue_script('formscript_js', get_template_directory_uri().'/assets/js/formScript.js', array(), '', true);
    wp_enqueue_script('header_js', get_template_directory_uri().'/assets/js/header-scroll.js', array(), '', true);
}

function dlc_after_setup()
{
    add_theme_support('menus');
    register_nav_menu('primary', __('Primary Menu', 'primeirotema'));
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
function dlc_widgets()
{
    register_sidebar(array(
    'name'=>__('Primeiro Rodapé', 'leiteria'),
    'id'=>'dlc_footer_first',
    'description'=>__('Rodapé início', 'leiteria'),
    'before_title'=>'<h4 class="widgets_title">',
    'after_title'=>'</h4>',
    'before_widget'=>'<div id="%1$s" class="widget %2$s widget-footer-first">',
    'after_widget'=> '</div>',
  ));
    register_sidebar(array(
    'name'=>__('Segundo Rodapé', 'leiteria'),
    'id'=>'dlc_footer_second',
    'description'=>__('Rodapé Meio', 'leiteria'),
    'before_title'=>'<h4 class="widgets_title">',
    'after_title'=>'</h4>',
    'before_widget'=>'<div id="%1$s" class="widget %2$s widget-footer-second">',
    'after_widget'=> '</div>',
  ));
    register_sidebar(array(
    'name'=>__('Terceiro Rodapé', 'leiteria'),
    'id'=>'dlc_footer_third',
    'description'=>__('Rodapé Fim', 'leiteria'),
    'before_title'=>'<h4 class="widgets_title">',
    'after_title'=>'</h4>',
    'before_widget'=>'<div id="%1$s" class="widget %2$s  widget-footer-third">',
    'after_widget'=> '</div>',
  ));
}
