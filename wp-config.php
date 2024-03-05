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
define( 'DB_NAME', 'glensprings' );

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
define( 'AUTH_KEY',         '+A/BxtZ=.PLbj0/SOks[yXU}wlw<+k*&LZu_NZlUDjU~Kd^du>HPR(_.g&tfR,hG' );
define( 'SECURE_AUTH_KEY',  '0c~SDT+ut4g&L20I-/v9{V^7_F]qi&0V3T)aLhZ}sYbU:P!9N/=p6id)@skp;g^P' );
define( 'LOGGED_IN_KEY',    'dc~&2Oo|Yp]/JiqAdRQa3Ic4s1G~(qN!10Ea#TuH}l^`@hn-unWm{{H}^hNrlXuA' );
define( 'NONCE_KEY',        '%~sWkLssI0o`!8@nQpHNH7^IJoxcK+kTY;&YjYI@e<(4=J6kY`|q^7~34@i0Kle0' );
define( 'AUTH_SALT',        'IJLJk!JLr~)P2 HmJG[U*J#8cZHT6Y6gVBOdYbi}nU;z#a;5_4n1KrEB?up]F2@:' );
define( 'SECURE_AUTH_SALT', 'B.I:ca<k2qudg$b=pHWqQ%=%#7;#Ns}mnvc2MMz]1m:iJ5Dp59GWa__C=$[#>J,<' );
define( 'LOGGED_IN_SALT',   'CFd$Xy+$&73um|KQs%ooKFMUW5mmT6:`$P=uM%kyd}g8JJLxnwXr2*nD];$FkkzO' );
define( 'NONCE_SALT',       '0jQ6ZgN^m(9yLcs|Z+pL.VkA# gu^w<}_saTTn*iV6x3fId&D%]~HbgZirLl|#$Z' );

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
