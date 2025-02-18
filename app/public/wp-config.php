<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'gzVt6qypjUj;<EPyIrx9iItFK|a.J&~(-sip3MTt%j)$iv$w%y;OlPyN|VW$z6L)' );
define( 'SECURE_AUTH_KEY',   '2cgQ.ueJQV7JW~bd]tZ/I:,Lu]TcLW91sf]9dP0Vs?[jN`L_w!SA(4%O]:dph^4Z' );
define( 'LOGGED_IN_KEY',     'R0Wfs?;x6Ff([$p~txk0]#qWP8EVT;>}pP]i}8u$Z/tS{cHAA}zK`g0PrP>ic|>@' );
define( 'NONCE_KEY',         'M:*iWeeR]3crVF3APsM4H! #LN(:@s{i?+YUrn&0`#tkQG|1yM3dE@/EXCvHuy9r' );
define( 'AUTH_SALT',         'LWV!$JxE^hgg@>zRPZcMDZY{7TqTr~E,!ihTk5Z(^t>xv=nHS4n`5a/@DdE}SL,r' );
define( 'SECURE_AUTH_SALT',  '@G,U1n<J>?wMm,TU)gZ_`w>@]ir3d!2<>uZzO%CcdJXD0mU_=3K<yNME3Zpn2]Zj' );
define( 'LOGGED_IN_SALT',    '[CE9)(e?.)-j:QBH$sriRFpe0BB@Ns!d&*1${S|+bO#c1Bw_)eeK17s(~[Yj51c?' );
define( 'NONCE_SALT',        'K{,x([BY:(3GChumQhIEEgpAoSaE(&U?PmN5~;qvWZ,26~<:gb,#REUqOfTof@m8' );
define( 'WP_CACHE_KEY_SALT', 'inICX 59j3irh>Ut(?DRx2q[;*51#@JG>[L4G#:l1XWdV6#rI)k8pbeUo$8^/o{A' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
