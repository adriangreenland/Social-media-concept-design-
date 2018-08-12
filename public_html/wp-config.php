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
define('DB_NAME', 'a-wor-qyz-u-179349');

/** MySQL database username */
define('DB_USER', 'a-wor-qyz-u-179349');

/** MySQL database password */
define('DB_PASSWORD', 'fJ!sREbMC');

/** MySQL hostname */
define('DB_HOST', 'mysql5.clusterdb.net');

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
define('AUTH_KEY',         '0m1MBiM(0atE(Tx4QGDiBtip9Zcso-kK(T1Z^#k=RLc7FxF5kHGmsIMbQ)HSP!Gy');
define('SECURE_AUTH_KEY',  'ZAQL!=n=cPwU8(0kt63#zW+o9vqz4OJG3Jufk_w((6cez0(q#ZOioA63Zac9JK5i');
define('LOGGED_IN_KEY',    'UaUuk4xGeLDgnYrp4kYE^WBVOCHai0/p2(57z80T74oinjdFAxuQwIQ(ddZwSiIh');
define('NONCE_KEY',        'isSIBF9L+1E#CYC4)FG0+=s#Us!4vh50tOBkZDomHsaqZ+NY65PLAR-ctfR^ai5F');
define('AUTH_SALT',        'ccqwQ6oKVT^MsbQ(IDS!^QH_V3nryDD-MyakI/yBG7_5bJ-7c^/2D2c89+dItYyl');
define('SECURE_AUTH_SALT', '=e4-LSWVYWNqj=98(WKqE4_ewg7V1gwiPT2CZlPOVPY3BO/f^93c1faHjBO_08o1');
define('LOGGED_IN_SALT',   'Vm=ebwi!YsdaG/(lvc4tZ#yWeLW=qE6XGUoWm6EPd+Cay6IG0+/wp-e/FRah4HH/');
define('NONCE_SALT',       'i((ZOu7c44)LH/JnPnBq_RGE+YX988od6kk7PG/+8osje=/qzvlrZzZuQ=/=W7-e');

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
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
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

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

