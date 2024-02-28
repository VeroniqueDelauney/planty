<?php
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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'la+F*!L)}rQhGQb6_Rqist-NQien-`B){(` @cxOcbq^.?;Raq@AHI&FX`qX``[f' );
define( 'SECURE_AUTH_KEY',   ']<3yK%pi/.>zWiz /0!m<#BPp(m$QmVMjYhye0^.P`c<hGv[$D}UZ8:plEk@w>~}' );
define( 'LOGGED_IN_KEY',     'i]I>S@:pIqF9t>RW3|cvtua]!pU)aIq9_3S+vF#E;{jhR|Io^5#Y,yg{ec/ q*)J' );
define( 'NONCE_KEY',         'rH-[_?,95#v^/5[%%!!]O< ,vE3:6*D,~- ?N|5TU>3LxSyw`YSA#YW4?ZRJ;14I' );
define( 'AUTH_SALT',         ' _h(MD}3OF7f8 )z]&3krFhUfQpY]CreU7b6$kpln.< }Hp.jLfqy6 5Zf)1w<xY' );
define( 'SECURE_AUTH_SALT',  '.9Q.=vd)?&sF@cz4|F41II=h+F&B:?8&%tZMfX>iTzD)oA9&;aFfphIKpgOW?ymg' );
define( 'LOGGED_IN_SALT',    ':`{f#gp-y,Mp&%P?mR=7{?TcQL3O@?d[GwZ|*BA)^ sX?`#@B|p-lt kh/T3V,0 ' );
define( 'NONCE_SALT',        'BeW_7^K4z*H%K]qQ0q#S0l1R[-+wRtZQKi>T?agrUc<0k>/u703>[!L)?dkVkd>*' );
define( 'WP_CACHE_KEY_SALT', '7?Npw&5WbIl*L=C3o]l(h7{rzyKXA;rN2)dJj6e53?HS?4FoYI{(lo-/@}dL8l+7' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
