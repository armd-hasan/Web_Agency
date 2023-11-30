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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '*M&0u<AL;C+g%WfM5tS/D[Wo1Si9z(vSg7GN5{)t[~3gT7NL}fcpj`L-dSPfr8)A' );
define( 'SECURE_AUTH_KEY',  '@iX(/,NS;B+u< 1?.i@8GY{?m/AAxv4awa:KU%V6p1r),Q));q?s$&GT/on<$-:*' );
define( 'LOGGED_IN_KEY',    'c^Rjj F>[vJi|L5>?`WJ:Fu ?G8gy_7NOa/$a7=:U,YE]YCgDut)0|TJe01;8a!J' );
define( 'NONCE_KEY',        '!`B5E_<fB?31n1|0.Y|h*dILsesxe.[E.KtEL%qbP:hoN!V~SzF@MyxnC+-M/>#l' );
define( 'AUTH_SALT',        'ug,,zC6]>S2vxjPA0^]7.2e;bHB`F~j<2V&S*7c4a..n%nLG-/.Umi%#vp6#PC#W' );
define( 'SECURE_AUTH_SALT', 'E/qs4,C0=HJ%f>zW1{p!2zBVW}<T_R88CKg[ne8e{hdOXn]{4Y$r0bYZduNm+ixT' );
define( 'LOGGED_IN_SALT',   'tMHoc/rS4I_EIDpLT#7;Zc2kBa%k.+a$6A=:*nW5=U$[~*qs5A~a71f43v*%=YkC' );
define( 'NONCE_SALT',       'BvV)WsB l7{KC.:tVaozNd&CXCM+m9}`2 NgwxI_%[TAHLsyPEvS+<e0245W0xO,' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
