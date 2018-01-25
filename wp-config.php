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
define('DB_NAME', 'unripe_tomato');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sarevoll123');

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
define('AUTH_KEY',         'FAYpXP5FGWM:Y#l*leuZur*i+#H3>4@GAD87>hX4?Zi=]0k;ydD8GL F3@viR*PR');
define('SECURE_AUTH_KEY',  'fC9B.|P]C!Q=BMxU7I@R-Z:]!>SrX|yvJT^E!^(#q_96?oX+;CzZ=jstM|,inMpS');
define('LOGGED_IN_KEY',    'j<G$&A<cYr]O<FoOyBeeVm-IqA2G4 F&Q)g<R7+_K@ukBH%accAQk;Z >KBa;FJ5');
define('NONCE_KEY',        '_N%uxTxbr^0c3Kqh*[(~f)?OLUwf>_lst(<Qjegc6u3!b5|=SZG{xZ,{e?yZGHOB');
define('AUTH_SALT',        '2F]AM<E!SQki:>.cjp+huKM abHdb!|L$GBJ L77iyypPfH[(xa@)OJ`Vl96Qt*o');
define('SECURE_AUTH_SALT', '&3T4pr)/v5O+XRF^;;!G)Wye:JFnx_^H>hfq?!x6FK,csKO}w 07n5Asw:vX/<{!');
define('LOGGED_IN_SALT',   '-9q_T; 9Lc }ie*o4wx9TcT3d,zBj[#gx mb.K &SpefEz6ng@S?+KS(fcTK4Vh&');
define('NONCE_SALT',       '5ec8U:6;%;3s~LMQ%rSxFaAi9hIg@aF6f#R[5Nd)qK@7Q8>JwTIoaAI1/ZN{FX:^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gt_';

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
