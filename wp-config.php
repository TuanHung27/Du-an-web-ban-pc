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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'longpcid_asm' );

/** Database username */
define( 'DB_USER', 'longpcid_asm' );

/** Database password */
define( 'DB_PASSWORD', '@Longdinh321123' );

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
define( 'AUTH_KEY',         'Nj)YNk~_!F;]y9|@_~o_41{Y8OYJU/Y~<]TwF;xkSXM*|[mE*?S6C5 J;QdIST6Q' );
define( 'SECURE_AUTH_KEY',  ' U1`=E(R(tN*1tH-ww!3D[fQtS^C3{T&DKUU81U?skEA@(xYB|{q]j`l[bo{Qsq@' );
define( 'LOGGED_IN_KEY',    'ZTFv{)SS8J&P`>5py2d-r4bSJ9A?fr^vUr{y,QbD^ONEF<(O`W!%BZNKjAja80Zf' );
define( 'NONCE_KEY',        'O0KPi)?d%#{cBErck76`HLH}WsY1 )E/L>@K?6p> }vm{`?b|4Mv f_&Ne mB,uA' );
define( 'AUTH_SALT',        'aB9^lM<4bmFXa7 7;w$)$J4qVoRFtoI5hVM:x6;{%aLqdJicHma*OZFxqwJgmo{>' );
define( 'SECURE_AUTH_SALT', '%##FKuX!se>>zj<xgOWRTS(eR#ci1H 5u8:Cu4+J>By`7bo8B)tC;=N+fY0Iz^A?' );
define( 'LOGGED_IN_SALT',   'IyvwfDw=R_k2[fdu{H83H}f[,xn2]H5^WmtD1:.3WNjrGeDU9(8h-fX4gw4*T*9g' );
define( 'NONCE_SALT',       'gB4I(9bzXsVFApEE?y~pn)zVHV !o3p,nPrfk68;@:~-,9PS#cB*m/i9R%h8u,Wa' );

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
