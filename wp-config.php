<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bu_301_bjd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';09CZL]&>=f_1e3B+:3s;:,bxl3[h~=,pxFdR60P;k!O&ev)A;~]6bKYa87rtZ k' );
define( 'SECURE_AUTH_KEY',  'd*drW1os#Ai[apacW< Ed4qL2@.6YT]ca;M&1+8rt5u;kwW?LN)9R*Q?8fr^-&`K' );
define( 'LOGGED_IN_KEY',    't Bw^VYYXVo<?pO4jl0vKC3vDsS*W7p]QL?1bY62,PPsqfl%2BJW&h|SkwD#,5wF' );
define( 'NONCE_KEY',        'mSY35yiy:zgG/-8|{tgA*dPe%I`g}M2Si]y:v:?ZSB?OI2NK HwakcHjcT&,``)x' );
define( 'AUTH_SALT',        't1qWW:MF:0&|^LJr:wl@vBqM4=Nb[nP>*Jcv}F)YQ=z<9$Al.+lpacH(VyfsKA,,' );
define( 'SECURE_AUTH_SALT', '}ob7..Ip3_m.TWS}t6}OA` <|lB?=7|r]QW@Ep/13ysqf,E)K>k!NcvK7[5QU<(<' );
define( 'LOGGED_IN_SALT',   '|$0J/VqAVRa:P/R[v;i8gKE.18>mM?!FsL:PM~!1CwV^^D0hK$}jw~B=[,*r<bku' );
define( 'NONCE_SALT',       '3UYtIGT(2:j0XeRD4.,:Wbl#anOiH.V6b6#LW@<=[YEfir_+SY6iW}EQ$F_j.sjH' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
