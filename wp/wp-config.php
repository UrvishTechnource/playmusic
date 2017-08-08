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
define('DB_NAME', 'gmb_wp');

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
define('AUTH_KEY',         '.#_??&0.;n2#&f@]LPiiJl-VM-*yEK`02^n@]p@:/exj*|@U4@/*d<#$`.5q(#4q');
define('SECURE_AUTH_KEY',  ',K5iNY3i*GmE`X@_}HmuP3qZDxWaYC`avKPK;ej*jR}p3Co@u1*leDxEJ3jWU4+]');
define('LOGGED_IN_KEY',    '^KO]*e,?<TR(dUo-4:4 vA|Q+R[Qqg+Bap~;qB5. ;l)Tucmzxp8uxmOvh!c10TK');
define('NONCE_KEY',        'ecW.)??,{BRMCW;3*=_b#T#.=fm{U|o*V@r.be|2UzV]30kb>-U<sn,G-<6$a/3r');
define('AUTH_SALT',        'w%s.W9isms(/hsM YGu^,~BLf^WLrM3QM[6>^Gz*H-4{Ps^72JDJnU9M%vcP*H[2');
define('SECURE_AUTH_SALT', 'CJMQY0?1hh3U&~!nph^Ifj${{WZW,utKeea8P)PZcJ-M@%1?A:[rtruVRkVu?_K(');
define('LOGGED_IN_SALT',   '(Zpy69?-or/IBwZd 8P!&]SlpmiXLd((@h~v?,Dhs2XY:!Xj(k!A,L69kr(49tvW');
define('NONCE_SALT',       '[Sg^G)L5vS4D.?uuXih.|3+Qz4B([2n.=83k?lZd[N%iPP@Wcox}U7j,W7D6aL>K');

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

