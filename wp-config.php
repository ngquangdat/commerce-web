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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'commerceweb' );

/** Database username */
define( 'DB_USER', 'cuahangquatet' );

/** Database password */
define( 'DB_PASSWORD', 'Nguyenquangdat13@' );

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
define( 'AUTH_KEY',         ' @O|%6$P3i+h%kN>~z)NP&p8#(G`:0((,K`,bNpy3.=&zUU!f&D_;(DG>}C6}0fN' );
define( 'SECURE_AUTH_KEY',  'V+Du)t#F!6wftQ[@iVZdC4JB p!nH{Is-ojUMZ5QPUF4s[8[wcA;Q-O(mNX%pdh#' );
define( 'LOGGED_IN_KEY',    'N&HUF2Lh9BA3<1g<JLH)}M&7RH(1dPWOyoJI|eIEL`+&NHuEkdP+<Sfy.V602^~]' );
define( 'NONCE_KEY',        '!|vBjhT)(X7oD:CmtLsSSFbA]u<492,9oR6s$F4*pE~R/ee#EYxg;A:+(r]jLd7K' );
define( 'AUTH_SALT',        'PA;4Mr?JYFTA1%?A`A8/ud6pf[p{]j,r.Odl:wru4^<vP67oy@;#{Vte3VOOXf=@' );
define( 'SECURE_AUTH_SALT', '.q^S0- lSolT[!z;Zsn~(lSdife2f/zi`8m`R-P~~oKB)Ri@=]5PjJ#4Xtt=PJp&' );
define( 'LOGGED_IN_SALT',   'tX>x`@-(fC#H|Qwhohyt|es|Lr@{hA8G]p,8Jso^ti{130${eUlY-@,a^io+TfRd' );
define( 'NONCE_SALT',       'enPB;&x?s<Oq3fnYu>Vh>[r.<@{Ziy|+m9U|+$hm(&#kL1xI2AI#uQw}Y{F.an;8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cw_';

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
define('FS_METHOD', 'direct');
