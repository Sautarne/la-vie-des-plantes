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
define( 'AUTH_KEY',          '!13Do`fc=k$+y+J8q`8eTNl4Irr4=ID5c6o)o5M*4wXv!i8/`-D8otW#Bc [c4Ek' );
define( 'SECURE_AUTH_KEY',   '>NQ~WPAdfp0EAzf!XHj~t@L<x?&@Yj1lE.]+5p_c4be;Ew^<<{,U4:kj&2Yf}4@v' );
define( 'LOGGED_IN_KEY',     '$x>zUA,@3%4_l%U26~,]OW0;/B^O5orb#atDJ.cM2=4l5w(?=Y6|b6P*xh^@e~|/' );
define( 'NONCE_KEY',         'vFAmPda9Y!1e1WL`!BB|7Hw?UD,)}J= m*Gq^&I8$]HX@-<TAT?JS7[8@FBE`z$o' );
define( 'AUTH_SALT',         'axki$LE>GY@c F:u/|G*d|i=MqpT@+z_D3K5xQbazk!pK.Q,E.<}`rUP<n[GH^V1' );
define( 'SECURE_AUTH_SALT',  '4|{`/Xn7J*<ZE5erf5:T7r^2jClZm0c[Ca7 c#<zu{,La@m6tl=p!K_|z#1)qSWB' );
define( 'LOGGED_IN_SALT',    'I)X)xNr0KACLqt5d. ~&3n8sewLcoAz)Y$:OL_:e-`g;a6Z~N/KS;+Q+]7VJ~IHZ' );
define( 'NONCE_SALT',        'S,>h|a[JB+z2Fw97RtS:An{7fBDPR.4Hu2TD*=VrE F2L3DC^XG188LY6W-v[No@' );
define( 'WP_CACHE_KEY_SALT', 'HVoDR[p=E09XNO}CNgDeRWXd; H&{H1kRqqbe5qI[v:^f6I;:^9>R3K9$dhwrIC>' );


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
