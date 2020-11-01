<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a *sZeM}CPUed[>A33,7N3g#UP.Q(v.BQ *G=S<Qx<9OCB!=24u7GxWLR tnF5vv' );
define( 'SECURE_AUTH_KEY',  ')=zCcj@XE4M^RkF~hw^vqmOl^q/T}vvKpWmR;6>&$3=#m,*WdlJ2;IWXhs%h[.1X' );
define( 'LOGGED_IN_KEY',    'm9jje0$eE{IVl[&txWPr(]Fv$.tHHsPp$Sq(@iS 4TY:ltoU @86H9Yb00o?x iL' );
define( 'NONCE_KEY',        '$oT*}z#ZpkcV_a#;tU}Mk|oF; Fy}nx7CMvk@AuE.tL04OvB>2Y.U8w=*Jk+eow#' );
define( 'AUTH_SALT',        '&389[rDF;h3UU:~Kyot%{H-z`y/uzD$;$,_!:lg^Df>~t9ZvrPyY~ic[!41:$o.m' );
define( 'SECURE_AUTH_SALT', 'Z5a8@Nlf]y$}YgJoVEYEsqS:*ih>fQH4L JNX|nR:khfsXrRl~leVu2WHEvg)f3 ' );
define( 'LOGGED_IN_SALT',   'n~6]EJN#q~?Kk 5{m`K~JdWz{;`eGY> ex}p$!,07O`Jq@Am1z@_Ni>:<^9D@/QZ' );
define( 'NONCE_SALT',       'a7{Jh*n ;@ABW$k1CJo<%8!JhQKOl6|@Gv:>Q&7paY&O(ng6c,=%Aw!4{]C1>eH~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'DISALLOW_FILE_EDIT', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
