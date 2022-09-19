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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '%ev^w<~(6Dq<v{BPv=C({3$E+Q>Kh/i|a]rgh]e.Df.t6[?p:1m,NCOb`s#<1PbO' );
define( 'SECURE_AUTH_KEY',  'Dd|(c^*)r8WqW[WdArcy!X9.zs/UQ]2ROi|WCW/^sdQ3}`iVsC!VrDjN-%e5Hp{,' );
define( 'LOGGED_IN_KEY',    '$ (Is]V utmI?x>LF$*sUCK4:Yv:nV^,pzbsy`=SJxF#F-US8SG)]C1g.Z[gQ@-4' );
define( 'NONCE_KEY',        'n<|J^8J.W(:z,J>DquHiJlYY*Gx=rf|z[^tX864j9Rmvn-r`&G2Z bG<T[r[_Vfv' );
define( 'AUTH_SALT',        'N.hi`G>tRdD9vL7v&&4nOx/~V6hZg7J{;%A.3l,u*Ni v:>:hGlLB7q>a!*+`P!#' );
define( 'SECURE_AUTH_SALT', '2OHkJQ2fdLc;p%-c)KG?-=Bqm.58_6FA`a.McJ#{uOQ$&&)IJ3M+M8w9IQsqp^u5' );
define( 'LOGGED_IN_SALT',   'zVXtVRs=+*[W18t{Y8TsakM8q=YDraXE#l|akE5p3$7R`Cx>M17P3W@<ZE;5`@($' );
define( 'NONCE_SALT',       ';]$cwsx/zcnE1W?$(KpRg<$#dH}+@cs%[6hw_8u&H~qe`gDVWW5i!l9>2J${CH7{' );

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
