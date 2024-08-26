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
define( 'AUTH_KEY',         '/*E=uxM(S/i$SRu-8]PtqN(i23]iH@QwvM1byqDk~xH$Ik^IXCq1+VGY,0C a2+E' );
define( 'SECURE_AUTH_KEY',  '7R#cF-41Fxb3? 63<+WMcZ;TU6[5dh^CSUV&CBi8izQEeArko?8XA?/QuJY?OGkR' );
define( 'LOGGED_IN_KEY',    'R1dEa S!1oIVhrvk|d?q wy;f<t>,~Z{9B}4LhRTt!&yd11Q+>ZDg6Pxkf{4q&. ' );
define( 'NONCE_KEY',        '*QY;f:n^a+cls@FG9F4+<VNd<F&^g/CS^oa[Vru%,3k8n9g_vB1oGHowt4+vjfZ8' );
define( 'AUTH_SALT',        '0oa$>3A:Z>~+P}1.KDk)v5j(|jDH5hhvu2*rY:tPj#mdxB?v>/^h5|.XbkFrl>U.' );
define( 'SECURE_AUTH_SALT', '01RV1u0;`<<;nX%BQ9Iyv_4D+@j?(YUl:U<P@%q(5*Y&Ryzg2m(8Qd-[cdW:&w>P' );
define( 'LOGGED_IN_SALT',   'ljlO:$d8q&a#H7FfE4.`cH[j}o|d3s3DDR%1D4ct#+5LKR.hWo=5i/k5>jSaAd|n' );
define( 'NONCE_SALT',       '$=NTj7nT3=uG[ln^3]R0IB1YF38#lppAc^~1^6wx.}H[3xe^xPJf5Jf&f?~Fd*5T' );

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
