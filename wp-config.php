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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'insidgd5_2dd' );

/** MySQL database username */
define( 'DB_USER', 'insidgd5_2dd' );

/** MySQL database password */
define( 'DB_PASSWORD', '8BDA5F9Equdw1g64e2o3n0' );

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
define( 'AUTH_KEY',          'gf[CvXT|?BVTId-C=eWA;YarV]DR2|aE0F/TSN`.^Ei#p3<jLV3f*sr^I}8>N-2*' );
define( 'SECURE_AUTH_KEY',   '=.oK<`Cp l)D.8Dn{nI&C*v|c-@F+AWShO1d>R43ekM7gW_7YG_bP&<Zd!T8Dhqg' );
define( 'LOGGED_IN_KEY',     'M&R_u%..WQzZ)YIgtuM2-]}QsMqg%X5{#Og2%!(hR$?6F?lbL8viA7KER8e%-ay[' );
define( 'NONCE_KEY',         'BN?Ad_wc_8AqV7J1bu0mOnL5g8Dq3}rk~6WDXO@Jj0P6ujj`.l8)3]uP<N~~Y(wt' );
define( 'AUTH_SALT',         '_L8Q]$d-0,}y)vPz||#QAb]7em)dkq?$X1MMRdCTl)pE|7==GJKF6=.H918 T`HN' );
define( 'SECURE_AUTH_SALT',  'tg^3^k#8f$%9 ?;u%kV=i-Uw(ti^Yv<r:VBEkl|RC;BopiYZ|@LGhP)7}LF]0-%c' );
define( 'LOGGED_IN_SALT',    '8S?bi^F-0%Su`o}}n.My1S 0^oPAA7xvi00]/c|LCt@)$pV:sF>31.<c/Cj$RMFt' );
define( 'NONCE_SALT',        'D 6-CNjT-V-z[;}!lv6:-W1dAa12LS~HsOxNaeMD:#nB=aVm.(q,FoH<]^?}bpz(' );
define( 'WP_CACHE_KEY_SALT', 'E-h;0 |n4s.aI6;8Qa:rER0hCU:p~&g(]~~J#7XBX:4C-w)dy@!}1{PbnrY&pv5/' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '2dd_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
