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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_sample' );

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
define( 'AUTH_KEY',         '-ic$OtZf}YMFogu0Dzf}Xd;6XtXK|%s~>eUjkpNbggYp7=Pl,)`t6pFwVne<wi(E' );
define( 'SECURE_AUTH_KEY',  '=7mM=)*6]eg/aqPdST~4K$yhy[g3#8~$buw/+y8EooQ,+L?LK#N#lS!pwRTX+-HC' );
define( 'LOGGED_IN_KEY',    'bHN;j;)dH^Beh3hxS(Lw%}p[8bwq:!xGWZ BQtu~.+jyRGuuZ^;TXNLLM 2B0xgc' );
define( 'NONCE_KEY',        's2fop^dV(yDiCZAIB]9y@?guf|C^FFm6 Bj::u[Jkt<w2eu?Y.k3E}<Bh8lK2gX=' );
define( 'AUTH_SALT',        '$@sKtXoE%#Tx$!uuj4C|wN7%A*.f~1Iw>rWWi,?(d27BZ<^n,|Hc]!kL:E<mETp/' );
define( 'SECURE_AUTH_SALT', '1{,_P<Gd0.45<$3KTm%hg*sOT~pW>yb~jK/k 0{_r).8qt%=p}R_mX12Bq ,SsG6' );
define( 'LOGGED_IN_SALT',   ']=DEO~=Ur~H,|A!&iLgo>OB]-r~rdqL4?n$r!,M}UM~&[5CswGFf[[6Quia3BsW&' );
define( 'NONCE_SALT',       'Vlh/5mVEc?%c*#/Iwy54&lHg5*ApJG@)[tf]@Xti8*L^ziLK($vQt?wHFn6h1594' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
