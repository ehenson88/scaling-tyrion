<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jsadb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'friday');

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
define('AUTH_KEY',         '`-.@#DT:Y+8_~b+_vf{?cldX}Bo&A*BB>K#gJf%L-XSU1FcAUiH&k+s2yN?$Z(f^');
define('SECURE_AUTH_KEY',  'n5cSW:J97rAU?e@@36|}uUf|6>CB=[9JTNz[m.m*pVK/QAow#_xwn/#-~lA~t+RJ');
define('LOGGED_IN_KEY',    'xD{6/U]EIcEFYrq.=4++9IJ--&,cvB-+CJX+Yxwno-,3x&rONC6o-1Gkdb!qr$%A');
define('NONCE_KEY',        '~e~1cvp&d(dQ},Opd|,I{+Maax1eDDf~bDY:R*l<B&4w^+WuOJD^Y0K7.=<+g%<0');
define('AUTH_SALT',        '@P/&5T(Od60e!hucM?JWx/cjM+:C`*^dzPIlM6N-`J|D)m|i-Iy#IEC5rZlC$/H:');
define('SECURE_AUTH_SALT', '$^7Yt-l|bb+gVccV43im|]A!yfH*GMvxn0]f3r[#^y:c&d$5SW=e}:@Uk_u7M*~w');
define('LOGGED_IN_SALT',   '{.qLMc8jCB?`tpJ$w1aJkOik8EHx]mqW.PzNd{@O5jb4 *}~ zUMz )`]$Mk*py;');
define('NONCE_SALT',       'PS+KH&K|^r:rj)/!:2[%DqUU17FE|:IvY^WY6gv}{ihL5hef3jl&i= 5bS2}X]G]');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** bin - 2015-06-24 */
/** Upped the memory limit as recommended by Avada Developers */ 
define( 'WP_MEMORY_LIMIT', '256M' );
/** end bin */

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


