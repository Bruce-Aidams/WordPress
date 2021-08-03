<?php
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
define( 'DB_NAME', "DMS" );

/** MySQL database username */
define( 'DB_USER', "admin" );

/** MySQL database password */
define( 'DB_PASSWORD', "bruceaidams931." );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'X79 ^V{Sr|E1~jGr{?#=o*WxO@ko;H*V0Z)D]g|`o;.W&NV4A8hk|L)2q/@fU{2.' );
define( 'SECURE_AUTH_KEY',  '_FjwtY<8]@}ss5SA5?s4BACU@FY7pHYlq|Q~Eqpzx7wrC_`a#CeAsL^1tZ3}AaQL' );
define( 'LOGGED_IN_KEY',    '6,YT(W}[ -ph]Szh`c7,_|GV16td#GeONno>nKKir)k8s|k:1i;%h&YUM~G~F}  ' );
define( 'NONCE_KEY',        '%`3x[Iu<uQDB?3KXhY<E8,ZMjZJ|@B(JEki[ZyRP<*]e~_vT0>]u|)4sH],(v}l|' );
define( 'AUTH_SALT',        '7,dA)(t[g0A;?@u/ZW/!4cb@1Zz0sP?Mk`lCLYJt{nOjD=4w3?+t<-3l:p+v0(6d' );
define( 'SECURE_AUTH_SALT', 'qRr=)x/#,hX;B|a6Vxe# *nH=hvE8wHxG?.0UC~dL6Fg m;%L9CfgwvVSQ=%G4P-' );
define( 'LOGGED_IN_SALT',   'ps(Z=1Qd%ZWLS1B6|q>u^ZzkmQT#0:+vN%~zY>cbm!/(T-wnqPay~|VB$]@&siPK' );
define( 'NONCE_SALT',       'sWH2|{X170cw5Ha?t8v|,~:CRNk`UzL{=4-ZtNyMSo?#XP^wVGR=4YiJTK+;5_!#' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
