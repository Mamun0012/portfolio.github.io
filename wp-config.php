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
define( 'DB_NAME', 'myblog' );

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
define( 'AUTH_KEY',         '&jE4T*+geQ.)Z%% &|`i*<!m_S;3V[}Vn,Vnwrh-muU{4=$GAD1[^E^K!-2&Uk@_' );
define( 'SECURE_AUTH_KEY',  'Rx GtN1$ AYnw $GTRFC[h[9h]/?g8?+h{GKO%%]w#a,-a$o/ @q|-Mcch7+ohOH' );
define( 'LOGGED_IN_KEY',    '8~vI?P~b5l{`p8,6s`z_L:P.brp$aO/CYOL0RQZQxO$(l`ZY!?Lj6r xD.WU+5o}' );
define( 'NONCE_KEY',        '4hTO@gPaIbHrTiK/.eu#}F@d[pOHGd`[]Uu@8ZMhN9e9utWv=aN&(=~Xyyz~O:Wd' );
define( 'AUTH_SALT',        '!Sg+6V0#nQ,S7L9%NdMtM8VH2&=ik k>q.00eryb,DZkc%6I]8V|rYg2Jl&i_f49' );
define( 'SECURE_AUTH_SALT', 'X~&z5i79*7Yeoo_rMqb%Mz%pfjDMn,DO)}u X*^e7$XLedi4Y4bcyOQ+uYBvm@]d' );
define( 'LOGGED_IN_SALT',   'c8f8dban)-I,qA6EpzKdPnQ;mxO`=uCwSD=3tKW&$L~pY$fR`uep%^?m@9C#?|]=' );
define( 'NONCE_SALT',       '-l[my^fElIo3j,mS B@`UfKL|i`rZtZ<.xkny3$UXDCbFu1$M$qKY4vtzQ_<Oa C' );

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
