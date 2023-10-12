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
define( 'DB_NAME', 'shanks' );

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
define( 'AUTH_KEY',         'v_$t/2%a}y}yS5wjo]zGB*2g!qRxI8+rPdVmq0g>EPfn,k#i:xl1@vn+n;I`+S9Q' );
define( 'SECURE_AUTH_KEY',  '!cnJYYgj#>k%gjx$X5CFpPPBp4-C%eK).5o-&JOW=~+J2a {U;m]~w[57zGjGq9A' );
define( 'LOGGED_IN_KEY',    '<-]S_[)@_zzde0LC&(3Zw?1qD%qqP_vr`Um+;.9)>wd!x`G=b?!GTOr8q{EgY-)4' );
define( 'NONCE_KEY',        '8$Ih2pBdFo7aV%V!K)Qr}vrPXt[v84]/pU.6Y60)T]_%/Si7tMi^lludX0vmkux7' );
define( 'AUTH_SALT',        'v_9[b?HRe^-$^jCsAC5SWD}Y(*iSmGD*$ +-%{9Mr}B{s_%fJrK[o.EZ#vWY^Y*R' );
define( 'SECURE_AUTH_SALT', 'XW1C5Cxu1yu_i2:=b;5j~lX9L-?2F>d|TGGw%_g1N*J)JR0BJJ2O((kUc7z5IlDY' );
define( 'LOGGED_IN_SALT',   'l;LkYi,6<nif=.8.JxMpU@1B`3aZ86f(}CQF?j0JkBO;gT))Mgzi4lvA9/n=Fop)' );
define( 'NONCE_SALT',       'L[#<Y5*kb]SS5+o*6Vj7ZD`ODSuV6IYnC064uFgwes@I.T{W,c8,!*V}<51Y}@h;' );

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
