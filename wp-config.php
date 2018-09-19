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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '4f65282b8ee0db42310ef43931cf3d05f8d815c25b37f6b0');

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
define('AUTH_KEY',         ']82_?Q?*[UW/4%s0;t+~M|a2 qSS[j>mfXa^`,)NsO[(-+XN~jovXH+=f!9S3/g ');
define('SECURE_AUTH_KEY',  'rl1eqr9%IN~3bWYh~yW 0v9X]:G|OswSM hK9k]XWN{[bHlucQo)gNuMJwSW}zF7');
define('LOGGED_IN_KEY',    'o[* ?X]0g~(ts%fQZPWpz,*JzO*$#l! s`Ed!^zZ}mIv{+j7Q!H};=jUH,!Xz?7J');
define('NONCE_KEY',        '+dX@-%n1i(Q]UKXKEkk2h^&$~+^{}F9gpD>BC#|M1+TRHg+lH<zb^kEOqUV-de5$');
define('AUTH_SALT',        ' nuLf&A6kT$qH8/T}U-]wT!UR}%?5T9ty,}bSzgbeABVkKeW6ehBJ@_- f:~y.>[');
define('SECURE_AUTH_SALT', 'j^MGEUs6u1X6c#v*_u]V]Y%a-i29?d*=[+e!=MGk@#&lG!A=)n {S@^T%g]56b`U');
define('LOGGED_IN_SALT',   'FA}Jrz/U-mt<5qKs>uT64*peR}zp5)EkKF95<Uz5b.858a<VCv|*iU=i_K$1$E~}');
define('NONCE_SALT',       'AVPR=kf/`+veEd.4xqL9bPd7?oD/Y[~f-.)+{E*w*95N:BRN:L>O!%dq<U=G^tNo');

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
