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
define('DB_NAME', 'FweedPress');

/** MySQL database username */
define('DB_USER', 'Kayla@Fweedom');

/** MySQL database password */
define('DB_PASSWORD', 'Purpleh@z3');

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
define('AUTH_KEY',         '|5S,3>nD>T RTa!hhl(BbbvL dm5DHpS!!gTn_z1.<?PXo4w~GdF[hF>,RC5>N9@');
define('SECURE_AUTH_KEY',  '1.;ZS2mPcX3F(fM)`b,~=N=jN(XVm^$~VN>aX?PIhj_gREg>h/B.FLWAMYEg-Ps!');
define('LOGGED_IN_KEY',    'sBk!oCo`0 wM]!ias%qj,BN.;~5Q:W#!m8:Cv=ys+#ojl>Cio`iQZ15kV>VP&nsS');
define('NONCE_KEY',        '~R<Pu[S@i.bzB:7 zJ6W]!*i)3m#qd`nuH*2]?NpX:c[JBesOnEdn%dMc9J%b4.J');
define('AUTH_SALT',        's]`.s{Lr{vm7*9)`L$+w}D!{qM#W,W]4?iKte>uK^G9rlJ,}jgYN:L^/qokmIOK ');
define('SECURE_AUTH_SALT', 'hGxs+y?;0-xGzcn<K6(K1A#vz1dE7s;R/_p$ bX2*8{GgJ~aE+%K_zF`$Yn^PNgV');
define('LOGGED_IN_SALT',   'f$cf!k>~.cG!l!]$Qt>.b;]VC;LWX)ab$D@(*Fh/1=xHlU*pB<g9fp,{J8yFb`@D');
define('NONCE_SALT',       '*0WPm)k*j[fBFLj,Y/BUmoMCvFW#M^=,A>RdBc4>7yDit|Hzh&>mjG5UE!)Q/O#_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fweed_';

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
