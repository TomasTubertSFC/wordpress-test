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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'GGx{VyF~4wCq8JeEJ=rrCo%tZDnrV3!_dVK[Pi`flxOLv=.$>.,PED(tX,J?Q*3n' );
define( 'SECURE_AUTH_KEY',   'dBAI@1=<J!AV!W;/sp#zIcrPrmcr./I yS;kOK)mNkMhzM.:8|*SuMg IFKme$eU' );
define( 'LOGGED_IN_KEY',     'eFV21i=005N>4>o 7C=hfSW_[{F4-0<9kow@A,y!YbNo*,y%l`)BC7REk)b$(hT{' );
define( 'NONCE_KEY',         'luV`T1GR9?}8[[)35e;.1-_5h *F!#Gl,Lt!H?PT^(&q<!Ho&*3<?]qkp-i0RBOt' );
define( 'AUTH_SALT',         'c!!BhG><9*$WK5}Oq7)#3fLP1 a8@o*~.Lpl?@T] i%LBZ|[-^SjP9;|RpoHuIRz' );
define( 'SECURE_AUTH_SALT',  '.Doo@69pGlPgb@aJ<Fr ?;/?e^9IpCdrk40H$!-f_K**Kk`5,uvXCnwbDa&va?t[' );
define( 'LOGGED_IN_SALT',    'iWTNv*~>,Tgm(C`*-FIsR5_F|CeOvm4kfM+|&NiPc2R1 a.5<gkyVm<Km)W;sg9X' );
define( 'NONCE_SALT',        '@$rF-L%I//sjXDJf[aUZ[TQCXdCkTEUg;b,s|yBw$8y_&p*AqZF016dzA^Ode2FH' );
define( 'WP_CACHE_KEY_SALT', '5jVH Ope+-GX6wu=4kN*:Vm<7nS_gTzeKL</}F-;fhIr`qeqbWQ#XRTe,i1Ml#0?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
