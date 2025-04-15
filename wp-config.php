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
define( 'DB_NAME', 'minty-mint' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'k;xL#%u48KkgTu?!Y5|y(09/ohYIpU8o=bmC1Dlm.bFtl;NO{WH&wE_HKWwoz)IF' );
define( 'SECURE_AUTH_KEY',  'F1m1aZw6vbpSAp (;(T(`fEo:X{:k;e:bsU+d:SF+g] R%1U[Kg4H)FH)O)[`%qZ' );
define( 'LOGGED_IN_KEY',    'j:a(0VNghOTMEb?Thn@;FhY2+yFNeSzS)N?T:ieF^9KH+F-:+oE6iE- #I]9<acH' );
define( 'NONCE_KEY',        '{v#cEPqAR9wsHL2ox4;wJ$N{A8@fBSbJ8C2~Bq7doQp.jbYJahL^0KMVCblWT5hI' );
define( 'AUTH_SALT',        'GHZ@hE`^S:4WHc2Fl9VWodjH8:gv/OZ<s3/&P(2F_%bF@3JO>0?LK]X&^gL]SVWa' );
define( 'SECURE_AUTH_SALT', 'S(BJ|,5qzqq>.ylQi#My6mrlVg&BcY-+ckJ).Ry)]l|N;{+DtuPco.=`!.A*J.[=' );
define( 'LOGGED_IN_SALT',   'Q<V$rlcJU{tu4^Ol$(vv)p}K>RQpt}Rgbe58cI[l$+I9h*wFB?y@+Iics%VS:)-y' );
define( 'NONCE_SALT',       'rB:P(iazB.+ioBxH.R;iWSB|o6 )0Fz1a7G7c|+j.DUuB3#TnfEcW9L4_SPe0|3Q' );

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
