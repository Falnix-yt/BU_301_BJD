<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// style du thème parent
	wp_enqueue_style(
		'parent-style',
		get_template_directory_uri() . '/style.css'
	);

	// style du thème enfant
	wp_enqueue_style(
		'child-style',
		get_stylesheet_uri(),
		array('parent-style')
	);
}

add_action('wp_footer', function () { ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.ouvrage-swiper', {
        loop: true,
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});
</script>
<?php });

function ouvrages_swiper_assets() {
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'
    );

    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        [],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'ouvrages_swiper_assets');

// Création du type de post "Ouvrages"
function creer_type_post_ouvrages() {
    $args = array(
        'label' => 'Ouvrages',
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'ouvrages'), // pour avoir /ouvrages/nom-du-livre
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
