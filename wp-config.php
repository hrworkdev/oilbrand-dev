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
define( 'DB_NAME', 'oilbrand' );

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
define( 'AUTH_KEY',         ';R~G^vM=0R%8.iqs(~6EqqrI<-$55x @vm>~XyFvN);ZAqD2Hv6G<dvM m1uogc*' );
define( 'SECURE_AUTH_KEY',  ',)I|W{`j&)AS]09$PJL10QVM3Acr!SdPl9]xoFQ-@-)[${ *sYG9`ic>w<_G<!Y/' );
define( 'LOGGED_IN_KEY',    'IVGoOS<tnWr0yKGJcJ,p/;]w=x0as&EcZEdMF^]r.EG2tMt._zi-9C%IEJ=z5]J2' );
define( 'NONCE_KEY',        '?<OCOcK3&RGq,SN@8!O}viPTe;pH*r]abrwyk^{Uo<3JbMUn6 ~0lK[yLl-7P _[' );
define( 'AUTH_SALT',        '*qLNYMjYn:/ojxW#!+m-sGeh81pPb=)4h_IDBc]c)HP,0I6#VlmcO+/X#A_`SY`Z' );
define( 'SECURE_AUTH_SALT', '.]gjE}S9%5V]<fE{/>^_jC=uxQiS}CI7uUOzJ:mRvZSN5l6uJ!V03*LoG6p-[;Vu' );
define( 'LOGGED_IN_SALT',   'Au_?]UmqwY|^kD1H`Sz+/b<8Qo~1jfUm#s7Vk1Nu9n-0:fv-h=>N(p//nQ9BaR;O' );
define( 'NONCE_SALT',       'KRwqH$B%++0ugzpt~f)!L(KBm){|c-=W!Pg,{?y0l%ZJGo5>t^u_)1!%]sxf@;/S' );

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
