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
define('DB_NAME', 'wptest');

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
define('AUTH_KEY',         '4G?0l0T9m(Hn{?M[h;q_E:_E@8^>Ray CSefDOdF.n}1<[+(yUdv9<$4jlB D1k<');
define('SECURE_AUTH_KEY',  'zW]*kz+a6@W~ia.78W&QZ*q.Eto[}z]Ce|Q$ZTR*}8c+9Q&cyA%!,jr7>/2L=fej');
define('LOGGED_IN_KEY',    'g@d ;J?D%jgyC24_+??<|NVz*HU9&1l :p!Q7ywzi)}fRFQd<O!aw|Zs(Od`CI&u');
define('NONCE_KEY',        'C=iI953yPxgvHU65]>|glVZ8hDRV%gyZQj=X+kqX:8/,}~MzaVKbD /nP8[mrV[]');
define('AUTH_SALT',        '8MjKY}kJ2^-T{^&E2}2 a_Ix(5uV>t<LWT*Rxmy-Y+()jOQK0Bya}s{5;onu]H)C');
define('SECURE_AUTH_SALT', '.<W_#x0#rXVx`1o&S)V_GDcW3nIf/@AC#@GmZhymn)vg?[VWBm8*f=DsN^fTq@zd');
define('LOGGED_IN_SALT',   'Xw;H.Av-o-K&3JZ-DcMFE(aqf{VY1di`U8>.(k K1G+5r[YyOxt `TT:UR-rL#W[');
define('NONCE_SALT',       'YIHT?92`8NBTon+Xg<a!8qt?jC@z2cW,t)f%oxTWaz l^+z7O?J$Mq>?%i!nJWtb');

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
