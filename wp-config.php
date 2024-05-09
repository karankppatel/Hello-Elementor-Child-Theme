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
define( 'DB_NAME', 'hello_elementor' );

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
define( 'AUTH_KEY',         'YP1Iz k#9e#S6Jm?6.1}l`[wtJtx5_$gT!14rH)0)YQ/_ EqZa-c-2h#Jb[l81JF' );
define( 'SECURE_AUTH_KEY',  'EXJvG%HEmjz]%[[S8Yp^JBj[Rhdki?/UJnB|+(T|i%NzL/${fqA%iZo/PZU*|^h{' );
define( 'LOGGED_IN_KEY',    '=p|,$On1h-V;+k=9w`vU/^1%sQO VD]dm*@t/js8U$/lEB5/lAT`;8D|r~St><;[' );
define( 'NONCE_KEY',        '-?vBbM2$EyvbLKG8M9FL2XG{^P2@o?^^CSbwn88_mHv`DehT64Zk)]CVqSn-5l4,' );
define( 'AUTH_SALT',        '0TFbA ^AH kF Te$n+jnv^v_hmb`&+Xk72/4(#g%/O7.l]ygz .oSD,8e!+tX$e2' );
define( 'SECURE_AUTH_SALT', 'Q,&}p1&>y~fut|-vVKkpI=V L*=Q,qMw_rE)rY&vAZ7IJPka*.ohO=k;6~fw4|6C' );
define( 'LOGGED_IN_SALT',   'K^zlgCE&}Ir,YBB?zo]#wXgUl|Z60p.mAx,YEqKTnKbjN-2m*xMrUn;T&-@=XSz&' );
define( 'NONCE_SALT',       ';sivh b^0RA$fhp[i_qGBX%fK!3MnvM>JrtcU_?kn@fe<1Llopo/;Ani&^ND4Tu:' );

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
