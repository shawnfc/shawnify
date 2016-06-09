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
define('DB_NAME', 'shawnco3_shawnify');

/** MySQL database username */
define('DB_USER', 'shawnco3_wp');

/** MySQL database password */
define('DB_PASSWORD', 'Freshco1');

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
define('AUTH_KEY',         ']kD@40<A/~>OaZ?:]H<n*B@-r-$hsn>Q@lx&nvEgtrU^z1/ Z?_fX>TzL=-|mpBD');
define('SECURE_AUTH_KEY',  'P4I+I-Rs<#x|r3nVkk!]4M-TM9%v5Dp{}Ztoofp81y3k_&?|x{#tY)Z-Lx#W]Ixe');
define('LOGGED_IN_KEY',    'j-#rXWe?xz]XNrCsExLoKk^$Jof=$4CXUHvOl0-&KG&/Zz;)b})|EKeA1>UXS$.t');
define('NONCE_KEY',        'bN2 +%_VHzd:5qyysciY0f-<O]aO]=PM.oaSDs|;H|v{Q,a|BAaA+kFx.$~r/4^Z');
define('AUTH_SALT',        '=m`4Hps)3c_O@rh^^G!qy*EqckJ$8#{|zFhe943z-Q$iDS-Nb}(K%ah.28/y+osu');
define('SECURE_AUTH_SALT', ';?jxZ+}o_f8k+).c|8h56jpmel],|F=g&}ff!]jz>%Q_uK 8UB=Ly<I0&ApyaW~$');
define('LOGGED_IN_SALT',   '|s./:}$/sFKy5h/S1T;oiLAgt%m}wx60sG<>6Vc!^ `#|cjN/b+F`M<X7J>+^4^[');
define('NONCE_SALT',       'y$3[/vM/5PHhTNkS2|?*m-I:Cjtk.W~A?~Ai(,!fBiPU!W*B;MljFih[uZ$*Bo-F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sf';

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
