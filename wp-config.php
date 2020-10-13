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
define( 'DB_NAME', 'wordpress3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '6g.|g:9j.zRGT^$9!~)4GCue6{AcjO.d[F-{9fYx!Tj,y~&S-S2VH(?-`z4bJ vg' );
define( 'SECURE_AUTH_KEY',  '1J4BG}`n~/uMMVKVj$2}N{e1ynD#vn(_43}=~-J:p8En?FrJmTDL_xb&`7nybZ5q' );
define( 'LOGGED_IN_KEY',    '/T~~9C.+V?_yZ$jS_Rr*i;:4]f4)NwZ2*y c4(g81(,9ZCk:)M|:g&zWmB>,V/<g' );
define( 'NONCE_KEY',        '^S$rkxC4e1xVC|tUktSm*R)Kt-jcx_ j<5e7cJHsluI,G(GOltWL;f6^X]KwToRA' );
define( 'AUTH_SALT',        'lEndhuo~A|-vZB-wK&[mf7kN-WE=}7R,VoT&mkm/%j&Q=$}P7lgtl3=GtXGlYk)a' );
define( 'SECURE_AUTH_SALT', 'EJR`R(Su@(&uvg[GMApXXdh`GN3yanrbl2[{ f9Xn-V}w*w2NP:dZNw`|y*b.L2:' );
define( 'LOGGED_IN_SALT',   'KirmD@e+IqP(<n<-44Y[-)v?:pp#FHTHCcgHsM>hOapQs_Xd6q4CXq:m^Ygczi34' );
define( 'NONCE_SALT',       'sK^-s|E=(]1V/E_(Uc<_|kKi=H.|okGRc6~QL|8pE3EM3UD8*[@+~Gv``+uy(N9<' );

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
