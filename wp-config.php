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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'larissa_ferioli' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '1V!Pe[4<-a>o9>A1n?}ITOi`GIY/4j*sq`uqqKQ >`< T{nV$eAXff9oUaTeu..:' );
define( 'SECURE_AUTH_KEY',  'kux2gJ1gb8b4{)ZW;0AL~uN3[}v T6fVWo(pPluk9bQ[r=?: cd.r87f`vO,Es2q' );
define( 'LOGGED_IN_KEY',    'd0/5_wOdXQ!> xW9DmNIBxU}pJ[hw30I{z1|l +:Xq^[O|2Gh_Fvpm{!do!0VC-)' );
define( 'NONCE_KEY',        'qouBVkqf$07Y%)%BE3?2pWCMC<L,PR8G[^.^8Rte%:UWR*ThMN+~]GD;1VX/9Y`[' );
define( 'AUTH_SALT',        '-g%,{U6rAZhIVO(HTx^JfK3 MF}+!(><Aul1HoM&5/Nv4I[?r,.D;K51cb|Hg*gt' );
define( 'SECURE_AUTH_SALT', ')ClVnVF{5c@jE.T--Uyv~?J6W@fUHWAT(pn-.egE{XcEWMm~WNAYk bl1;?D].V1' );
define( 'LOGGED_IN_SALT',   '5.&?8nVZjT.+uCZj^8b(|?H=C}`jvV9Qeb/W`Dt71(<`1eDg8B> v|1mEt?&p^.^' );
define( 'NONCE_SALT',       'SIk%eQgr@#B>+0xy+R5ZGc!*LMA?+Hfy`S{;+b<8!WHF+4rV:ukD[B/8ZD+(4_EF' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
