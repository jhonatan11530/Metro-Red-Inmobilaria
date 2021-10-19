<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'httpmetr_wpdb1' );

/** MySQL database username */
define( 'DB_USER', 'httpmetr_wpad1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ZmQ0OTVjMzM2MTJkOWJkNmZmZWUxODZi' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'F>)^eO=|otE!X*/-iy$.7E5Z bG5bW_W*#dmldU1Tb~+]S, P${g]eE%k#)_e^->' );
define( 'SECURE_AUTH_KEY',   'J)~M$A;5KnYH=k{*fS_Ls:7:kzQ- J;.U/=Zx{#kmsb,hNT`$hScPB5m0~rmyP4D' );
define( 'LOGGED_IN_KEY',     'Oxg;:n.:]oFkDdpYXXrzD]Jz86XPS),LJ:zTg%dcFxgCbcqD[{&[LM7Eq@$5O6f6' );
define( 'NONCE_KEY',         '_4}>>1$T;<+u}FC@K7 8haLtQExKdNH^%ai~Q?H>p~Fz<?ZMZ}Up7J}~8NgT&?:n' );
define( 'AUTH_SALT',         '`wU2appexR6Z|.8)],y}xJAx@1nB!cw/!Ug/D*S-x;5m8V[?se7HNf<j>q|2DQ)5' );
define( 'SECURE_AUTH_SALT',  'W9^4Jt;<tM4JsqB?=[Z2piF#ayneDikbfr!9h#<}OmzLg0O=7ZjGK,^?Je?l AfQ' );
define( 'LOGGED_IN_SALT',    'v~XO~%sl_T+TzfGvg.%nZ7Rnl_^2Q[g)c|_]dE7:?PtX{*Ab8c=_2d?ZJ8|f$LvE' );
define( 'NONCE_SALT',        ',k]6gI;(0;3-1_LIBT+PvE9!Zy775~oC0d{[#T|<[9NRxx=:t]-#?L#BC+)LX/cz' );
define( 'WP_CACHE_KEY_SALT', '.d|!XxMJ5?.XI#PPrNW,$]!#c%nX[!eAI@cv^jC$vmt_89p0*jxk-VU|#sv<Kl|m' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ch_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
