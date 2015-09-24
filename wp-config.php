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
define('DB_NAME', 'saindodamatrix');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME','http://localhost/sdm/trunk/saindodamatrix/');
define('WP_SITEURL','http://localhost/sdm/trunk/saindodamatrix/');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+Zv8N)$wh1Jqa]X&f4#j{}~xEu5tyYu#&l5,m% ^>mc{~+Xiz}sDHnVZGY1)x49]');
define('SECURE_AUTH_KEY',  'S#,r@fc]||p`RrVo! RJ+enPpigMB!{>SlV?r3/?Vo(d,-vkp,hrtvFM9*6l|u^d');
define('LOGGED_IN_KEY',    'P.rO4R6ViH(lrbzyRN-*d29mMZMSM2T48%gQR3N3D&j4{:L$p3pqkma:40!b%~z]');
define('NONCE_KEY',        'Tvj]D;]yC-E@LLJb5u{ZYuW!T(+LXql!5eCpY)(0|3-;]XnDb:G>jV^`,CS#]ZV@');
define('AUTH_SALT',        '0(%7d)@8Fi~-X%oKqc1y ?3+LMSkg-Yk#{,2Tu~cE+h0=pp+~$L_Kp7S?;v$*7x2');
define('SECURE_AUTH_SALT', '+B(J]E(]c5o,#2G-)uEF`{2?+pTT4I3Dr`4oen6yE.R7Rb]>V++f|98gv5C+tcy-');
define('LOGGED_IN_SALT',   'v8xNyp5iO%0J`#~/nTMQsGd?~{0OP}FAZ,WtAS,%t-3zmF{:Hd9#2P]nyUqA(.Pd');
define('NONCE_SALT',       'I%2)F]{I^>..)&Bsb/AK:#3<=,sAo=idzB|`^]4en[Nco V_Qx1UmVLx0zm4b+Bt');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
