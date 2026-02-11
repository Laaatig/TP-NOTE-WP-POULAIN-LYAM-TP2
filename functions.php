<?php

function outdoor_theme_assets() {
    // 1. Charger la police Google Fonts (Montserrat)
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap');

    // 2. Charger le CSS principal
    // On ajoute time() à la fin pour forcer WordPress à recharger le fichier à chaque actualisation
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), time());
}
add_action('wp_enqueue_scripts', 'outdoor_theme_assets');

// --- Tes fonctions CPT et Taxonomies ---
function register_randonnee_cpt() {
    $labels = array('name' => 'Randonnées', 'singular_name' => 'Randonnée', 'menu_name' => 'Randonnées');
    $args = array(
        'labels' => $labels, 
        'public' => true, 
        'has_archive' => true, 
        'rewrite' => array('slug' => 'randonnee'), 
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'), 
        'menu_icon' => 'dashicons-location-alt', 
        'show_in_rest' => true
    );
    register_post_type('randonnee', $args);
}
add_action('init', 'register_randonnee_cpt');

function register_difficulte_tax() {
    $labels = array('name' => 'Difficultés', 'singular_name' => 'Difficulté');
    $args = array(
        'labels' => $labels, 
        'public' => true, 
        'hierarchical' => true, 
        'show_admin_column' => true, 
        'rewrite' => array('slug' => 'difficulte')
    );
    register_taxonomy('difficulte', array('randonnee'), $args);
}
add_action('init', 'register_difficulte_tax');