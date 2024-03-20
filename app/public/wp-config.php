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
define( 'AUTH_KEY',          'TT,wC7W0-nHE|[PxteH9}$O1sVYfkuiBcs%h-n.MpS<R|XNc&MZ7RHY^6/I_Kxih' );
define( 'SECURE_AUTH_KEY',   'G.8EyMCKGZ;C@U?`/nvgvi!YL~9q}+iwF)#h8$l4v5Z~]S {)[@k1TsM0Psnxv=P' );
define( 'LOGGED_IN_KEY',     '$:m3<yD:vv-W&&y1vnY/#(ROr%>{,t.s8jIFndV2 xE5Q-xxPy+g#[kO-LPu|g`[' );
define( 'NONCE_KEY',         'W0+T!%(6BKa>.tK/}P+QoP?pWvwMTA246C9,;]5Gz?QGT-)KC#`}`tI9k$3)[Oj%' );
define( 'AUTH_SALT',         'B,RRx0KnHfg|PVDX^:tk@yP?mq?q5c`#~2`mL)wPkzZq<|]S/gx/4v!N|I}%R`jE' );
define( 'SECURE_AUTH_SALT',  ']R]ANA-* <;9$#/Ydq]+fv?ez3B>T%@ou-R~F_ww*Sl.Q|N22:]>T+5,-g`5-pCr' );
define( 'LOGGED_IN_SALT',    '##|mF>FvZiQ[I1SU{Y`y}8*%h =((h[E!ch3w7I[|fd:zyC,0nUNj}#8-nMhDxpv' );
define( 'NONCE_SALT',        '`T9:vVmy.4&Dm UC;n$MuI*X4]CuABqE<RH. rw &ICgrXdl-MyM?a|hYN*%{)h$' );
define( 'WP_CACHE_KEY_SALT', 'Rj{_~?Jz`S -8oWOwQWCYg]UF:W/jcPg[pjRdbdP(H11QOP(;ugH3gH4jg7#~$-@' );


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
