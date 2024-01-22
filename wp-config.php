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
define( 'DB_NAME', 'softmind' );

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
define( 'AUTH_KEY',         'cuxmM8%q?NtgM)y^/.;kC}2<9,&E)!@A}54v$-Z_O;Va^^y@@:I$A]3%A2W/&5n.' );
define( 'SECURE_AUTH_KEY',  '3DDKs1)Gok7b0B4HW}@MD>Qp>q-Ka6PHpfWV>aJ>GIm7m#[fAG2ScQ[72Cohu<XQ' );
define( 'LOGGED_IN_KEY',    ':t`@dqnkIs2GWft-O*=Tsoh1YHt@iF=Ih>T56brO!hW/70T^` }7N2(1~^MX-&K#' );
define( 'NONCE_KEY',        '!1w < ~#o>.^7x3{848{.gn4NSni=d*W5Z-}`P4#ddZ#Ks3D{P/o&BVwdmJ0j1#2' );
define( 'AUTH_SALT',        '#=%!A[OH:qxi#eUpP)SDVTz24=<`4w%`TMB2U:8xc4^>BzC4u)-,DdBY[(o+:YR*' );
define( 'SECURE_AUTH_SALT', '&5X)D5a6AIB%9/`}:1P64yfpci}Oo7|M4C]*L}c2J[|TP3GTD+XEp_GxK!jJyr1l' );
define( 'LOGGED_IN_SALT',   '}r`uSS^Wt:@;ep_oIPsd7EP,u(Y^P/Fl=mpC=je={*ISu9+>|o6cx#2K!UKNa_`q' );
define( 'NONCE_SALT',       'VEP;`V7^x%*-=<4gx`K,vE3ZeG{f-z(MnT<e9WNG.!czkJ&EItrhA2@Zb%5[KwY$' );

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