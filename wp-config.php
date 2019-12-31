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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cinamawa_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'wMCWfr?,(r8M;(]G9u_GOO_@fBoP[:c[a+*f2?}@YZ(#g)0`xXEIKtD<gc<G9n@]' );
define( 'SECURE_AUTH_KEY',  'B&@n}LEo#vTk>WAhjhc7;h*t5yrQsjk!rIeaL6`k?&v!k|XFKb|Q,R2-1#lwX=bs' );
define( 'LOGGED_IN_KEY',    'sD+mNjl&ezs2C[:O{5hYl<ScxY7YFu3W.v<zG--Tc@^a+2|2cG_}fB&,]]S5}q/`' );
define( 'NONCE_KEY',        'X_U:pB_Vl#4TywWaHGq 5V},idM(Gz+!q9AI8uC$I:e$mmX^1T]6#bsq:Zs.&ou7' );
define( 'AUTH_SALT',        '_w]2&XPK!#6K$s0asi( lYZ|0o}a>*IPrQsi.Roi770LEv1DHZO_?mpEnOGV<jRK' );
define( 'SECURE_AUTH_SALT', 'MF@PA#.k@nli3J{jrFfx)zZ6VS=^B}OF<Ww2Aays?J<74_cJS9GD{*]5rDVz~4PS' );
define( 'LOGGED_IN_SALT',   'W{tYF_+Xp#M,b;Iwpn<U`h8~d^?!6kbwPnTZ!d0csw8u0{P3pKsjVv+R*xN)x9c#' );
define( 'NONCE_SALT',       'mlBa2}(Tz$ZqvU/<?mI,M,>8%s#v::0VVl|RAW(l-Qtk7 8pjL8/]VP=l[,hn@:D' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
