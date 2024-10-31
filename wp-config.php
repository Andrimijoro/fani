<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Faniry' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         't_#tpK/`]G@aWuVZdCs?,I@2]ceRY4JriWW:W|?fSKC8uX9b<UUB5D&!c(~oPJ!A' );
define( 'SECURE_AUTH_KEY',  'h]r,!Ygm|G{iDZx6EcG)P]#{aqZ2Qx=<)--;Z]Z.*o:3_aF1Vtua7tHcc7qJ,k2L' );
define( 'LOGGED_IN_KEY',    'ojJ-J}3k//-RhFf;;}a~9|bHBMqCa4H-,]+fw_;P[LUD}94aWhvNKRq  Osg>h@n' );
define( 'NONCE_KEY',        '4~EQUYOvOo< )3^M:,*:`(-nDfO;ixEfbP~`cu.$E@xNRZ:THBLBc0qv)Gg^;4~r' );
define( 'AUTH_SALT',        ':Xjn5I_0d/,1&,>ZZt75Y8fNiSZTlyW$&Vf>uefax5!PL&9p2=*CH1};gfaQrdK2' );
define( 'SECURE_AUTH_SALT', '9G`ES/TgD<<jHvT!zcv7/F>GrpzT8ApAezKt]O<L{64XnbMUDo7*GR>_w.rcKM1k' );
define( 'LOGGED_IN_SALT',   'Go^!8Q7nwza5mCYN9[/QjU&{^cFJikT%f~PFn7G$>)nYGzl/n?Ukw:)]RFJH1Dvl' );
define( 'NONCE_SALT',       'ndp-r2vFxg-|W2+fQ7 Tn&W|_`<$@;/(|/89*gmyo2VFzVX0W9?=9P^i02k&c?C[' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
