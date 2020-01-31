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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'work-on_frontend3' );

/** MySQL database username */
define( 'DB_USER', 'work-on_frontend3' );

/** MySQL database password */
define( 'DB_PASSWORD', 'WorkOn6$' );

/** MySQL hostname */
define( 'DB_HOST', 'sql.work-on.nazwa.pl' );

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
define( 'AUTH_KEY',         'tEM0<>|_o<)DQ``2qpQ`h~~&Mq_i%a1..:YE.8it9ib;(3SrpSH|D5(u49DqU<s9' );
define( 'SECURE_AUTH_KEY',  '!)v9;kAi(6,Ax:V h51=v-*W^jC68f.clwh:CO^]dEob@/bP~[g>d#}={-;2A>!E' );
define( 'LOGGED_IN_KEY',    '*yj_4|7}]Sq%|EdG6SgQxm2~((F88W) @XcKA=322F+X%B?bCk0Ui;_.k-J1Of5K' );
define( 'NONCE_KEY',        '-LAE_YCU(iYC+(8TntYDS/<7Z!Gn2$!Ju@b@_<bb)5YQtt-<}fRFS)vv$*(3T^%=' );
define( 'AUTH_SALT',        '_mMu+!`IB-u#w}vjN- tM&)&hj,aWId^c+{R09r>k;6o#%=HRg@-]pPs5`wox}7s' );
define( 'SECURE_AUTH_SALT', '?YgX~LDD[[)4*o_^**`U)`Uk(4@pAK233M~D@xUztzlo-aca:%?&e27l2JA,z*84' );
define( 'LOGGED_IN_SALT',   '/bdy ry/s=]fUGs4>uszS$(!-;g<4 R5[BP1!=oGv%#bTHGv#eu[d~hwkdraTerS' );
define( 'NONCE_SALT',       ')0GH.(Z.>(ukp:V^[|~[bB!/9Mo0zG;G`aj~{)`hB5Q})&/$3{7!tLYq{dcQugb?' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
