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
define('DB_NAME', 'proyecto_final');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '+^UY6}Xx4?LV,| !`}OJb<GU|a2SJ5N+YxU{,C2Zlcnt[sE*]$gUd!&pw9ei`2[K');
define('SECURE_AUTH_KEY',  'tpIqq+jf[<ZL[~V4VL%ifU%@}cNnVdrrOFGJt<N7KloSE,;)u4PG]=ij$~x->72D');
define('LOGGED_IN_KEY',    ',kh}17+{j{6]9j[0D0U+(WP]~S+k]tx[Wj@SVF;OE=vT/Y= ]4:81>kQm&w=giAv');
define('NONCE_KEY',        '[njodWc@ >6Nb N@/jXE?+,FY)^rEz~8t-)Ry.c1^~MZD*5La5^eJ_#=gP-X@4nj');
define('AUTH_SALT',        'U@$FAWcxbiVdhcu{#QOryun.m%#2+72WmJ?ch1R?e;jA0,R-Zw;ETb]z1=D~$4<U');
define('SECURE_AUTH_SALT', 'C,q0.f]v2jS~_#2cH=X=TxmZgl>,BRRO2Kx]J+/;F>H1J+j!8hJBPTWm!>D*U9%R');
define('LOGGED_IN_SALT',   '`[9O>w/CXfV7<RWTKv@KuROkiKhMla_z#6vJ3Cac(`6O=;S,F6.}xILNP9/.&f8-');
define('NONCE_SALT',       '@~t|?P+ogSn97u^ CV7oh/=^!2zeg#?O/Ku!cHr;6S|YGY>I=R0Dw@p?vV?ut;_3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pf_';

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
