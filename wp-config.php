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
define( 'DB_NAME', 'notorious-design' );

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
define( 'AUTH_KEY',         'F`?&eNGLUNb c.^lV,vtRzh#0j$YDA692-;BKfz:&E$08fi3wiJ9VhP#CrTB.zG+' );
define( 'SECURE_AUTH_KEY',  '!MWdL`7*C~tR`[bJ#(]+<ew&zIOlxA7o};WuzF=^DSYW{:uiN*7%[{afSDA9MDT0' );
define( 'LOGGED_IN_KEY',    'Ic}zJFy~~Drw/.)~1HiTw{}U(X0L}V-h>aWbH(>+(!| sXCvuYEt[MJS@:B1x?xA' );
define( 'NONCE_KEY',        '+D0cEI)x}X_b9;vPp7K]y_p2HQ,tq]sM]!1{o0YGV1WlXg0V95em<7;GG: }={,$' );
define( 'AUTH_SALT',        't|S1`id!k&f{zW2kEXx ?`BGaKE7:qky*LD J_1 vz0(H$K2]DB1b[XvAC}UYW_5' );
define( 'SECURE_AUTH_SALT', 'de{)g,!0`.<Fs+*Uk1`v^<<9CO9RjuFHL 7HOr@c<kbQVX|JOh9y6`P=q@O$&oqe' );
define( 'LOGGED_IN_SALT',   'Ae%B>dZ_nc9r*LV~M2SM(b}h=f~chI&a&pxusB)%1POZaGvC?H}[HA:nw$.`3s%r' );
define( 'NONCE_SALT',       'c@oS3r/r1i!nBZ!PY)gkk;:#-{f)X6i+M #]-PqV-~hjLj5ROi_/X()]<(.Og@p?' );

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
