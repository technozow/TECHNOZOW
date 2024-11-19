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
define( 'DB_NAME', 'technozow' );

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
define( 'AUTH_KEY',         'X.IN;jQB,M#v4,]gkU&s5OB5]*<f(+Y#T7}_L@15(=unt.=6=GQVdf2.%OYgacg+' );
define( 'SECURE_AUTH_KEY',  'JR0]b).3Hd7Mp<t S<sLkta8+iMk.TWA{G fDo,a5x~&XuBjks:&*s,n6~T2`pEp' );
define( 'LOGGED_IN_KEY',    'XSe3gEY5`,F-y%?4cZi[r|t0iil:(u_C5c//]@2k+v#%bq,zPPlGMYDok^)f/YC_' );
define( 'NONCE_KEY',        '6qgPzSvT<Ue(AaTNB(D[6LWy,jSyu(QFo 3@TCc|6MvGOCa*Xb.9{[&9_gIg&nO-' );
define( 'AUTH_SALT',        'g.sx;gIwY>y1b9oF.N[LT[Q4Z{`5SZ(w%b0n!;6]&~7+IePB7Lq0)Fm&o6;H7ODW' );
define( 'SECURE_AUTH_SALT', 'Jdt]+T4?EuQ,riC65Cjc$O[XCZJN=R`&f-Lu~5z_I,/%Yfs-U<?0$gX5LJix7^</' );
define( 'LOGGED_IN_SALT',   'F6|E%hO;^r/SP eiC.*#mr,vPDFP+]b?s4D!PQbir<U X!n1uU Bu_F@4)g%JpJp' );
define( 'NONCE_SALT',       'Zz<W7Q#;U<i~2GX^M<nE){peD_tWQ##LxoXJX@BXs}siNS,r/k>rwalTR#wyjv^>' );

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
