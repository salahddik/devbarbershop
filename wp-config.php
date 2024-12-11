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
define( 'DB_NAME', 'devdatabase' );

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
define( 'AUTH_KEY',         'GeDxfv.Lj9H(O9dBChz:c5bz8#L37IF%)C_./Vd__ a}nl2^a,mCZ*M;v^f_*n_2' );
define( 'SECURE_AUTH_KEY',  'iDq<*J]Q}7KA+Mml<i{}4@n/g#*6CBX*%SI}0GBy;Az9dfZkL~bu6 ]@8z..33oU' );
define( 'LOGGED_IN_KEY',    '[zeLl]5Xq/~|0}~zzh+@^mMMBEFp)|j+@BGmxEn|#W:j)8dU[ts3yL}hhm#ZLkBp' );
define( 'NONCE_KEY',        '{mc|Xoz~W/kRMLeN;}>G#@Vxz&R4!`oX2)E:pnsFIv+~V)KB>uSAb1%A3< aly6W' );
define( 'AUTH_SALT',        '<[&!D)2o @--7-^}@i_h,X2,n*1jDB9GUm7x,(vgZsf`s~^<o-19VLzea,H}O ^z' );
define( 'SECURE_AUTH_SALT', 'nRvt1+BBO99FJ&]a2q4TkQoHKYmt*3j2By;OD[y9s[jpfrI7U7QEe[bOE$*Z0D1o' );
define( 'LOGGED_IN_SALT',   'JxVhbRB:19jC54lAEmZI07{`RcW>73c]X`wb>c7;~M?9J{*5cl[W1_3krI(<>Q?7' );
define( 'NONCE_SALT',       '*_DCeH+iUky#bUC>l1tG%,q`VUy**R4Dz2^fvgr9o/qk4LBccQ>S3s$_- T%UNkT' );

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
