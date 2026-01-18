<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body id="kubio" <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
?>
<div class="site" id="page-top">
<header class="mobile-header">
	<div class="mobile-header-top">

		<div class="header-left">
			<img src="http://localhost/BU_301_BJD/wp-content/uploads/2026/01/menu_blanc.svg" alt="Menu" class="header-icon">
			<img src="" alt="Recherche" class="header-icon">
		</div>

		<div class="header-center">
			<img src="http://localhost/BU_301_BJD/wp-content/uploads/2026/01/LOGO_iut_dijon_auxerre_nevers_blanc.png" alt="Logo IUT" class="header-logo">
		</div>

		<div class="header-right">
			<img src="http://localhost/BU_301_BJD/wp-content/uploads/2026/01/compte_blanc.svg" alt="Compte" class="header-icon">
		</div>

	</div>
</header>

