<?php

function theme_enqueue_styles(){
    // Chargement du style.css du thème parent 
    // wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/child.css', array(), filemtime(get_stylesheet_directory() . '/css/child.css'));
}

// Action qui permet de charger des scripts dans le thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

// permet d'enregistre les emplacements du menu de navigation par rapport au thème
register_nav_menus(
    array(
        'menu-1' => esc_html__( 'Primary', 'underscorechild' ),
        'menu-2' => esc_html__( 'Second', 'underscorechild' ),
    )
);

// Le hook pour ajouter le lien admin dans le menu

add_filter( 'wp_nav_menu_items', 'ajout_admin', 10, 2 );

function ajout_admin ( $menu_items, $args ) {
   if ($args->theme_location == 'menu-1') {
      if (is_user_logged_in()) {
         $menu_items .= '<li><a href="http://localhost/planty/admin/">'. __("Admin") .'</a></li>';
      }
   }
   return $menu_items;
}