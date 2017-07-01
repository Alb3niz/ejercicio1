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
define('DB_NAME', 'mysql');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'tBxiQkm52wv2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|]@xN-`K)Ochk&L?m_q<]1cYcRyBsv21:-J*,%B_+,m6DQA%Gv{B7@P4o`Q5;Sz=');
define('SECURE_AUTH_KEY',  ')eFt[<Hla*r$_uH{D5ky{18`+r9Jy]afYX3Dg)FX-`l_g^7*TYPSR-{+]is3bRP^');
define('LOGGED_IN_KEY',    'c. LjRdLSor&a;k#^c?8MXz*(QET6q3g:)$Ei%sy)p*{m8/I!^,SDXL%~<-oXDtU');
define('NONCE_KEY',        'D 0!aS_E|]BWW``J;}n[bp56goM0n%CES{Q0=Bm!DW#d9AwTSNF9bh{q{kvCR1bX');
define('AUTH_SALT',        'WX*>+Q6_TxgGR`Jw>{iJnsd5jVl_y-oX#_W+?uKfIf$}C=Ze4>7V<+)bz[3kKsz_');
define('SECURE_AUTH_SALT', 'k7Q$=!$M*3]@T^nfUZAV$[9a%+kcQ~ U,oo(J4 zWBz<5ILU=A+ge=Rz%zuG*q!(');
define('LOGGED_IN_SALT',   '^q-kf/#oVGDy9]YK~=V&Qsi Z){bBD5[q2jK6c+V8WX?rN>TnfNRGB>_p*[TnY)i');
define('NONCE_SALT',       'c6gBi3K$Ua}>#9~M|0%Hy.}L!xs%Lx.[Z|H>,*3`@*u2$^(g,8+7WNe+9s;HBD.y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
