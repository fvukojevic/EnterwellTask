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
define( 'DB_NAME', 'wordpress_enterwell' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'w:0Vj_3Lpn]2rCqMGF1f>#++ZpAM~ ti^GN%48U*t-*X4b:~fK]1}dp+MDXY$htb' );
define( 'SECURE_AUTH_KEY',  'Ti.%Bc2!Sm:WuPH4<_,~v~`_%Y59#%OFKO/_j[sD+on5WQ1T<I_+BT;kicNZPa$$' );
define( 'LOGGED_IN_KEY',    'cjMr&YwmPg2Q#<w[^D@<U]F1]`sS9q7S&xv{ }nP8=<64 #p~VlHPrRzbZ.:H7M(' );
define( 'NONCE_KEY',        '>{42EY]O3h(dIN$fBU,(h&[hX,>HWsZfT/zg?H/P0NH[j44CMuS+:]K6Q+i;`S)V' );
define( 'AUTH_SALT',        '7K{@)k d5=u6dH6.ueHW+LdZ([qb&%R]$!B/n!<d<oSW,.fYF~%.{dx=SF;PKF`T' );
define( 'SECURE_AUTH_SALT', 'cp9(Y3`F~*p+k:lLZfoUOd%:Vz/6PT1?!J8~sfHmO?5w$P<$@Z|M>bP,3{|YW74[' );
define( 'LOGGED_IN_SALT',   'lc?<W&Y#Ims_v@/.Tw5H^Rf2`H=S&1ci;h*+1:$,ESGrtZX|H2h8+d~UagA3?>Zf' );
define( 'NONCE_SALT',       '4..@C9rZ?4BOkGUt`1+C/3FAC7|[@-aoe:QG3ZHVb7?Og4Mmq*7Ad[LZluY|?T-X' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
