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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpess' );

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
define( 'AUTH_KEY',         'tu!@a<D!rdC{=m/=F<a*)Xb7cW^1+lz0V4(CW&c0b]?Se56JnP2c!;KO{<8Y,7#h' );
define( 'SECURE_AUTH_KEY',  'rLZ+4tAH$b/!|o^|vxA H>O&,yFS%:7{eK=5clfv6EPocO}}bH._,z_r3q7O[<wO' );
define( 'LOGGED_IN_KEY',    '[*nQp_&Z?lPNK*E:)~#C_bmS@oQ,*D//,RY$nq}-m{4i0@>Z]lIr J 9W9iA(sOf' );
define( 'NONCE_KEY',        '^sT,9vulmysC({AvMp~`bM4F{gdiIt)]wRkAFfBno;m6s_A--FO`1Ncq#E1O 8sJ' );
define( 'AUTH_SALT',        'a.`?=:mFNokyP?nV)b81&ceNJ<_zNzBF.9BIM1gH;rk(0LeMrz=Ur6a`8CxPrPgR' );
define( 'SECURE_AUTH_SALT', 'kS8{dOq@0-)1dx$eZ$w>F!Nysngq(|vm F&S9X=;m_>(0+ESmJD[GWdAir!C tgO' );
define( 'LOGGED_IN_SALT',   '~)@:$t[GiaNI:j~rK<V-MY:[(+{1q.{e?$wmo?m(jf;h)#dxSeX[gTQk[gfYL2]I' );
define( 'NONCE_SALT',       't[.}sjrO#Muxwk5?h-^e-RSn;-)m=ClZ.TD,4.#]ddC%5uPs[|W!WanPdw8F.5KZ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
