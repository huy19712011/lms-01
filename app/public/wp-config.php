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
define( 'AUTH_KEY',          'vF+U]h<xV::-]1g]4IDG)F{[+XgPS?+/IsE4lC}X+pTRdUP;n$5msi&n/f({uT5f' );
define( 'SECURE_AUTH_KEY',   'i@!|15>oOK]UE, wi7e<rhKok(2 ]v>U_)E5~p[{UTU?<4h^RJPD[<>9jW[1MsqG' );
define( 'LOGGED_IN_KEY',     '+v(|;)s>b:[Z?ndkE=Wr50~~,A!;7+eWA:*gyuc=h|kRwSl@DB:];L4j|ke,o mD' );
define( 'NONCE_KEY',         '$S~P[&02!.L)*TNuEi}qEpUeX6{iy</&qxY-pG9c7Py/u7Z~V9&;8l=`@@Js{s|+' );
define( 'AUTH_SALT',         'fy,N#rDA>r~9*|B(xy-Y39A2A:W[{:]u4-Tg;?T74p;vn+3N)fmT~$,3&?]n]4yG' );
define( 'SECURE_AUTH_SALT',  '4~v*f(F{!k8n-_|[bFM2x6S{F^wCJJUb]G D2=UyR.1`No[Nrk:BW$,t&h|gPx>`' );
define( 'LOGGED_IN_SALT',    '!NwE!NI.c8-^p_q?{f<I0),;7}WN 9Ii7W?]Fzr`Dj}Wa<+{FhZ^jU_5a:O{e|&,' );
define( 'NONCE_SALT',        '4pu$sPxw}YZ/cOI@|::K<S=W,3m@jICDx( yxel}qv9J|G{}ik1d0x]ulk!!I#]:' );
define( 'WP_CACHE_KEY_SALT', 'l:?owSiCtYUG5+GKPo0L$?qO*^~!cRDQ;Cikar/!E`$L])uW4f1|SA?)#PsVdW> ' );


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
