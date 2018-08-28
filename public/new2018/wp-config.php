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
define( 'DB_NAME', 'insidgd5_fe1' );

/** MySQL database username */
define( 'DB_USER', 'insidgd5_fe1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'BEC4732AFa5jdh9c8q6r0m1' );

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
define( 'AUTH_KEY',         '4lQZFLW( _gFvr2J57r6yQ73I07G{sKQ6GjiUu6pQ2tt:z0[w7VRGtp@3[d6,:2I' );
define( 'SECURE_AUTH_KEY',  ';?0wr:1J#y6?^=V&8xO;f<Cyvw{>b#ViX|?M~OUL<Q:<FLy}j~hauj8bHOK9_[+U' );
define( 'LOGGED_IN_KEY',    'HRB-v!>{KmB24A}nVm#jJr!hzuxY:QEz+Fj_FL7aMY}ML]?-l>tdf@0V[Fo)?FTF' );
define( 'NONCE_KEY',        ',zqm/qdOb-uAB:2/6i5337]/zgFYc!+#}8#Wyo8yC~9C-D=sG`x=x1EUEg2vU3:7' );
define( 'AUTH_SALT',        't+9zGe+XyO]DwE1TF{=>$1c= [N%`&}5xKPZ277G<K#8AlZaKES=y_-s4kjHQiaA' );
define( 'SECURE_AUTH_SALT', 'xMj_xe}5H$mxZ2C5pwE<6[T2<=gYL%My,x7O=zj]t`G<Touw5pew{?hS(ihm&tzn' );
define( 'LOGGED_IN_SALT',   'UztJuv_WZ7*L_lH`]Gj@%p`-78NbCejZ9{zzLdNuS]4MBH;f8nP})|Q~ aRiVE%Q' );
define( 'NONCE_SALT',       'FcZQa+!|_iUwRrlRflKQ?Q}3GoiPZOplL_f`O@/]#z[`#]x(ArZZr3%pl5^Ey=9g' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fe1_';



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
