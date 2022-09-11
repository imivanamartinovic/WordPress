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
define( 'DB_NAME', 'imartinovic_roman' );

/** Database username */
define( 'DB_USER', 'imartinovic_roman' );

/** Database password */
define( 'DB_PASSWORD', 'qJb5e${K+W[0' );

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
define( 'AUTH_KEY',         'Iu=67opo#xYV)IJOc$f`lHkt;p*iFpB!x-W-gDdz~Nnv.~pMzq.N|VT9bejr-.%:' );
define( 'SECURE_AUTH_KEY',  'Rl*:NMdC=Yz({aHie6P~J+5qsG~`ghBZIYMoDgQ%7gi|EM?TUojzTf*!9INhrkW&' );
define( 'LOGGED_IN_KEY',    'AU#z]YFe`|/A]~-y+iO}(GKFp9e@%0v^vuMH>X}@ XbE-r1LolKplBqrjnU7^.?m' );
define( 'NONCE_KEY',        '.i}p(eb7)a [Q=:Z%}%ER83*_B 8=tR!Gh(BAswP`IzMJ^mqNp8HHu:z8%z1a.&V' );
define( 'AUTH_SALT',        ']/n3!HgOYY*L!dPL{)FLUGAV^:WpWrFu:lkJoC#k4v9DkFy0B6Md-D:iP@YB_G-h' );
define( 'SECURE_AUTH_SALT', '7mV*.@Mqu^@uahIp[rs71X1s2]-GC9dz*=2G4D-+oKYpA%>3h>/qQUO.9W{s&HST' );
define( 'LOGGED_IN_SALT',   'q:/-`.){$g+PkiTY2NFh&O>v%:[MlAovx`U+a^ s|1r[*VcFmbcHo,78c+q_(T$z' );
define( 'NONCE_SALT',       '$+9M_jF-{ kW!l(qnHE!)3T4MDo`la{Nr}3/{yg*z|ae7e~,.vh321|)0`>C}0pi' );

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
