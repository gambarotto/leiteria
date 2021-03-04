<?php
// function get_hero_images()
// {
//   $array = [];

//   if (get_theme_mod('dlc_image0')) {
//     $url = get_theme_mod('dlc_image0');
//     $array[0] = $url;
//   }
//   if (get_theme_mod('dlc_image1')) {
//     $url = get_theme_mod('dlc_image1');
//     $array[1] = $url;
//   }
//   if (get_theme_mod('dlc_image2')) {
//     $url = get_theme_mod('dlc_image2');
//     $array[2] = $url;
//   }
//   if (get_theme_mod('dlc_image3')) {
//     $url = get_theme_mod('dlc_image3');
//     $array[3] = $url;
//   }
//   if (get_theme_mod('dlc_image4')) {
//     $url = get_theme_mod('dlc_image4');
//     $array[4] = $url;
//     //echo '<div style="background-image: url(' . $url . ')"></div>';
//   }

//   exit(json_encode($array));
// }

// add_action('wp_ajax_get_hero_images', 'get_hero_images'); //registrar função
// add_action('wp_ajax_nopriv_get_hero_images', 'get_hero_images'); //registrar função