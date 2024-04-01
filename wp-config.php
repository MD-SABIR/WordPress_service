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
define( 'DB_NAME', 'service' );

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
define( 'AUTH_KEY',         '#[&==!A$y@oqwrHXB67Wm>CG++m:cG@*]!BHzaLV8O-o%xFn?t$9,,AAEyhV)}ms' );
define( 'SECURE_AUTH_KEY',  '&B2nl`PZU-:1bC7}z;SB(<1c|*K6`e]$i-Oau7^Lltc}V6C$@7he%XpV|)b75`By' );
define( 'LOGGED_IN_KEY',    '9ciP/+5p~5wUWAZI<4+lYU{t}__!,Yw]#.0Hcv@~6)XqA_FA1`6c>d]}9GW*8<(W' );
define( 'NONCE_KEY',        '#ow#WrBOTPN.:hw)Pwb1N^i^)o&MXZ*o9^?&Ai(K;dz[lvEp9:ON0agwDIqKRE>^' );
define( 'AUTH_SALT',        'c]V>RZBga?_OfOBiXtfaQw8-hPzQTc][}jrQa%Le]XM.=%iM16p3L0N~$2eyb[K(' );
define( 'SECURE_AUTH_SALT', 'ywi?Z8w %0z8_}Y)abA%TE^D>P|t<+9z>Jh5K9R/%%+gMU*)F.$oS4PP.qHea}/*' );
define( 'LOGGED_IN_SALT',   'h+L9GQQ^F2Y-OHBn5FatYGF~8(0|i8X/WA]>)?H<}Fw2$a&53uK]9Efvg+i-m0bO' );
define( 'NONCE_SALT',       'ps AsZF^S;t0}J4N4IGRC*CmIFcyGS|SI2sux,[PM@thnPdl&E:?b3{BRo^huh<{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'service_';

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
