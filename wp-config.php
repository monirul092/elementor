<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't5DM61)0Sy9Ix3EAKN}^km]W$eFTKf._WrB:ETn&:]4.7LTV{8~ j;(W{0iRJ1;]' );
define( 'SECURE_AUTH_KEY',  'C{`2){7z3;F_>p+~fj s!Zfe*toiw:H?i<J#(+JO]SR|vt/^w<#Ke+8@EZ|m}f`(' );
define( 'LOGGED_IN_KEY',    'Y{Y(;G3$y=oi96a^:tn:eQt*TZTe.*:YO=Ua{;TR{IW9,eLAOu7!fPMpbpC@$<X?' );
define( 'NONCE_KEY',        'A1lS0W eP~1x3z.|4z|xo4L&r:.gM7)N@-C38Ik{K9&)sjsxrxmc7?_)N~E^-vS+' );
define( 'AUTH_SALT',        'gxSPsp$&)0%-Z.H>p{w/*t0A5DxJkpfN$mJ>[4G{V0bXl;yF%$g$vipu[19GQzAv' );
define( 'SECURE_AUTH_SALT', 'l%2~%hzN425,z~:(TO> @q)!BDjlTn`xC*!#@E|!V/pUp$phB|sajU<:9cn&Rd:z' );
define( 'LOGGED_IN_SALT',   'PRx&aPV:OubN.;}B7;JlE#9K*/cb%SZ2^N;5Q=Rda-2D%<(sL%_fH^}=xr|kgj!q' );
define( 'NONCE_SALT',       'zM4HbQKsV^32X2:{!{tYEq*9qj;.cI;NWN(B)Ft.dq*DiL7=mqG78dwrgB%wt+.b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
