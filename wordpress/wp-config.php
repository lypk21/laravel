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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '>V=+kc~VI{p3cu(ilaO~ fCHa/%Z:1[R/HBb$ZB@<X9jD,VkZe{!|:X!u1grJh6.');
define('SECURE_AUTH_KEY',  'UjIxQ+8_K#)2ao/i>b<GJ>.YB:@tY$Lsf4v7@.eHh+TjJkj[%ZvSZ!rL;o6_?cIH');
define('LOGGED_IN_KEY',    '$Cc%fp AB1lQ8]Hhxj/V{bRKU4/gLq4A*N|]Xf-/KkE.`;h(fX6;a7YJJLM6v6[O');
define('NONCE_KEY',        'h7% x,y_sxhVLHC=Y^`N&uEKH-XA^h<c1V+LhMc@@G]-I}Xo^$iNk9ialX<|Llsb');
define('AUTH_SALT',        ':h~Gt:x:U!&)-uq|#r_UF#wpUQ@JQ?c$Mj42l9)nDnJ.//Y&^/$ Sk,?rXZnFEpw');
define('SECURE_AUTH_SALT', 'H^+zh x#se:Wr:LN724qh_2H6Rm.jJrvW0v.vBV/,?XQLAK|sDzF<H{-J=VyR!PQ');
define('LOGGED_IN_SALT',   'ku.Q[6J?P_u2^zhix@er}.R@p{$YYQBK#@EX8@_~#3OZr=yaF2O_^bv&xjZ;N(`*');
define('NONCE_SALT',       'v[:DWj~*%@`HdLrhFGNi6oEI@-bdG4Z$ak^Bh+8GDr[-?Vc~Ynh6.O&,%RzXg@Oo');

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
