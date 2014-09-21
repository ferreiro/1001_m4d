<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jorgeferreiro');

/** MySQL database username */
define('DB_USER', 'jorgeferreiro');

/** MySQL database password */
define('DB_PASSWORD', 'Mmadrid1203!');

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
define('AUTH_KEY',         '|ch6w.WJr%-9FqB:E(jMaAvYy^z3Z+!LAn~Uz=nn I+s]fo*H>GevN]J$ro9g >l');
define('SECURE_AUTH_KEY',  'kV]S++vH6+IGDYTz-SjYnSye(Q]d8xOBL74}s$+7H+qGU&^bm! Ro!aq 1ND[`&*');
define('LOGGED_IN_KEY',    '8eUET|{VT=|&O*t3u M6<4AgF/@r<CX&?YRpY&!8k-Y/||&{-^K/9Kb[#7OYt]4>');
define('NONCE_KEY',        '`HK=l4|-y7M0v10AXi2Of0&TxZn1|L:An`/1C}9bX2-8$E)j4%-`n+VOI}}91J5q');
define('AUTH_SALT',        'U{P=*U_W~=.$///eA{XM`ac]K?1(pfjr&+wcuBmXFOB1L/#|O D hSEMhHjK5GH;');
define('SECURE_AUTH_SALT', '2r&0^<++=zE8fT0FRen3r/]s|A[$<&pS?z>k1?pSr{9$i4CSByP~m0rnkoyV0-bP');
define('LOGGED_IN_SALT',   'naF6ZTqt7),j?(O--2E*Ze^+R?D-_Y7nG5ProPDzlHLXR1;U(.6C{0X7*jx7nq|*');
define('NONCE_SALT',       '@;A^HUN-FVTe+aMYiqm@E~Rn|jJ-]},9Qs77,UO%T;F8q|_D}WnxpiOsa,./99}-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
