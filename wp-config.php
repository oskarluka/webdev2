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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'x`1DLB+j[/58:UK=op#+o~Ks?hbNU.:gfP0s`bl/3q?&bct:yh%N?Ni&I(XlPp*z');
define('SECURE_AUTH_KEY',  'lQ9b24bfHn)zddh0oa`nX9`q2oJ]6uLEQ=G5<eh7}$UdX+t6A-(a%BTZ*5mOpMVT');
define('LOGGED_IN_KEY',    'bH~Mnu-gH?g %pnUb+u)HNf)#TnuyD bW-;CId51xh]lCDJNn 4x^cromj%@blsg');
define('NONCE_KEY',        's. G>H,3QA6v`zH[bJ-#W.HgovL~~M&YaJ!kCUqg*g*4)%?s*7-o#cWS@1 V(8]0');
define('AUTH_SALT',        'gUKkV YFc|RnxA-M wvMQEGVIpgP-i!]t34(7=QW&qs<!.w;O`ho]jd)EoAbD=MO');
define('SECURE_AUTH_SALT', 'N%ZoUnNKMqORfjZpPYV^DI?^uEk^Ny`)<ziYBv4K!6GNNP+CEvY~[HA;]p`maGz{');
define('LOGGED_IN_SALT',   '^=w-~ycm*/|lGP|DOt2v)HJJ}V k+y d|x .P5&oP=XEs1;_wzK(#6#3WN.Cqk,B');
define('NONCE_SALT',       'KTq;!TUe:Qd.KpRn0rC.+lhEixw#^L]//yi>a+cMi8_]k=_37u`QFS!6X8p-QsyL');

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
