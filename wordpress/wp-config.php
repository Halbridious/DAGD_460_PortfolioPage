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
define('AUTH_KEY',         '>XxC#=n(W)h)KF.-#ssnSWQ!YX?:?&SCc:gwB~Zi,;}zg*B]n6PD&=>*1RBig:_|');
define('SECURE_AUTH_KEY',  'Ox(@VxopNbT}T~6<Rp*i]C4w<e}dmbppX)lzV(9`&Z*#f|3wUdSXX*_ynfn&Eqq3');
define('LOGGED_IN_KEY',    'y$B+b)XIjN>K;TUE^1ifj4R -1b[jl2j|&I6p<OF(u+raV6a(K. VGwBbpOA;h~`');
define('NONCE_KEY',        'Yp5WF}vtm uSXC! 7$XFv~*UKlt0jVuIGza+F2iDQ~c?sC+=2|m-oUA6FkB:_33=');
define('AUTH_SALT',        'Mg k7J0(nv]]ESnFxkcc@C5hPrc)*=8P`HKYb5s+GO|mjWK-R=39g|o=b=o9=5zH');
define('SECURE_AUTH_SALT', '=CFV7s`,wZK@My7ogb]||-*C8v%ntF!v.N+jgQ.dBrL15b_{a7_Q+?h>k]|=.=ld');
define('LOGGED_IN_SALT',   'e-K_H(Mu?;+|=vAJT~Jl E@-0mXku$!zeKF:27$tBSk,ok31z4jGl~ }E%^2Vlgr');
define('NONCE_SALT',       'DaR5H#Lc:b+5+BpY~MwdT4plAMc-f4Ki`-~I/?%](xfGi4O5z=n0l?f+:e-c.:mG');

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
