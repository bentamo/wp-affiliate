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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'PkW&2n]a(DG}7^>:*g3i8<G#)Ie_TrAW0h-nP#d;DkAnJC{%PLxAA[T+ReMtM7Op' );
define( 'SECURE_AUTH_KEY',  'PZ=dFIPwS8qL=O4/_nIxi_#K3-3?PIq0%GIe6q]E-g)l+a]m1dtvN7&)R04)WEF+' );
define( 'LOGGED_IN_KEY',    'SW^iRj]S9ZJo]ONLB#^=c4^b.<#=J{1 FyXa/0S)?Jn/),f[k.j;s^H@WU9oOWAJ' );
define( 'NONCE_KEY',        '>.yp/einKQ*]$Z(|qGJ#~zk1idO%H_)p#oa(Xx|ql0 w0Tdz715@`q/)#we,A$Gn' );
define( 'AUTH_SALT',        '_qQ%2G8,y9ELZModTGk BgDdOO;lT:a]lXU1PdYA2I5rrS_t/tBjpc9$:sFPusIS' );
define( 'SECURE_AUTH_SALT', 'xx)G bHytWx^Xj..wx@bV,2*Yy(vF;GZ]n8J<&bg%{?xiGGL+xeWyUsmE>heuoq]' );
define( 'LOGGED_IN_SALT',   'LK*c/#1C0_/inyr9+gAb*xdTw(J3)zmQnAF1V?$~g(*.4WkzR93&x%e [4]K@Jao' );
define( 'NONCE_SALT',       '}PnS5z:t7i266Ga?JNDN!4OdMSM}vUr(6~i,lz-L}M%*O*G|J)K$U0e5Ypcq2Y(1' );

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
