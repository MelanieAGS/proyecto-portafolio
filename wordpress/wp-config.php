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
define( 'DB_NAME', 'proyecto' );

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
define( 'AUTH_KEY',         ')xI@<87yr2>ME*r97lzAeqOZl+p[9K7wOdi!`,9j7*eJ%Ass{{<jOsXP6Lgtr@:P' );
define( 'SECURE_AUTH_KEY',  ']Tpg!Ju#&{ _cF|p9I6HhB5E=h_p~(pYZkP(eS?q1D|;pqa8r01c^*VJ7)ke_jpd' );
define( 'LOGGED_IN_KEY',    'i*5mN?R#UckfUd;jQn9PwT?_^6O}BJde)@Of&)DE/lv5=%r|=AxiT;Lou1=5z@p1' );
define( 'NONCE_KEY',        ')p;D.tO9?#n7!jdl#cPM;ljP?ME/efmwPE/&LQ09G@F/Wh#Xy5e|l0Yx{bpQ&!)*' );
define( 'AUTH_SALT',        '=-YRT#i|Sq.V)906NCE;+tYjPS_PXYZSEETanBwk+M9jxzxgk~=F)i%T,#&>G5q/' );
define( 'SECURE_AUTH_SALT', 'J8l0:jq|@:VGZ9,N`OH?mj^y--|jCKR7G+&`fxtQaD3ni}#._1,]z}8F_2uZ8P3n' );
define( 'LOGGED_IN_SALT',   'FJq/C:Cx+*`?uS >vP60%n5`]FUSZ2%lAy{)jP.XHy`^H$))Fgys?4Azc|MB}HG:' );
define( 'NONCE_SALT',       'mIz>2og,zO5teG8m{484w=7nge|2kU5.7e 8hjj(e{{iPhqU*l XH}-CT%u}D?wD' );

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
