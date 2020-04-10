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
define( 'DB_NAME', 'miawedding' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123123123' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'iv|`;kHS9vR0 R/*DoMAYUn;sAr(UwyUO!=E2r.taYu9Dy8,rJ@,_C PV6e@PX#{' );
define( 'SECURE_AUTH_KEY',  '4F0gIHg_gc0r=W49JAKh]0K=`[y=p[/>26VOLVv.z{L0-z-r4^gztF?<)VGBLRR3' );
define( 'LOGGED_IN_KEY',    'nzdHKW/}KO0q]L0](UJJOXRG!$LvUWK{2^)Hu.hWO=<IUN/1n,j>!`s6DLl5@L)l' );
define( 'NONCE_KEY',        '7!+c#R}uq),Cxh)8#GN~lt(Rw!UNe-;4QIbXcJfNOW1ZF`8`+=xpj?S|]cGa1>BZ' );
define( 'AUTH_SALT',        'cKTqi6}j%y_Dd.hIH9aziVZ`wM-lp/x7t:SPKhM0+LC:qQxAjVyS/;q(2eB>kzG^' );
define( 'SECURE_AUTH_SALT', 'l&E2;zkNSA!0cPo/CsrN{bxt>m6|) .,Xh--T.a}$K`9~M%Ixgu{s:$>3GAv[r-v' );
define( 'LOGGED_IN_SALT',   '#e4!.pd]:7rwuapKj|FTUl%~C/4Iy8m!kbVQMDkNEsi.N&hm9^y$ 2EY9|.ps2zB' );
define( 'NONCE_SALT',       'sN%7T5KFK7Z0U.#I5@q?q$9Kt&dzh{o~1xgM{nb1;ZdDH10d&zez[d3SfeO^*)i}' );

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
