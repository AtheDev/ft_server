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
define( 'DB_NAME', 'new_database' );

/** MySQL database username */
define( 'DB_USER', 'username' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '##-`NQ7oy0=@Uu2X|fz;.TOR2+RlqL7@(?*lu+uxGEH#T8[@w-(BN.|$vEtgJ;Hz');
define('SECURE_AUTH_KEY',  '9FGFEFq}F5`Z7#+Vx>e?DcF0lk|]}L-*o>NI{i;H(Cl!m4b[h$k|]iKR)8wiZAdD');
define('LOGGED_IN_KEY',    'f6S03hMUR:+$KdBMP}HPn7Ejnectg[6#[caQ-M/xmRD/~;(A$K|F+uM]7VWpgp.R');
define('NONCE_KEY',        '>pfirRSLzS8wHuu0H]w1:(-g.(-*gMZ*W;o[dmN<GV*j(-&B+a:(I-1m>R}g$P g');
define('AUTH_SALT',        '7,&v`p@jN^#-G>^>5TfyGr^mdj&o5ov[Z0X^hzT1S@|`o-TB%G&HsJL]XR`wxKh+');
define('SECURE_AUTH_SALT', ']Kv]s.E5(0h-O)W)f3 UKst8%(hd@2.GT@HZB e$W[X`u)T;|I~fNo@WhD|3u]H/');
define('LOGGED_IN_SALT',   'G#-~Gy;(@Zk)^1m45O0.P-m}t|vylJBJ-<m[aKUB-Y1+!I.xfmse)J)-&2Y/j[>v');
define('NONCE_SALT',       'MEK4-.6P)QHHfHOx7bTxbHstC!]gG$n6eW/_ms%5@U#ES)t/^2<*3)KH|T~r7HL7');
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

