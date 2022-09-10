<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/** Enable W3 Total Cache */
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'imartinovic_digitel' );
/** Database username */
define( 'DB_USER', 'imartinovic_digitel' );
/** Database password */
define( 'DB_PASSWORD', 'Vj.LsVwNwB?3' );
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
define( 'AUTH_KEY',         'iMMb|<p.k.|t6&P9oaIklSb3pnv}uDcz{aMN>y#1AMGKy{=jyqpN<0Pvzib|(CQT' );
define( 'SECURE_AUTH_KEY',  '/z&0BEF$KU+G;u<BU|O^L?Q-p,i/[[=VLD/BRKsmL:Zj_ 9U|5dfQr ~r -g,Z#w' );
define( 'LOGGED_IN_KEY',    'M?<PKmVAF`s>aHD4{NG#*^v,fMK^h.LN^$dIFHXQGv&Q04_pulV.3F!s<Y9>vI2t' );
define( 'NONCE_KEY',        's@U1iO46Q}eE?#7jU5~S(y/02?37Nzg-0tM,zlt2:rx9W@$A(1E58AckL^8lvZoB' );
define( 'AUTH_SALT',        'J]ZNysDgjXm!K!c6j#m)Up@9YpU}o@R82-eP#^[RKElr?cw(l?B>NoTVa{Dz-|AX' );
define( 'SECURE_AUTH_SALT', '}Dk,U=U55SmKRqYOd:/e*e}ze<dlFfLolUzLi<A.[+{SaGg0X*`;:#&fsrAo73s8' );
define( 'LOGGED_IN_SALT',   'M)@6ta*_w>6kisFLr2_(tih7jKBikLBkMv^N}/5;)-&1mG4a?y)C7pU_!:vWU@Y:' );
define( 'NONCE_SALT',       '>r9g)g.sf(j0;fVC)6I~YJSxA}(c=8pxEn:c_a(/o?[u]N^8/*h*kD[Z#m$L7r)`' );
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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