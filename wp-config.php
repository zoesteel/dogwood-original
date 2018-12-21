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
define('DB_NAME', 'dogwood');

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
define('AUTH_KEY',         '{H8d>,:7Km$z<I<qa}Z&HWHFBv&Y)(x%NBeS%ed&JYfN8Sy_=~x)lRlQK?V%N)lr');
define('SECURE_AUTH_KEY',  'k0y*$Io&4L-bf&e5bYs>u3m8a}gP-=[Y]#Cu<>)L:?wW$x}wvtg(<P>H#WyVx-Iz');
define('LOGGED_IN_KEY',    '?}V~asOdI5D3c)g):9Ua0I+U&,E:!ssH:6tv.ng8V@JP+TO1jekL,P]aYUgtfWT#');
define('NONCE_KEY',        'DJ]GM|UYDV,hya<p1Y[l!x3-#?o{elxC%yPCrwjtAP>Jm~K@h;NxGjA[nAfz 2RI');
define('AUTH_SALT',        'V` JJ[zVXZ9KJ@[OV*k[ux>-l`53t6IB]*wdF?Hg|v;,Qx&ws5r&#U~Gq!LJJTV4');
define('SECURE_AUTH_SALT', 'wg)sXrT_h&5E23Nu%/E}/mf^t7vM<$&AQUv#y<AY59Qn9x8i)CD>F-u{)x3C7PIU');
define('LOGGED_IN_SALT',   'F:~Fy^=;}[~-Ph@%}reR+0ZXN=N6UQtK2ET$cNc&;?|tf~9`heiR>maW)Jv#X{uQ');
define('NONCE_SALT',       '8C,;$-pk]lqU= !K[7x88pI4[}N_i @b49=-Zaokhp-29wjk;k3%_{[pIok)5{y$');

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
