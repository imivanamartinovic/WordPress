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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'imartinovic_trpkovic' );

/** Database username */
define( 'DB_USER', 'imartinovic_trpkovic' );

/** Database password */
define( 'DB_PASSWORD', 'bvlbrnSbr5s)' );

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
define( 'AUTH_KEY',         'W68^y}Sl[_q- C-C>Izhqo^wSkSaa+/|v^=nJugyUj@DIA90Nvu5hYAS;|bo!0)Y' );
define( 'SECURE_AUTH_KEY',  '<*td8u6X}6nJO/t^zelGxu7NhT7q*bS@R[Ie:0t.# vh#&@sllCkR &$1=kKERVG' );
define( 'LOGGED_IN_KEY',    '#/UPRXp||L=cE}MSa?5pNEEjcKzw =[-9_PxcOofaTz4A:B^zzvf@vMpOP_gO_*_' );
define( 'NONCE_KEY',        ' wn[c1@g>~<r)57MV5J1d~c`BE,U%{c`FVkB7@-hAU<Q&))3;!}_P0wTdBBZY%! ' );
define( 'AUTH_SALT',        'JhAX!B^:RLoBwmgbgbB45kWqw$w6QSN$F*T&#nHr$~i$UNyxz1YQ7_Zkk`$+wZ}w' );
define( 'SECURE_AUTH_SALT', 'Q=IL&Ny,J#4O2)jvcG%k4>t3Oa!^+PSU]?NPacIZ?dFoWyLU[O(x+F{|k-j!nNv{' );
define( 'LOGGED_IN_SALT',   '~G}g)} #M,vW;|ON`CI??dhB^[%;{S7(s+cqb1fWt.rxD:OboII#]?*ii2!?$GH9' );
define( 'NONCE_SALT',       'slFnqe9q#EICIw+SZAz3H+5Dy7MZ0BBFj>27+*n]XOBN,/smmX(=+VX%Cj44pO5K' );

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
