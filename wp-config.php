<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u489371835_m1qzU' );

/** Database username */
define( 'DB_USER', 'u489371835_58KEz' );

/** Database password */
define( 'DB_PASSWORD', '9RMFYj0bGc' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ';2l~.8G<aYVEAg[3su0DA@g`@r+cHA~*;IQls69jfJ}v]x.KI`P%e,bkH+ARN,zW' );
define( 'SECURE_AUTH_KEY',   'F*NSd{T({Yrjx&zWg&GBG<.j%Vl+:}I02Fb(>xg(JWZ{`R)Xlp-XPG2!LQ!YHUPc' );
define( 'LOGGED_IN_KEY',     'E(c_X*p>!)C+d:m%<aU7X`2p9L(Da+N-XQSxB)b{&NbMW?]R4pBLIq8td?FdynHb' );
define( 'NONCE_KEY',         'nc&MQz) 9whL?F(x[E.QBM}cV#OKU^vQye,b9AWXCS!~miN!D3sr+yDBJZRSzu^S' );
define( 'AUTH_SALT',         'WY]Qw,>>)hqu6r>=7{%owEkieL,G(voFTC4c|`S>Gqg}KzTC#AyYB<wKb$A=+,lz' );
define( 'SECURE_AUTH_SALT',  '?Hn16$+(8}OS:)CwYiubn+b/3.s@,lQfLr 1Fr;W`szW_|0b*HX,6;K[^}UxY!n}' );
define( 'LOGGED_IN_SALT',    'q;IB@AdqHO2o2Kr6q%Stw|<% #w@>hS:IK[6,WyhD3DXuVg0M5E_lGkjghUG(X|`' );
define( 'NONCE_SALT',        ',wA!WtYNv=R3W~MljLJPLKFK.zv$:=lr./#$cs UM^0+tD>S)]}T/ZR_1)93%{ `' );
define( 'WP_CACHE_KEY_SALT', '_>C&%}||r^!< M?73L5Oi{R;j$&&:wbz K[7cS=2,8pUcmCbQS$XgyycLitg=g=G' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '486ea45cb3572c129a6148b0a8da8218' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
