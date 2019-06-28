<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'repuesto' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rafa2112' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'IjtalhV-Mk|bA@r44+5)^JJkjK8HAx<n!?tL~(:3rcq;11IZ{s%Z6a<@;MXl^Mea' );
define( 'SECURE_AUTH_KEY',  'R|qe[p#<U4N +s@R}<EHAmmxiuo$3Fi^C65}7/iO!4W+eLw|Ik]}6^tIrFU[U[Bs' );
define( 'LOGGED_IN_KEY',    'zfE}HJ21xA`aNV?,My8Vp1M$ZaY^-5+9`6pzPh:b0@js)}DxS`d|GZJQ$#,wU-zZ' );
define( 'NONCE_KEY',        'crji.:)D`fQ6:vscI`KM2;BGVFNDj^}6wcth+:a_bxkPxONc!AdJ>P E?G{(f9YZ' );
define( 'AUTH_SALT',        '(M[Y[<6};_QSPFtfM<@gXT>>s55C G>%ptK7KkbJ,@XwW)w;`WbXRQ(LDBdLjSgf' );
define( 'SECURE_AUTH_SALT', '-($pX3*;myd9P-x73#P|d;?xS*p?_BUU{aowjQ`H^Kdy]skh2lrQkQY mkqx]h^g' );
define( 'LOGGED_IN_SALT',   '[pm<n+JYzk:|3[/qSJRC97BU<.8bRucs&L&y7@IET!6|!Ax&J;[Qb*6@gDt1t6S^' );
define( 'NONCE_SALT',       '{XN=,%k]$u7=]~Jw2M5lUkAo%jZm&fmtn!@ck8LRdiE;]wD?sSBYS5X+$x:5_?A]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
