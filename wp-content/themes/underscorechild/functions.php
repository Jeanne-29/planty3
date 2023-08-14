<?php

function theme_enqueue_styles(){
    // Chargement du style.css du thème enfant 
    // wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/child.css', array(), filemtime(get_stylesheet_directory() . '/css/child.css'));
}

// Action qui permet de charger des scripts dans le thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

//fonction qui permet d'enregistre les emplacements du menu de navigation par rapport au thème
register_nav_menus(
    array(
        'menu-1' => esc_html__( 'Primary', 'underscorechild' ),
        'menu-2' => esc_html__( 'Second', 'underscorechild' ),
    )
);

// Ajouter un hook au menu de navigation
add_filter( 'wp_nav_menu_items', 'ajouter_lien_admin', 10, 2 );

function ajouter_lien_admin( $items, $args ) {
    // Vérifie si l'utilisateur est connecté 
    if ( is_user_logged_in() && $args->theme_location == 'menu-1') {
        // Crée le lien vers l'administration de WordPress        
        $lien_admin = '<li class="adminmenu"><a href="' . admin_url() . '">Admin</a></li>';
        // Ajoute le lien à la fin du menu
        $items .= $lien_admin;
    }
    return $items;
}

