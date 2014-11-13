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
define('DB_NAME', 'kathrynstoddard');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '8SZ9ZH+xZ+&TU1DL#c%yMU@ctr+_QgX[o]:okU6BxvoqfcMdmJnZtln{[3n[_01Q');
define('SECURE_AUTH_KEY',  '/|(y+8Y*FI$j-3[F=x^:_kG.]nF]-PJ`Y[ZM38ma%E_`0%k8p1[?+(*eSe,=MdQ&');
define('LOGGED_IN_KEY',    'ofE~3U {e.Rnc1^U&iQ_P1)0v^:8{8M`W{wq/A$erEi,-Q39|fbe|k+Ne+`q9O`~');
define('NONCE_KEY',        'lmCZ>tsE_-48:Hs&%XqvNT;szGzk[MuQ6>i}6$f b]|X~o41O|+<&VG)Qar9YQF`');
define('AUTH_SALT',        'TV}H]Xp8^7H;N-m3yYK?l9:{}?@/-x#Z<|D u5#nkVNDJJGZ&x|;s{HE;[lL2>Wn');
define('SECURE_AUTH_SALT', '/L`mE8AmT1Q4W/;4qiMiZf47`Fw]|m,uY%Uq5W(|_LqIGW~ bw-?G7SY|bDadLwk');
define('LOGGED_IN_SALT',   'Q,Jt+4w>W{|S ${tK8#7$S/jY=0I(R^1OJ+GV#vhW$?WlEL&#@]=<8,S%=wr4ZZk');
define('NONCE_SALT',       '&a-/yg}*|J;rkQldfL /LU/{wcKH{j#*ieLwh|z8oTXw`@9UnKU:q0:qQsae?c.!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
