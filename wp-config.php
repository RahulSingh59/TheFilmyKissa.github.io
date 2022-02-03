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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'DWordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '>9k#0,ddcX6[wl%dFSq~jdh#FYkVW~t[|y1)*6.[YZO[uJ0Y_{KT2[:(!Q6Xo7c/' );
define( 'SECURE_AUTH_KEY',  'EHDt?8fcW2Qs!9QZAGmE~FDqe :gV X6t9K:xIC(_y`. k%9%}i!M. LS(dxHx2z' );
define( 'LOGGED_IN_KEY',    'f;z?)M9q>Og}7&EApY+Gsg*Y*fVr)_ Ki0?ZPrx0D,v?S T~mn@_:{C*+t$evf|5' );
define( 'NONCE_KEY',        'IpKdhaFnRDoGl~Wnl5wo[pNvijAQeMb`D_dNqA.i-REH<P0T4G,8@rl]ekn)5,GS' );
define( 'AUTH_SALT',        '_WnY0L7imKiVe#H d.O%_u_-Kdh)r0/gYlj{y:kLXc2~ukHElWnrb(d}<6yLqf|#' );
define( 'SECURE_AUTH_SALT', 'Ebb]!b6C^jUzKxl];i>0n6aUH6R++_DP9tn&>;>[~{N+sPj!FeCOB+q~UgfPr`z)' );
define( 'LOGGED_IN_SALT',   'hRm%_?(98]g*Ke]#LJ0vDbSQobS7cjoJ~OXQ&G_t%k7A^$2UaD/I(TlJnQ<VTe@X' );
define( 'NONCE_SALT',       'iC~Vh9hSx>/{]T rNgf(3$5$3X7O*0[Og~L8KcH;8,aw?  +xbI/(Tc}]EBuW]kB' );

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
