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
define('DB_NAME', 'townwiz_release3');

/** MySQL database username */
/* define('DB_USER', 'townwiz_twwpres'); */
define('DB_USER', 'root');

/** MySQL database password */
/* define('DB_PASSWORD', 'tide_bama_2012!'); */
define('DB_PASSWORD', 'bitnami');

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
define('AUTH_KEY',         'U]+)HglM}^8WKPbS`R2h)0JE? !8MGQqW&0Q~wA0V)cp@`x.WjpJ%a&dB$1TsO#S');
define('SECURE_AUTH_KEY',  '$d..{.=TZ4Aeb5ylRch-{4.Z8=Y4(}ue-f!.WBIO(FCRVsKGHhb3?)%WIMRYX=++');
define('LOGGED_IN_KEY',    '{p1<DO]I<FWz#U~J]Dz#{gJB-d!||s.ak 20{6nl|E^t1240f0d^HZi>@N{T{TDF');
define('NONCE_KEY',        'U1*u#ZF}MGS+0_t|[ZKZ2yP&m58Y_/{r;GHUMncOh<kK2W6%1#M#: &<<`>ZKuTa');
define('AUTH_SALT',        'Yx$+Nf1 $y&!Ar<Cb$G-EBI$B=`35,,meha]%hSisXE5vs8|iQn?8z^cW)8B4WnX');
define('SECURE_AUTH_SALT', 'Eq$9a|m|!Li-?A{fjZNW#nr!iL/EMEH2XhIKa5i1>d+rua0 ]xDQMmLfw]Nw>An_');
define('LOGGED_IN_SALT',   'a!LOe^>:|^m!h+/ZjERH.dlXT-;e7xWCP0n|M{JHvOf>WomO7K%w/|Dp?#=:(dHf');
define('NONCE_SALT',       '<h|+cHeY(3099_C+PQ`w(a6!EY]:A&nm5xg_j=U`ES`kd9rxLg<UJjZG!WF`^]ot');

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
