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
define( 'DB_NAME', 'boho' );

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
define( 'AUTH_KEY',         '5X3@{1Z08z?jicU#e9-y3E[>07WIV<Vl>MlQ@?hT@(T%-m}=u?<$(id`,[N5}>[0' );
define( 'SECURE_AUTH_KEY',  '_O`L2g0LZr,qLOJm<lPDL]vEB{UUsUO?r_q{r*);`2&S&J2&iAi,NYr_R8KNi[5{' );
define( 'LOGGED_IN_KEY',    'yMr.+,!p{R29C%KHe6uyQMf3lyedhK@v2`Hu#tJB$;F]9O%TBLE@5NwH?R9300eH' );
define( 'NONCE_KEY',        '!z*]7 JSC<NS$SWtW`LZ2/T0_#t7[kZ;f,~lWX)Xs,+UW$Q|C_64}9}fE`n8^)3&' );
define( 'AUTH_SALT',        '/SzT1(T(V]tDl ^Kg,g0`3&7_>oi@EZHU.IB!CJh{.MMbE2Gk1m:Kn!2gB4h@w%3' );
define( 'SECURE_AUTH_SALT', '@0Klq&I#aaP4sdZ&nAtPqc1L`Rohm-kCO!9wz(9hy8g2.sduZ7PV u<{I*j9XFcV' );
define( 'LOGGED_IN_SALT',   'kRWOaw[OxkF] Vh*XlYRx4m@1lNQ50p;h:AO|`ubTYP75~ze7+[3A6A7?^%glkDn' );
define( 'NONCE_SALT',       ',vpiS)z8FM/yZ.-6V1ZsyHP5(aD[L!Br5I,{3|6-78g/,eM)qkgj$:jc94|yF;1?' );

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
