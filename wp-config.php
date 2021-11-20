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
define( 'DB_NAME', 'autoparts' );

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
define( 'AUTH_KEY',         'O6x$wecDwF~GMw+R>t<JIq5267_b!nVix0Sg2tuEO?E%2WAB{(NSsWusMuz9^VU]' );
define( 'SECURE_AUTH_KEY',  'uu9arDwODEL{ni-`kJ^w71+ Y/TQV,u5VX<os)]t^PnkysG2kVWP_MdQDAET.i=J' );
define( 'LOGGED_IN_KEY',    '/Bv,K(#H3qw:S*EY~59^#cT*LAs4{cC>-3+0L/r-Rpb^=X3TXAJ)h!+3EeMn_~[D' );
define( 'NONCE_KEY',        '1gWIg;cv/[Z/dz2&*p3V;jh*kmC6u_g}dDzY9ZgmBW<IAvTUH5Le`7z*Z:|ZqY[y' );
define( 'AUTH_SALT',        '1R*klO%M$X#/8 kiY31_**}c=b8F09xSJ2)bG$}7-fEaLF%Q@cFiTg9/Qw^.uv+4' );
define( 'SECURE_AUTH_SALT', 'Nkatb_RA;|K FIFE.ovjT6Q!3j4-&pY`?L@pSh>>K&?)(0&P[[K9.RL,y5 yxL)w' );
define( 'LOGGED_IN_SALT',   ';Irf*m*[odl8DT6. AvH%-2k/Ri<SK<{oxY+qcWl@kJQgamtC*Av*6(`EV?/1e`:' );
define( 'NONCE_SALT',       'V.uEL+xEO2V;, 3zNZjPtlo5}Ptd$o2Cc/bQ1P4[X3JnIP#!RU)~{FFY&Dy=?8Om' );

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
