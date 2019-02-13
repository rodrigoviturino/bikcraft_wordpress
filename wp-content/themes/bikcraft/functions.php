<?php

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus'); 

// Registrar Menu
function register_my_menu() {
    register_nav_menu('menu-principal', __('Menu Principal') );
}
add_action('init', 'register_my_menu');

function my_custom_sizes(){
    add_image_size('large', 1400, 380, true);
    add_image_size('medium', 768, 380, true);
}
// Adicionar Ação
// Essa ação só vai acontecer quando o INICIAR O TEMA
    // Quando vai acontecer?  // Ativar qual função?
add_action('after_setup_theme', 'my_custom_sizes');



?>