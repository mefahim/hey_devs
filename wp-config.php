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
define( 'DB_NAME', 'hey_devs' );

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
define( 'AUTH_KEY',         '>6,4@E1(BS1w&]a}XekWtxj@ t6?Ciy!nDer2L{=8gCBFRfb2J8Wu6PQhYBKV!3#' );
define( 'SECURE_AUTH_KEY',  'T`%zBHy$WNp76(t- P?Y[ZyyT3J4[Xe^KlO+K.<|PVys2{ b|~!>@5dhaa5EiRuY' );
define( 'LOGGED_IN_KEY',    '0)_~,_AWoL6GTib.B6W__rp 2H+D^14d$FU$il`zwG[(RtTx1&Aj`llV4nXArnb{' );
define( 'NONCE_KEY',        'xt}2k]^=2v^y0oZvuKC aiKO/NGF=_!S0GlUKFp[Stbi/M3VOW:W ^Nfks>^v3,e' );
define( 'AUTH_SALT',        'p5pp1|,`a};Yt3R/@&!^[EL<ashmm(pSqr1SfOQ:iy}rQ4Gb8Quy=hNA,P24TL|z' );
define( 'SECURE_AUTH_SALT', 'fDlwGG5t:(68KxEM1#SZ7BwP+TRpa>:+P|siOLyl%U)+s=(:&O*}52DGZrI5a$3a' );
define( 'LOGGED_IN_SALT',   'vc.rp%3<egpnuuLEQMh4AsauWA}o;Q;U!Dmv|Azv~9uyzQFga;V4ek^.9.B8M|>z' );
define( 'NONCE_SALT',       'qEoa6TV`=0{7 tf ICa`8&}r?z@u`2WilmG7Z]D/ ?A%1ehz.e>`2&_;,|lMk.=n' );

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
