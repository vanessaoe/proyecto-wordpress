<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'iCell' );

/** MySQL database username */
define( 'DB_USER', 'vanessao' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         'Jf7Mpw|Lc7]ed, X=QhSy<v~B<IA|?yLW]!u8Ry])03+UVj~5|Dq<=YRtw-axjo^' );
define( 'SECURE_AUTH_KEY',  'E}aDEwL~KSlkjFy+9C.SF@qC)ql/7,E~t5sh&_=>MPXZ-}~l*]>e4)m-LdurxirW' );
define( 'LOGGED_IN_KEY',    '/(,RYsMu|hI{Zx;A,dv[Cse^wF;-XZ[Piw6Pj);6HQ)7&HV^OJ_b@ZYT)uKIcyE$' );
define( 'NONCE_KEY',        '|2Q43&8nWWZ[k!Q.e^LiMLTG/6q2+?/.7t,n+TK-^%lyV#LSlU{y&.5uA2QXSXhX' );
define( 'AUTH_SALT',        'IX+4}_d%a#jZ{WYJpNt3*o7ui^N]4;}%hLrW%dp8]J&KdsB49Qt^pt&^Htv|yY)4' );
define( 'SECURE_AUTH_SALT', 'G0}~J=:2)pqoB.RRyPd!!&qWUD42gsD`.aT}#(yQ#s1%OYJobq_Sn }_HRD.|yT7' );
define( 'LOGGED_IN_SALT',   '+)YUV#04+`${J;N?AqcHJ=y3S<k&RXjG<!>o{`>D)C}Q5JEhOp}JN:u10G9DWokW' );
define( 'NONCE_SALT',       '4v+W6Q%hu-3l7munULmt!hXk8.~?(E68~`SKQGOAUL9)9ooo}@`h|}Hi$fSiN#JV' );

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
