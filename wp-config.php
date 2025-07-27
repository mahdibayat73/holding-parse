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
define( 'DB_NAME', 'development' );

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
define( 'AUTH_KEY',         '(q.LA>B`wwE)i$CX4lO1t|/xFwkBY0w{..)HTg@en_sT}35siU/Z.JC*r<}o4$+=' );
define( 'SECURE_AUTH_KEY',  '0sxWr+P$r,:n7Fg4?x}[F`=1TY0BXgYrSe$t39nH&/lG+y+7it%eIXPSn 5]<,ON' );
define( 'LOGGED_IN_KEY',    'epkV&,xWG;~Y>5gWRGd-N%Y[bM}T<R a*GVzT7X< oL[!lvM|&KA17@_PKrqZ-V<' );
define( 'NONCE_KEY',        '[oU-y5++i(HGxc3zK]Ep|L>rLV6E:F(wxH%b}&w_CLBWEn@duWRCC}yH_W6itz-D' );
define( 'AUTH_SALT',        '7d%`-z^&~]?*6TB^um)gD^z;Qck|,A)UX|bDK~pz+J^o9v1R5,Nqug,k;oZV]W$y' );
define( 'SECURE_AUTH_SALT', 'z_?`q4_u/)wyZJTzIG7e,IhWh;V]ilNd:sX !YcZ0S1A+oDlJ=OpP+?N[3+`a[li' );
define( 'LOGGED_IN_SALT',   'ZSLk Uim[Bw-Kd:W:#uw0jcR)spX=j|ZX)AFQp[$/)%^<T~K9F)EJOU}S{a<NKgt' );
define( 'NONCE_SALT',       'aZ9[Mx]|w*YJv=3q,v<[=9sC[@asIm{W8Va6Nf!tS!cY~+vATpE1&I%K31&]y]T<' );

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
