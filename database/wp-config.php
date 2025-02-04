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
define( 'AUTH_KEY',          'M0FOANWS0TL{>TA>.wdxbwWDQc`U!2F9)eRHBW|H) X?_!@:jQ~Y)2*kQb.Ls[_X' );
define( 'SECURE_AUTH_KEY',   'gof@sAo&32GQ$^;k6.j2%n2Qhft},`>27B>~z_h78`xSnlJsI:LHmCry,gn8$dvP' );
define( 'LOGGED_IN_KEY',     ':P{=k(Uv|q[Ao,M0-W.YJa9#~t$%!->)(VoGnL_J.70e=0P[fc6w18b|SBP/U(h>' );
define( 'NONCE_KEY',         ' !!{yd~R+S/*q-Q6,YY#nb#8QdR-^1<zP<SYy)/yr%i9qH:Y<BJ|I~P> G/L(9yI' );
define( 'AUTH_SALT',         'V;cEdZ pLOF:K~eB<#L[-yucPxir[XmdnCU$w.u!D;#IBvu#^W!I?*LD4/87sMp0' );
define( 'SECURE_AUTH_SALT',  '2Hk*cw{&}vMzfR+Z[I]$<:eZz~+;z$Odqq#&S61KV]^uAt!iyR96r-QdEjlT4UZD' );
define( 'LOGGED_IN_SALT',    'u@jQ*t/[;10<{rG]O.1;re=]P;p:^ruCA%z4Yy)B^z>~lv  *5Wo96o%kx$]d29:' );
define( 'NONCE_SALT',        'kx2u7W7T}~Y_:kXFcL;J%3Fzoz!)@O$2z7Vfm9#w;D nTHd9!X.R|2.Z4?5%[9^&' );
define( 'WP_CACHE_KEY_SALT', '-FV(A]#OECsOh*7ih9XYW?ccz*]]1GJXiWvWIag;1n)IFaZeDY#mAL`T:SVw?!A&' );


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
