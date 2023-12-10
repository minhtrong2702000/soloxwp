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
define( 'DB_NAME', 'soloxwp' );

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
define( 'AUTH_KEY',         'Dg|ynm<sCs=^%ibkN@sdA[(F7GeuQwQh!*RqFCc8{|c`|D;?b5Wl;LF._U+$ajpP' );
define( 'SECURE_AUTH_KEY',  '6B+#U/&$JXH.~2[#]k>J6puNm~t_Kv#cj3T9c4U)e`Xc`X0xHn:EpIw{ghu+39:v' );
define( 'LOGGED_IN_KEY',    'O*]UVjTUO`P#02@Atrr>^[i)OSEsr&L$jl(;L6fu8L/F/.;1Dh|L~[MdHKn,)]g%' );
define( 'NONCE_KEY',        'y@uT};Hf`xBr.RI;-vbp};< 2^<?/_I^Z48uJY2Vgx;WW?F{;6uBK_dsv;C,q  O' );
define( 'AUTH_SALT',        'Zr ?$rvL!WB)aFvlW.bEY4QIX2,uUP@<m#few{5PDo,FDN;~<$bxPIz4@@1B#/8$' );
define( 'SECURE_AUTH_SALT', '`5.aaQQ(swxVxrg0iA33Hs4~u Gc G3ebZHPwqn_b8fPJPdg2?Z[=E^ww<vE!%Mz' );
define( 'LOGGED_IN_SALT',   ' #Y>s0|cZ.5~P1A5G*Edn<ok1lw24x!3w7*yh[l `R7tK!g6`j{7S__s^f%tGpsL' );
define( 'NONCE_SALT',       'r.U0KH4B*RHadn@N|K1|:C`1V|z7}*B+2#y1*jY0K&RJ^<Ar)ySP<f<}bvVGUK9`' );

/**#@-*/

/**
 * WordPress database table prefix.
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
