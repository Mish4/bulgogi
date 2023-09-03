<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bulgogi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'XT1gB>eQVA`pB1{|TLQ 5^S%9k%uLpSCz6198Y)N!PX|d=(*[W^9_WjU.hXyq*ld' );
define( 'SECURE_AUTH_KEY',  '*6#kpf-k>*e2@cR|in8bt382vW,4y~H8N`|R&6t$9V1CLu1g95!,.1]%K+DBx5q5' );
define( 'LOGGED_IN_KEY',    '8P{/bfbS2Hj<j?1$p<4+IS|ATUUDWhc.,7mNz*>hKLDJD?8&k~r7vm:NM}0WR(:W' );
define( 'NONCE_KEY',        'U8boLEz5jFUDd5cD*iG:K7`gL-H- $[h]$2yG5twdB&!3TRv8>:P>V6[.}#LttyX' );
define( 'AUTH_SALT',        '@1m)($yrq@sE|sZQ?V8?is^lz*f_hEg67@PvySfmcA9C)MAfONMfy$>eVh2vP.%x' );
define( 'SECURE_AUTH_SALT', '2WCQVq#Q6r#@2oBfAO%UJMh|+ZvD Fc~z~LJ reVDIu61w3a+ZFF-$!xN{0-#qj9' );
define( 'LOGGED_IN_SALT',   ':zIi45R;e aI;4-U.)c:QTMBV*N[=$GC1^-#|JZJGJ!c[rhMuIsXPz.1Lmu`hcn-' );
define( 'NONCE_SALT',       'Them8N=i:]E1lp((r!TZ~p:w%f87;r@+jsi0mudPl}%9.X,,96u7/qShFZ.7K5xo' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
