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
define( 'DB_NAME', 'new_hifi' );

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
define( 'AUTH_KEY',         'EY?tHY*ykGW;$V[y|4b{*Nn@rOTlDa0+eM;VG}F~`c]Pg~*AFu/6tx~FLP@p]t6w' );
define( 'SECURE_AUTH_KEY',  '9(@c.X[;VlL_B3]q<][m}xP2yjLWK77JmC%hzF*rW2.irRMJ*p{B7g#E@w~`Wwh@' );
define( 'LOGGED_IN_KEY',    '*~}iHaEfN];WdURT;)mHJ]1 [xGlx2v6Qjc8/Nn6c:cf1bwo2-FtulP{@9u7!<#?' );
define( 'NONCE_KEY',        '`VidTz]biZG[tU}G71QdUZ?9gag5SXmI1e9E5j7l,zf Ri@kUH_$L(;Fb T13K$@' );
define( 'AUTH_SALT',        'YmHyUG[~|Id9GN)H2b{YuiA+syGbJa{7s)q@]UoiWrk$bJUh(N<)1]0Jb7=f.DYT' );
define( 'SECURE_AUTH_SALT', 'gCN<xbM9=R@K8jIXLRF8Z{2TK;hk@tJ@Wu/r1Ou[1}-t5IU8P!m&8?vM)OlS*|;c' );
define( 'LOGGED_IN_SALT',   'Q{,w`:.w+QBM,gEr.?MhrJy65y~~)y/$ax9RECe#3Mh~sC[-4<J7%WSv@F:4>z%>' );
define( 'NONCE_SALT',       '?Ni?x4r7{=^#^-=zb^1n`&OjP?}X0x*f=,-24`xE9V&=U65s#O:@bPu|!WPg?4^V' );

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
