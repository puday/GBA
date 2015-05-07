<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gba');

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
define('AUTH_KEY',         's`NJaL7hwd~jQFx)H1>_JD//]ZC-V HTs]7n5FyS@]JkK)PF~c`X(S^Ha@|B-n]w');
define('SECURE_AUTH_KEY',  '+)C*|CN|]V2rW|$|`Mk&YBn5-XNl.0YOsrs14n_rCfK`]#2kfO_Q:Q;-@#P7PXDQ');
define('LOGGED_IN_KEY',    'T^QzkEGgjo9zJ3|o%izv +3N2rx6VK-Q9^E{x-3[(3U7Cx-+ru|eShr)+ n6|VHh');
define('NONCE_KEY',        'bx(k|zTzR@`l4X?/,2#3c!0q_)6}=TZZ1yroU{y!/9+yX4-D4y/-9t4ncG4bA5_0');
define('AUTH_SALT',        'Pgi:oAdswN ~b[4#L#YyLfNF7pbHd9&Dw5owC-!~,]c (8wgcgeZ$%]>/HZ@*45#');
define('SECURE_AUTH_SALT', '-JY-f2?s9O[K`|vW(sQ:5ZIP> zyGa3Jw#[W}(9ej40@QB5F`zo--75X3bzH:9vH');
define('LOGGED_IN_SALT',   '>PD,Koytf,8|C-7LD;~eN5+:Po9N&?J$g1K$=(TPSiiWCvj7w}kmI|aWW=b0+BA3');
define('NONCE_SALT',       'o-MF6Au`=*}>7+4xV<g~AtlSvfWtnAzS0aMU[A6m}90UdJ-)gq>r+RpX-~!CEl9r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gba_';

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
