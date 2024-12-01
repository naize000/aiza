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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newEra_bd' );

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
define( 'AUTH_KEY',         'AW7[)(x&3Yn~|0?,>Y$6;,Kcw%sA.=eLWY *DPbm#XWrE8FI8<W,%=H|T-Xi5+rU' );
define( 'SECURE_AUTH_KEY',  'C<WRAa(Ir^tML[{}1gK^w3k2@Q.Tl/OiG@6P]#h6`$m<Di05rFq7;|rM[A`~Vgx=' );
define( 'LOGGED_IN_KEY',    ',_rv##:_zlO8_9sVZG/*KT&O-a*aBNNV5|15x6`PAc#J|oo1#+ew114rqb{+oap<' );
define( 'NONCE_KEY',        '1{%>@I?[pSR2l2[T.5g8JRxTg`Di^S}w,G]_vw|^Mzrx]U-Lp?F17~ak^CWtdA/:' );
define( 'AUTH_SALT',        'W<|(Vw*2,k;Rm_maQD@BvhGxc.qo#TMHG/aYJiWX?gxozy/v*3_yOZH*?XmD(v&S' );
define( 'SECURE_AUTH_SALT', 'r(7izPH!h8@7!W ]M,x7w|-[tN1SUle|<X6qavrImg26mhO-|<:B2|T[Rw,V`wTr' );
define( 'LOGGED_IN_SALT',   '{C^Q *wA5_u7b>lbF&wRi1~/P4BQ%1T9@y]6*9_En|^#9x${k0rVC85;Sx,EC~-y' );
define( 'NONCE_SALT',       'iF7/jNhu7<Nxp5BQDYkc_e+Vsm$_IJ>^RA_cB1gJt%1iOCZrm@((m37h1T~2F]+4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
