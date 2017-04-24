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
define('DB_NAME', 'wp_myblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1.yjhd.2');

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
define('AUTH_KEY',         ':aK.lF-8Bk`?Sdh:d-5W#(bd$dwX3q)QLOSqLkQ5as0g6qTkg]Xr(}gig9AlziHK');
define('SECURE_AUTH_KEY',  'zNK ]XenZ]fYWiiFXRs{b)NOw^6lLIVBT,4dUkb.a=v#/l(#hMiT^NhduwJi:Bte');
define('LOGGED_IN_KEY',    '5^T.T{yvwKD_M4 r%*,yR;rX1%Olid{xV6VAI&WA`v[=2jE.#vsH3VrnG]*gj^VZ');
define('NONCE_KEY',        'i6G>d+({b<M:=l}GD4WsZ -3?4k!3jSS;:c`@Fh#o3Z&=<?DaZMw/wepV.6qsN;d');
define('AUTH_SALT',        'Z4woO!*K]Y<]kW^?oRe:a@`zQ#|?D+8HkN]H}KQZXSr{6~eu.KvglO}J_0@)]/BD');
define('SECURE_AUTH_SALT', 'LMl+y.6c&aeiBb721-al,z>|[.D!yW6^1ayi&)LC5~Ll]BdG]IVo!#1U!u}4P@GB');
define('LOGGED_IN_SALT',   '?*6y(2,R{Idkx%8wg1`p+so(9ta RtYD}z^D^NtCWiOdHrKTrjR% MVd#j|<JDFk');
define('NONCE_SALT',       'Z*ybOX`g 9oh]:rZRQRXu@nb>eCh_>^0)Zp4o .GWjIJ1pRw)D]KTr1>i-G&a2l%');

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
