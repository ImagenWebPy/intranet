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
define('DB_NAME', 's9000139_garden');

/** Deshabilito WP_CRON */
define('DISABLE_WP_CRON', true);

/** MySQL database username */
//define('DB_USER', 's9000139_garden');
define('DB_USER', 'web');

/** MySQL database password */
//define('DB_PASSWORD', 'Jardinautos1');
define('DB_PASSWORD', 'WebG@rdenMKT');

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
define('AUTH_KEY',         'h~3nj|0i7#ZIa==GE|J7SX6X-EW DTRg4vSmNE yU10~7Aac.9|P1MW6QWce*&}A');
define('SECURE_AUTH_KEY',  '%-CpMF.pzh3Wuim!NTar#Q;J;];=p+KAM +]-|nU+YDfxRH+/G7-x1P:r,?I8>vh');
define('LOGGED_IN_KEY',    'xcwb%ePXpwnW%P/Xr8OeY_0=K^>=>Xo>mfxv|yif$z*Gnd6K)#J.}Rh>Oi&`*YkP');
define('NONCE_KEY',        'd~&Y~V(q&C7s[T9,y@0haW4BFI4oc7+r^w>^T-wiwl&&+4<RZrzs}xE#,4;m2W~}');
define('AUTH_SALT',        '5P+OV[m5UXC-BDRvzyOFm!6/4f+fF^Q%UDd@:WuaIElYQ9`{KYqecRUY|qM)rZTX');
define('SECURE_AUTH_SALT', 'c|b$i2yaAHq,f,_=}6]cTv7,WCm/I}~Y5KA+n+-ohs$;%2hhY}{aFG@zKxM8-PEe');
define('LOGGED_IN_SALT',   'HQUD!?<>}lA#-*;7-hqCK_d]6cXG=+4bd{>OC=Pg&:~j}m_UU,4Q3U]qU%-[SRD@');
define('NONCE_SALT',       '6s!]V>I5TV=YA7_>qHhtFn9Y^/$l^=w:] X%i|n-c-L<G4{-M)QeUo.8#t*qE*V$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gi_';

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
