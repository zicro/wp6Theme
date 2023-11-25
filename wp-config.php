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
define( 'DB_NAME', 'wp6' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '>Sb+3551XdW4`f1{;zoS{:FI_WwJBc1SluHF-/|S;}/6grxTQL3>{dd$!P^>=z*I' );
define( 'SECURE_AUTH_KEY',  'jn9 5lZ+Qa /,b?xmAsibXIo=nuOhNx4UM:esZfQ&HG$-TKPt:8>cYF~Ww6TY9t!' );
define( 'LOGGED_IN_KEY',    'kTIBYq#(-^2:qsm2#w}^*L<3wM;1[pcVXNe3(%XgI7i~?RmJNmJ=,PYB[1K#L >Z' );
define( 'NONCE_KEY',        'F{F=]-HO_]aRbLxN66r0$#ABqf/N8fdv~Y4y1cOw[S`.#N,&g OIQ[OV$jywo%TB' );
define( 'AUTH_SALT',        'a$s:d(6;N &#kIpJ+su|sAq~wWHnYLV>qL-2>9R7J5,}nvfF7,<@>QGxVU4gX_8N' );
define( 'SECURE_AUTH_SALT', ']AA*NdE-]QtY?le>t0}+P(9t,eTn6C&o1|oQP:3mI>0J/Q9?&Q`b2+9{Rsu*%_2m' );
define( 'LOGGED_IN_SALT',   ';tU$**2Y+J6r_7(nf%F&g(o+p8o{%}^q}l{*B]O4[Z[sh5`NweYCgr|~;W%lc[3_' );
define( 'NONCE_SALT',       '743n|pb99O#ETZb?$a;k<o7!|[SU2d6ELtN4F6M@2u:TR}T`E<Qw-GmjovKlp[Jl' );

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
