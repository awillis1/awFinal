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
define('DB_NAME', 'awFinal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'KmD1QM/WT9)c}C/^5),~`]dUPAM(=+nLj,5v@8<HN6MTn;;lI_Z!*+!_UYYJT;sn');
define('SECURE_AUTH_KEY',  '{Oc[wUOxgOQj ,,a{A/b=:TqA#:OnSqr^t,jMv8pb})3sdiG)B19NguIV?r>j`0[');
define('LOGGED_IN_KEY',    ',K<C:#v=3*J7eJ+$ZNJ}q&Z5o!Zy`*[q5k#5{KL_t4<)3S$kDE8r-#z?k$ )r%~:');
define('NONCE_KEY',        'EF9QMZei3FPp`TxUpia)Gf-$C4$t4fAft kGQTMwEDiC=eJOz]7?kG2f^Q|cSH 8');
define('AUTH_SALT',        '@fykWHwujuYVjQ/D*?g:p#{G,*]dfeP)clYkFwKWqR`KrVhJD>7BGI:})]i~Wb}r');
define('SECURE_AUTH_SALT', '>dr/GF0L2ypCWk%ap+4qh@IC_2T/S6C5a[pQQm oe8>HzR:[8ngG^8hExbg6E(M%');
define('LOGGED_IN_SALT',   '|XwOuG.1*+JL$W)@=Wjc!a~_ ;qun,8dTAvG+~40?m,^(n)IRhG(+r*=Sj11Bqlv');
define('NONCE_SALT',       '<Ne9H(1T.lA>sjG9`ZK4^0TnonI6/PCk<[hWvvBCol,H@|/_T3KUkF(1Hwd+Z9D<');

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
