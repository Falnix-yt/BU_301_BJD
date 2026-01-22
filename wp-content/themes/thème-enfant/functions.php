<?php
/**
 * Activation du thème et enqueues
 **/

// Enqueue styles parent et enfant
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
    // Style du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Style du thème enfant
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}

// Enqueue Swiper CSS et JS + JS custom
add_action('wp_enqueue_scripts', 'ouvrages_enqueue_assets');
function ouvrages_enqueue_assets() {

    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        null,
        true
    );

    // JS custom pour initialiser le carrousel
    wp_enqueue_script(
        'ouvrage-swiper-js',
        get_stylesheet_directory_uri() . '/ouvrage-swiper.js', // <-- CORRECT : ajout du slash
        array('swiper-js'),
        null,
        true
    );
}

/**
 * Création du Custom Post Type "Ouvrages"
 **/
function creer_type_post_ouvrages() {
    $labels = array(
        'name' => 'Ouvrages',
        'singular_name' => 'Ouvrage',
        'add_new' => 'Ajouter un ouvrage',
        'add_new_item' => 'Ajouter un nouvel ouvrage',
        'edit_item' => 'Modifier l\'ouvrage',
        'new_item' => 'Nouvel ouvrage',
        'view_item' => 'Voir l\'ouvrage',
        'search_items' => 'Rechercher un ouvrage',
        'not_found' => 'Aucun ouvrage trouvé',
        'not_found_in_trash' => 'Aucun ouvrage dans la corbeille'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'ouvrages'),
        'show_in_rest' => true, // pour Gutenberg / ACF
    );

    register_post_type('ouvrages', $args);
}
add_action('init', 'creer_type_post_ouvrages');

// Ajouter le JS du menu clic
function custom_menu_click_script() {
    // On crée un script inline pour éviter de créer un fichier JS séparé
    $js = "
    document.addEventListener('DOMContentLoaded', function() {
        const menuDropdown = document.querySelector('.menu-dropdown');
        if (!menuDropdown) return;

        const menuIcon = menuDropdown.querySelector('.menu');
        const submenu = menuDropdown.querySelector('.submenu');
        if (!menuIcon || !submenu) return;

        menuIcon.addEventListener('click', function(e) {
            e.stopPropagation();
            submenu.classList.toggle('open');
        });

        document.addEventListener('click', function(e) {
            if (!menuDropdown.contains(e.target)) {
                submenu.classList.remove('open');
            }
        });
    });
    ";

    // On enqueue le script inline
    wp_add_inline_script( 'jquery-core', $js );
}
add_action('wp_enqueue_scripts', 'custom_menu_click_script');
