<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'O0(RBgc?Ghl~jQ_>_Q*!47?IW<H|%D?hQmrEsVY1N[. S:$wrGMDb|RM>~[PKEaf');
define('SECURE_AUTH_KEY',  'PW;>Bhxzo),?kr*J1O&wWZ5(M[R%WxsdqHqCNu{`[arZqYS<<B*q:*Z;|5fykO*N');
define('LOGGED_IN_KEY',    '-Gy@rtI}:SL/(m{OfGI;u3e2GJ{JH!GXm+w|P^nOr]D{DK3#d_zab>(@lS(,|eZM');
define('NONCE_KEY',        '(9+AqAaay>~X8Z}#PUQT2kH?~q>fS$MIm*Fh_;,@1~WcpeB3%|b1/Y)/w#{>.HJK');
define('AUTH_SALT',        'V,^) vx*P43+tVX*hJ>3yOpGW;ra&chEDa-BQo(dRAyTNDIw2zL4Qi~f(X:@r2z?');
define('SECURE_AUTH_SALT', '([I_E7UH~`O,7PiQR])vv X-dFEgqEgaO_0(BChc!7 lXvL)$slDRqBzxq8oSsuV');
define('LOGGED_IN_SALT',   'u6^hB62X3L-i7O@+#8R%@>)d^T}]wXT?o%I8AWj=N>yQ>JEuCHUwzpEeI=|E`^ZH');
define('NONCE_SALT',       '{sf~2ehk]?aBqd8N^eJts=XYqTEdSmSa^M7)9_P3Wp_ZdabxaZ+8e<K9+Ci|Paj^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
