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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp607' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.0.105:3307' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e%I<og/Qaj2%1@!yB`5o*;5oA,XzH!45& G!=^[I&|!  WzN!DHEHb^PeOiBQ` K' );
define( 'SECURE_AUTH_KEY',  '{[wlOU!A?rChByWs,(a&*a~ TH|nyUJw|-(B^dIcFa[&.wh&FkE cSy2x]J1r:3+' );
define( 'LOGGED_IN_KEY',    '5QiZ[+jF%v.Xhn1DJL<DU+wfSKZ!4XRsrdgx2}hZ=81u|z5rtt.H c*ZIMK*p#q6' );
define( 'NONCE_KEY',        'by.o]|l.pP{:&L/p|J!._28<2RX75BleGF2FpdHMy}wav7B@gPNkcmpx:LlPuqBQ' );
define( 'AUTH_SALT',        '#me5i2+Y9Ri;pbSFWGV*@};A-e p2 >>0.UM5O`F8P],5fv!Pk|3$S.IZ#}Ew}LF' );
define( 'SECURE_AUTH_SALT', 'v:d^+r0YkLpo1B+{,<mJBR]2b|s|L ?%JC:8)eS3Gpv@NqJl;xDyl/+25:fc(Cf=' );
define( 'LOGGED_IN_SALT',   '<_-P-2sFE]yym/OKlO&k-BYsdvy,GVyRy&0UHu@R[%8-N.Ux]  o-+<eOvi m;FB' );
define( 'NONCE_SALT',       '[M@Q#O10Yo 3MgB}w|UMFX+WAYM-$(.)_h}v%AZNG+CwA~%(%zd953 czpp-Uq`B' );
define('FS_METHOD','direct');
define("FTP_HOST","localhost");
define("FTP_USER","my_wordpress_user");
define("FTP_PASS","password");
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
