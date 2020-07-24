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
define( 'DB_NAME', 'sam_aslaumberg' );

/** MySQL database username */
define( 'DB_USER', 'sam_dev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S/852*963.' );

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
define('AUTH_KEY',         'A9HTPd^DO?7@V`c/9B(2yL<t3wqf_qWyUw|Tz)ck|{69?}zRbWKaDwsi+/]PhH<4');
define('SECURE_AUTH_KEY',  'h34foY4^665tx?oIn*OARiGZ_W-*3|4X_xoGKGu.>T|s4c0^4`AVQ?k9Z6x6)TsR');
define('LOGGED_IN_KEY',    'Jh497Yb`Ds>-Z$MWNp#*ha+tdJp}A_3]#Ln]c,?cW9,s7*io?G!F7tu7-uC0.#4-');
define('NONCE_KEY',        'b^H|Q1Ry[_z<%+-JDET#zj6RsU9U9HZPF1nI&O[2JVYrHv?<AM`:M~1>X{@thYb2');
define('AUTH_SALT',        'UCHC8:rt&,?,`*A$f90KCtA4@u(eT:1$u;nvD5]q#-IoS^(r%]^?]&+@C;mY?kko');
define('SECURE_AUTH_SALT', 'ivBST*-EgZCpP<l0vvjE[mIAd=jC;s+k}$9-M{;l}t*hC]LR%t|T-jnc/^bMin+^');
define('LOGGED_IN_SALT',   '^HO$Kr|,M7Fs=ISQ@U3UpzIdC?7`?4+u|>f8p$Wn<yTjM0WcE-|RJFdhCS!6ny=o');
define('NONCE_SALT',       ')1Kb3#6axdG+pa!T;ntb^`Fm*;%7X9b(&NGHJ;fY*:THG(|E1cycr!0JEjC{7p8,');

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
