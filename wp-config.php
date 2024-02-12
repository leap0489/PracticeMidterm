<?php 
define('USE_FETCH_FOR_REQUESTS',true);
?><?php 
define('WP_HOME','https://playground.wordpress.net/scope:0.5177155933056601');
define('WP_SITEURL','https://playground.wordpress.net/scope:0.5177155933056601');
?><?php define( 'CONCATENATE_SCRIPTS', false );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY','3-nd$*lE@qibYG?6P#8sLxUM(?4[Cs_ygiZdK##p');
define( 'SECURE_AUTH_KEY','d^x%@i0o@<1o(ahmLY2u.d2FUW>!=@>^SN@6X*W.');
define( 'LOGGED_IN_KEY','oD,V>hTI7BzUwfZWLY$Lz1eD9>u*>9So(s2H+Hau');
define( 'NONCE_KEY','cAAFx-oVT,_nA4d[#EAvloK%qp&m-vkGhZP_$T/F');
define( 'AUTH_SALT','2NrQ0MaMLg^KKC-JeJ*Yj6pihnEZ9A&Ibw$a2iDG');
define( 'SECURE_AUTH_SALT','DHvQWMA,yPeGy_aiw^L12Qa5=tDE?N+?lRXl+=Mf');
define( 'LOGGED_IN_SALT','t,RF8IvH[pFBbEuZ@WayaT.0*L3JUG)S/z-/]ru7');
define( 'NONCE_SALT','GpaiUBnk#t.?yMEW$9NaJ=<W(I/rrh^0WNNLU5k&');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
