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
define( 'AUTH_KEY',         '9JO,yI/^Ra=k`N;MCBiij/nKQZeDf;),)A!o)zk5a?[,}5pg6 @__)}%2xOg2=UP' );
define( 'SECURE_AUTH_KEY',  'YDWZ44ZP[N.j17}B`$-#B>Y?H+TWo7Cgfv]zCbo+l?=}TvAKaf>KzM9_z#}~m#;R' );
define( 'LOGGED_IN_KEY',    'SJ+uLE`!Z<{X4/`?NO`#Um5WBJ4aU%#C:n*G0wyS2/:4ooB*M* I?U$)(yE)<(Wo' );
define( 'NONCE_KEY',        'F8]lEEJpgI97OaPX[!F`Exk#8l[/~S?AvD6iWh|Mtij{7&L[ q8p/?r.H8Wwqktq' );
define( 'AUTH_SALT',        'unWD]n*b.8R?CA9{vW>g=@Rj=uKk ,Knq*8ApE G.RKf!FO#p,ha{dXV[a;]wX&r' );
define( 'SECURE_AUTH_SALT', 'y7^U=M[LM9X2B* FDyVl1bj}reB{e{^mZb=:eA/~3.hX_Z;+JPj|l4Ff&036(3>W' );
define( 'LOGGED_IN_SALT',   'DF#iKEP+S>U{za/R(J2GdYN>LK3zD8/L]-Z|J|7`Tm9=gcMv49OaC93nWGf7xb1F' );
define( 'NONCE_SALT',       '4b (Ivr%$b9,WHQ0Pr+OW$S)U* K1Y2.YRDe8_Sq(tUww0DKoESPEao*I3zQm:Ma' );

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
