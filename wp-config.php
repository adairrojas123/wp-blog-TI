<?php
/**
 * The base configuration for WordPress esto es una prueba para ver si jala
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
define( 'DB_NAME', 'wp-blog-TI' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '27f3953d92ee388d16c6cf9c22b9cab476e86cc3ab398f06' );

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
define( 'AUTH_KEY',         '&:qe]P=E`KZ!d),~i k:?4iR9qH# 4X#]]/5i[+ft& UIiP+A7HA$d8l7[d!m&sZ' );
define( 'SECURE_AUTH_KEY',  'SkQ77AUdP/?xm,GO`_N>`y(%.bjt wnrEx,Fk8=o0,~&u5lDg?hDB~tp[G{18he5' );
define( 'LOGGED_IN_KEY',    'AyjHvC/#=<OZnW&+sK<PkDiQ@ts+9@AH;46GCw)l4C%)wp0nBrrjc5Evyc; ebka' );
define( 'NONCE_KEY',        '9.k?dtQG0z~P.pqpnfhR[d! U3moor7Mor*x$X![oUmLl5jAc[Mce7%^x*FbqC.C' );
define( 'AUTH_SALT',        'zA5aM8.PDyGb9oS~v;,`G=)*C)8g80D:ImMfDyrED0<L%9-);?_H-}B$G]*Q &:@' );
define( 'SECURE_AUTH_SALT', '6b`jpxUxuGbP rFGw2hmH8I]~<)YCEpPuK-5en)EV2aS9c[AVYgfZSDakIylC5|-' );
define( 'LOGGED_IN_SALT',   'Zoc!hb?+]/GU|^|N%}V8d~+DPz3m{H6Z8(r!/:B@<>wnRT}Kx4[y0yK=lE(=Ritc' );
define( 'NONCE_SALT',       ']ZO/#[gf1viBC8K/A:YzQkbU_;t?k|>,4Q[|?JQe@<GP~* zVY0CLEzw*>Vn 7E ' );

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
