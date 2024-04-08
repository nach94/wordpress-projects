<?php
define( 'WP_CACHE', true );
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
define( 'AUTH_KEY',          'R]/X+<S%:?VAme;_n,H0jKt 8PUa[6I44G/M3k|keh{8mX#_>/7]/q*OQKu/VSRk' );
define( 'SECURE_AUTH_KEY',   '7.vw6pj*jSn|kZ1|VyS#1)~hu8N?m%Cp8$|3gByHQ,&Oh.n9*GCS}T]dDwOk<9%L' );
define( 'LOGGED_IN_KEY',     'k-3HEyc[`|&VH^CiIi}AhY#5{ne5E5oAn%1zu1un7qUzVZ?Auh<T_XsV& (=6^>p' );
define( 'NONCE_KEY',         'YHCA.TfYiar`1No.u:2be m79dId%H)$9]*2?Fls;<8^krt Wy~U#)zVUaJ:XQb9' );
define( 'AUTH_SALT',         'gz}-?e?G;u[MW!Ol.5/2[4zQy{pTsuT,&9bB9T_nuye%! i+J4@JZP1$J)ue)Ko^' );
define( 'SECURE_AUTH_SALT',  '[hvD9Us7Y7W3)KNQt3^{HLr+G7*h9OFJd?: ^6<I$sIj^{q>5ZXKW(sFMK)XZC&#' );
define( 'LOGGED_IN_SALT',    '=/jPxx=%K<o2YegQi:s W_U,q.EE8tZlv.0)NYF_C!)En_kH,sXGIgGof,S?t$U1' );
define( 'NONCE_SALT',        'g_2@QuO0dqOjF.xqB(WZEotaP)nlK4V[f5MDKjRn4w)p[k10n}l0Ce %JSxT@cb6' );
define( 'WP_CACHE_KEY_SALT', '7[d.Zfshm_x-P3pSP#&zWN6SpppR|].Kgq1+lY9pRP8o!!V~}1M!6a[oLOaN5Y2g' );


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
