<?php
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\Soulstorm\Local Sites\chic-dressing\app\public\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'IBqN%g9<|`d>_~X);UlD(*J>gQ:}rO((NtUp<}J%i$M}XHi85<J6GPU6o9n4#)]-' );
define( 'SECURE_AUTH_KEY',   'S?<&_ SG2!C%sC~X1Jg34t*:@zt$UJ-E[wmtU$#O,LeZ?Eeu6mI3VXR{h;99X&U?' );
define( 'LOGGED_IN_KEY',     'q<[wAvJiM-*%@#AnplAO0He[(|!%l^4#qb`)3%qT4/}7D0Itlo/k6A_$~g@1R ][' );
define( 'NONCE_KEY',         'B_,JW.O.#nE1YaTr{y8?)%~~[v6to]SGO]hd3CT_.>[iGwnEhM@e]~RGlQcO*?JO' );
define( 'AUTH_SALT',         'F2C?#8Vv$7[GQy}bJND28b54gqVt(?D/sPMPBW!+[x>Je:n*ddI68rWU@>8is7Nl' );
define( 'SECURE_AUTH_SALT',  'wA0I]2/eUxx$]sh~P8D{5%@,m;)/DLRRyAtMo`/3FVg ]bfm.kV})jf%O~<f$th,' );
define( 'LOGGED_IN_SALT',    ';AL<]s@dsF]^b)-.9>VE7zU>PyFPw%;XfAiA5K!O/lHV#B*q|d,llE*)|Sp4>{#5' );
define( 'NONCE_SALT',        'hU=F?w=(R^yPSrbSgI 6OMrujY|-v<kgs6w}8=Ae5zAl#QU_sgv(9(R%M5`4Q*Wo' );
define( 'WP_CACHE_KEY_SALT', 'Irt@DD,I$Nm crq/J[75iZhUCT83wot|S6(_;$,;k=<K0#!:<j9g7Jnc5&?4d#~^' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
