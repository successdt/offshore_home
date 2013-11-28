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
define('DB_NAME', 'ecom_home');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'sK!cuRXg;^6+o?s_t5HX9wMz4*Nn>,{.kX;89{wT6?@1Mb6nsy[cz#@XI$Lbb0KJ');
define('SECURE_AUTH_KEY',  'ny^W@n;QG)HrBZTd{yzrYHUqiaPmt7pMGU#T[@>RaW7=0|Xh>}7y:p!*w|DF:K}C');
define('LOGGED_IN_KEY',    'C[[oK|;DvO/K~lwR6ZeiIWWbsP-#Jigt)[ 2j@u3 *O|mv!h$F,!,Xi@d{!#Y~BB');
define('NONCE_KEY',        'wY#4_,KUS^P>y=+mm,BM!LLll%DH9RHT3.;5LItjl[(iR}}/G.T{]EkIkK?7W<XU');
define('AUTH_SALT',        'N{Gfztl*Y)-`i;[TC:=##UX8#CmK:e$ofC~i5pY>~TUmyxPuY.xn [_>;Fp:,Wso');
define('SECURE_AUTH_SALT', 'U *Lo[T}/Ecv?U#BZ|JXM/#udi)1UfX?SnpbzfVqt}{-;Xl^T7iZ0KBU6)2,}@^L');
define('LOGGED_IN_SALT',   'J6I z5r:;g,bGT-5}NX)fd4(3,2gX&B;,iE$Rq`!EOWz<()T_t2cqlEj7OveV:gx');
define('NONCE_SALT',       '2J:{]~[J(/ut`(A||?cR#2HcW$cb]ZYRgTkBqSROPF3bFoJiL_Z-b%UZP5:za.%F');

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
define('WPLANG', 'vi');

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

/* Compression */
define('COMPRESS_CSS', true );
define('COMPRESS_SCRIPTS', true );
define('ENFORCE_GZIP', true );
define('WP_ALLOW_REPAIR', true);
define('WP_CACHE', true );

