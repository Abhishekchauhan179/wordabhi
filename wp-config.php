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
define( 'DB_NAME', 'wordabhi' );

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
define( 'AUTH_KEY',         'w/pFqSd<!S$Y.kufV@d.Oi`FHLTkCG9T;) FNZ.]s2dWflCIM+2Q7jlH*aGo-s#`' );
define( 'SECURE_AUTH_KEY',  'f@?ZLWHx(hw]9=N}19cSZHQy$Y!aeLnQ~Fq<pkU*VwBTyyO<*K>u::dq VCH&(,6' );
define( 'LOGGED_IN_KEY',    'lC7qwjy7*?v$yl@8:;?RJbTKAgJnY1u`KFw|evoXay/%7a8|z(?wT]An.FY)-obF' );
define( 'NONCE_KEY',        '=8nQ4[24w,~Wcw+GT}]``h9G}~GI+LT`VmfR@/$<9u K(be)Z^/`*l~ CJ86_Sz<' );
define( 'AUTH_SALT',        'n.H*.P:;eCFp:A:ltg|W8rT<hCfdRqo(g[v}AeEY$23YzY~MNAyX&fuSQ<+@%Ox%' );
define( 'SECURE_AUTH_SALT', '$xClmt2{eh%CLmSIWL&3#C,4;)@La0*-`>86P+~WEVhw{Q@(^z$D3Bw1e-PLt7v,' );
define( 'LOGGED_IN_SALT',   'Po1>Si-N,|[.XZ*emOa.i7dWynGHJ4zjXvC1WlMQRXFJenqANqHO5eO[)OI:>2cx' );
define( 'NONCE_SALT',       'WyC-dhB^O4$EDN!M+p_YZY[LNd-{AJ9dLW6!yl2_IJC}?!rt4~6PQFFLB%rL@<Rh' );

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
