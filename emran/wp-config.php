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
define( 'DB_NAME', 'emran' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '0792290321' );

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
define( 'AUTH_KEY',         'P^+=E<!W^dii<*_{Q]UB{n3Q.eUxV[Sh^6gs2g=2H^;YANfXK,_,Q}8zNaN^(:*#' );
define( 'SECURE_AUTH_KEY',  'j{67Pjk] t#kHUy[8k6yU~c.)G1$1G5K/&mY}QgI_#VK=9;3}*rw7&v]>>,V[>9o' );
define( 'LOGGED_IN_KEY',    '|zm`S;}:j:k$#kbVb~+S;U`{:9bSB)vO9I@tU5f;Mx%yJG1[B0^dy6>;W@`NU_%H' );
define( 'NONCE_KEY',        '35P!^Iau}EWNt=%b;? 7~A@y2Bb+C(5WWlzQ[!,PBTSLo)*_(#7R,@*>M5_m|P`m' );
define( 'AUTH_SALT',        '_!S{Zkx->.5w>:p3(rapkVa$<6>|KEBs4X[/0bND2f>E{^QVZ4zb9GtqNjO:*#hH' );
define( 'SECURE_AUTH_SALT', 'y713)$}kC,M[TB<6;}!kv-O4zgx^1F6ceAw1.<$!w9T={pU-@lEw,g(*aep+`iA]' );
define( 'LOGGED_IN_SALT',   '+JlHVG.Y#G^39~A&V+u[F%2lEaVO1h1jVX=X?5Ee0Q.$5X#&t+%$VUQxD T|{MRu' );
define( 'NONCE_SALT',       'q%GB?nlxyS4<z~vmsG! 4@ALt^@ epb-^HTXGMliycVd@f3:up?o]tq=d6.R.$w>' );

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
