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
define( 'DB_NAME', 'Mota-photo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '-b<`=V8w6}%v,s(aN6@2/>S:*fO@uo:b`UoJ=G#mvJ[sT%{`g$N&n]M)Ut;h1za_' );
define( 'SECURE_AUTH_KEY',  '*|ya/.[AG>8,vi}m6q{~4f_=-76UKe@Sb[;B]]:eAbOy6S[AZ1 v1CxHz[;Hid3R' );
define( 'LOGGED_IN_KEY',    'B#2Q$XWwlIhM^b.[oU[<%m7Oq*(`iSD8A<va_BtY_Ep ?s>U7xL ?<<w3rJfP5.W' );
define( 'NONCE_KEY',        'BN5-W4F%6()^p9LcWW~iw-m44N.lnu6_9*1}wjq)h:**+CC@3ll&^RA;mFPBBWMi' );
define( 'AUTH_SALT',        'zuRc~Wpf%o3)0(;.zQZjmjFIm>z8zmC6}>yh_ 52%{5NxPR*n^t,:&,wV%m,b?S(' );
define( 'SECURE_AUTH_SALT', 'DxE=jkrJvfV,GG$=2N^jyppnl34o7@m>Oh:3(xC.^k5I~?0awmfgMg5Zl`k;j,;w' );
define( 'LOGGED_IN_SALT',   'r ~^p%~lCG;0dAO>CF`,z~c/HNX4~8rC%0.[d~Z>ihg.T7*F8]z#pD/ksl>t6@Mv' );
define( 'NONCE_SALT',       '5D#)ylAd%h]YkQ;e|:C8,TnifjQ9.1X}2ABeyL,)D%O TC_rb~J%i)avif,9nDK:' );

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
define( 'WP_DEBUG', true );
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
