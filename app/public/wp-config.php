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
define( 'AUTH_KEY',          'h_5|3bIP8?yDDKTO~iOg05Mt)`NW6@z4(1%tGTP(BUYp(+k=0){B(ikc6`2T6pV7' );
define( 'SECURE_AUTH_KEY',   '-&M &@&GY#OxAK8oES5E|r_*9.AaYnwr,wEhr<V04#J~a`M,5w*t#+eE|W>4]R&m' );
define( 'LOGGED_IN_KEY',     'ZWF%$:-|$][7kG4FsUg3`Q-~LNvyB}YVPYS]32vnF^1+vigr,^1Mk0,oI<lVKJCH' );
define( 'NONCE_KEY',         'Ravn:!8nOO&{`Q*kU>ic7^[k+Q]^q.]]|}A[[s5yXV`FZOWKWL{tAdrtS-(HGg4*' );
define( 'AUTH_SALT',         '/JLk2zgCnTE0.Mr5gOsK4vK,,8xY1`;mxah+&JE8e<z)Q0q<uOZHiwBeg,0Nvk{S' );
define( 'SECURE_AUTH_SALT',  '4SP7T?-E&@75[~{$4Jn8pc~/+R/)l@99:xric`?@:ap9#UqO3htk@f8Y&h&4wG&X' );
define( 'LOGGED_IN_SALT',    'e*1d7=B=%9(| I[0%lr9%]qlNUl}vnQ2N3B!a$@,ZL0hL(onec[`b#4E4teCiN~g' );
define( 'NONCE_SALT',        'e+AHET(pB?7~ngKEe[SO[raXmVLke&In}_o8OYXWAmB`XOGae!gSGo)2|gyTy^Vk' );
define( 'WP_CACHE_KEY_SALT', '/TwyFWe%+p#mduPb;o {:=m*GUNd?_h|i&:6x <V#Z~b@KbZX!*^zdj8P)/7`khY' );


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
	define( 'WP_DEBUG', true );
  define( 'WP_DEBUG_LOG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
