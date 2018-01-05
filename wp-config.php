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
define('DB_NAME', 'affiliate');

/** MySQL database username */
define('DB_USER', 'affiliate');

/** MySQL database password */
define('DB_PASSWORD', '195711');

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
define('AUTH_KEY',         'BO(2(k][ c$Kdz[]~q)kM*&1Fl]CG9-+}Aekps#)7]t<Addcxd@nYd@<q~2D%7Q$');
define('SECURE_AUTH_KEY',  'V<;6/c&D<{FYCmYhtQ&8^FPEq`O.YW`|(V0e_U7H*jLNFg7Bz`[lo#okjNWtK)27');
define('LOGGED_IN_KEY',    'R$!`9~Y%:r=klK]nL#jfugA~%w~y(:}fkp[NezW(SyAf-)pyhYwa]}L&Y @uQK[=');
define('NONCE_KEY',        'WG />E20G?3#&k>]34+~wX%$&L>1v8MZX9{b`=1Bqduzph;eII<4jQyCWQkL,kYr');
define('AUTH_SALT',        ':#Q8qP~myH`G<b-=]SdMPh7AQ_oE_ubCC`dc9fzkH*j_xtV{;D(YiUC3E>L%+qQr');
define('SECURE_AUTH_SALT', '62[ae(n_zFBIT|y<!J>*QMHxsfLm|(X0ls&HFvQ|{MB88g@+Np1ogdj|L1EU&um!');
define('LOGGED_IN_SALT',   'o{fFNA4T3E+EQf6t?@k_u`DwZFU,(QGVl$TP`~2Y~jhZu<9IJ(vv,va$A1<U~IIG');
define('NONCE_SALT',       'Iar@(r;f|tJ)Rf3[_Jhp-d:9Eqfya^<u]J*+lzn]k>cU)]UZY/#NQ_-x{QF670,W');

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
