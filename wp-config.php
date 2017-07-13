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
define('DB_NAME', 'WordPress Theme Development');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'HaEbMOVBME3UohGZqvR}3?hNH)GS*+>rGnFIg05A5#+~W496jH5[.HZn-,v.?up|');
define('SECURE_AUTH_KEY',  '=NyM Nh Cc0Zqn*A<`uKg|/MyUun`3%X)y7A9,>8#=>G%.E_W{4o)U,*Tr.{M_8T');
define('LOGGED_IN_KEY',    '!u^o=^<C7nekz!)xP2KmGtV@M!nXe;tcoR5e?86]?`K/mlJh|H}@7j%3QuZB.qUz');
define('NONCE_KEY',        '8SC[/_w**H)O~`cQUK/F+xqT9;ZB[@h*zUKooM)GEajPj^hFLuSdg@1mYURK)C*a');
define('AUTH_SALT',        '+B%0zq /m]`3HSF<8h;l|4x5qrz#v$4rCu^kEqD66nZOWNEA y<T%*MI:s0i[5A_');
define('SECURE_AUTH_SALT', 'eXdZRF<Idgf`l%q`6M77PCe<t{=O2[r?h0@Xk+FMS6@9XAb:U>vKi , eh3Z(WTT');
define('LOGGED_IN_SALT',   '7krlbbV+~({VQnA 8,aG-j.^aJ4f^<;xfzu/i68-chu UT({CfNd 6fXpjc(W|^+');
define('NONCE_SALT',       '#V5MYMg^]{)nuN$dDXQS9lj%KMVHkr[}CQL8.^)CJ(t&K?or$f|YxCr@[0WrrJf+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
