<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body id="kubio" <?php body_class(); ?>>
	<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	} else {
		do_action('wp_body_open');
	}
	?>
	<div class="site" id="page-top">
		<header class="mobile-header">
			<div class="mobile-header-top">

				<div class="header-left">
					<div class="menu-dropdown">
						<!-- Icône menu -->
						<img src="http://localhost/BU_301_BJD/wp-content/uploads/2026/01/menu_blanc.svg" alt="Menu" class="menu">

						<!-- Sous-menu affiché au clic -->
						<ul class="submenu">
							<?php
							$pages = get_pages(array('sort_column' => 'menu_order'));
							foreach ($pages as $page) {
								echo '<li><a href="' . get_permalink($page->ID) . '">' . $page->post_title . '</a></li>';
							}
							?>
						</ul>
					</div>

					<!-- Recherche -->
					<a href="<?php echo get_permalink(get_page_by_path('recherche-2')); ?>">
						<img src="http://localhost/BU_301_BJD/wp-content/uploads/2026/01/loupe-blanc.svg" alt="Recherche" id="loupe">
					</a>
				</div>




				<div class="header-center">
					<img src="http://localhost/BU_301_BJD/wp-content/uploads/2026/01/LOGO_iut_dijon_auxerre_nevers_blanc.png" alt="Logo IUT" class="header-logo">
				</div>

				<div class="header-right">
					<img src="http://localhost/BU_301_BJD/wp-content/uploads/2026/01/compte_blanc.svg" alt="Compte" class="compte">
				</div>

			</div>
		</header>