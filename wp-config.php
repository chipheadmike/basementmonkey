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
define('FS_METHOD', 'direct');
define('FTP_BASE', '/var/www/html/');
define('FTP_CONTENT_DIR', '/var/www/html/');
define('FTP_PLUGIN_DIR', '/var/www/html/wp-content/plugins/');



// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '314@JennWP' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

/**#@-*/
define('AUTH_KEY',         'sc+bQv$N*xo-B&pRj_OS(bH7lbwO=J,e}jH [A.2ll=,Y%[wId%1fs*_,N<~*d#6');
define('SECURE_AUTH_KEY',  'CKSv]@<^9$E30oq;Q8hy-[U-/q3gN1gU|n)qlh;pooSg2$g%j|<!t9j,&Z~8ST@5');
define('LOGGED_IN_KEY',    'd.`3],u_odgi|OH8Vt(^2,fy&*+dBJlt4.o|CaH&fM[bYW1n?pGHs24*y.,j#j+ ');
define('NONCE_KEY',        '32J;6J}IgaOqK4/5$+-`lFs4jA:GBY/`i,-7f^%]_1QX7|k~X$aqbIHKtAw|cZa ');
define('AUTH_SALT',        'nRm@xE`s43PW9$jjMti~g&-EZZ+<FE@?C%K/j#QPnc3KPD@88]T*caB$=/,ZAR@E');
define('SECURE_AUTH_SALT', 'Ots=mfy[KT0#a*_LwAh)+-sn0PX+T|/FdA,iQ{+dP5FSjLN:9|J/(`hX1UK1.+QT');
define('LOGGED_IN_SALT',   'VoG26xdxH2x+FA-mVX(*<RW3-|aQpN7{sxYR3`>D !:AMq/wssLO~!hep>o$,i~Y');
define('NONCE_SALT',       'kU [#E;;kSv`gN!-isx^->2?^*n0=)$2&hiX2}o>8(7KN_$cH8?j-N]n{{h.IVg$');
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
