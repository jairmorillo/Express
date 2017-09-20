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
define('DB_NAME', 'express');

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
define('AUTH_KEY',         'Y:7m|os+T20<e3,=K2:}kjW5A40d<A5G<pF8tg+ImU7PIJ3MKs$%vPwo+i<*jlNN');
define('SECURE_AUTH_KEY',  '5)$;E3&d9OK ceb`K>m6Tg<N|Yp!R1do/Wsu1xW93LbKK(qLpCH*N=^~k2P!3l6o');
define('LOGGED_IN_KEY',    'T:8=oA(Pjd1>uE0Wd>^a>V:I/Q;!64tCm[6gS}yF(N!pfDJQDjVy]0nG6B9.JChB');
define('NONCE_KEY',        'LQ9*<7mR;<G?SRMZ*:#36*lI{T0j|m]a/:AMO+vu y9+3w#i0|U|/8 cmlFE4c6g');
define('AUTH_SALT',        '!?5Q@j%jMn#&qr,Hx4r@`,@[ 6zw7R8D),d~fPbLf}C_Fkc]x 9=*5-!l4zQdpxp');
define('SECURE_AUTH_SALT', '@_Gq40V>H-{k(AfNBP]`]s:z|V~F-GArMTwjkSh}H4y_/wx*(F<T-JgGz_XBhE+{');
define('LOGGED_IN_SALT',   '7S!8/*2:Z8xIwi,Kbc|_~)tZ:|h{Ax5DX#GfcP*=/45ua1o@p`3iN}cU]@@>(S{_');
define('NONCE_SALT',       ';|F(@@b2.OxV_X*ig1g)q^|2rnRCt%nJjyuF{FUTiS]Tza%el`fGuF~lv.7(.$!%');

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
require_once(ABSPATH . 'settings.php');
