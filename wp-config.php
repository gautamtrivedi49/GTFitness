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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'JGF`l?3@$c#D@9<>Rm.Sn4>U1gf5w ]=Ndt#Nb?F)c6}Xr?rOCU:=.&oC o0MCe|' );
define( 'SECURE_AUTH_KEY',  'dwYs/W?dNKWPgJNIO?;kU0 P%Zr7W0{]I@Q7K~&u.O$/0D|epVmpRL.1# NR=0P[' );
define( 'LOGGED_IN_KEY',    '&.1rMfbWkNqi#=U @<L>OC/dr_OSn:S&BxWy}]{Ym.lhm*mx|ezPZ[`G-]|55y6{' );
define( 'NONCE_KEY',        'A!$x^N>F,F|F.uNt{mR&LE3u{P]:W]b=ewW,VA:7HLjrKVS<AUKu{FN,<k!$.Jp/' );
define( 'AUTH_SALT',        '+J PtiIb8-+q8z4pys&|2&Fd..%ps! k*M#g2{sb >`<U{oY|DjW8L2+2-P&vknk' );
define( 'SECURE_AUTH_SALT', 'P|AgCZ%o6?a:o@g}g|uG@u>%b)I!Ln<Qui<rN3ibD7AY6L1;W4 Zp-JV}ZTw ME8' );
define( 'LOGGED_IN_SALT',   ')v46U-4N7ki)1S^xSuF4Litz^({)+;CXk#5o-OTkYL!k?e`l L@a}@$zeh<5f([^' );
define( 'NONCE_SALT',       '_~}/:_6QH(`f,MW.9~lwVy~}tot,#Qf[ALHSf@VWq&.tu@N}Up],>f0$VjJ=.2Q(' );

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
