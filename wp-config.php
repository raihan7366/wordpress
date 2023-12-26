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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' @y_d?s;ACSFslwYfk|:s~C *7mM@03C-IV[eq0~YMWRd!|2Z&!Gqp]-O}%6hrEg' );
define( 'SECURE_AUTH_KEY',  'D~1k+r%;TY=k,5?}@7qv2-7F[_Tym(L3Bm!3LRHfLjLLC+3>C 6&2YGBoQ&7Y4mJ' );
define( 'LOGGED_IN_KEY',    'l7|%~2Hm7s2~58Fd}O%kMH9{de=7v-8/;MdNx0X8T=;m-Bmb^I.SYf@HWm9a:R 1' );
define( 'NONCE_KEY',        '@d;m6`CNmY~Hqmy{d5#PG*V4h!G$Id)W1*/d#B{T!9kTO:q]<,&?MjDtk--(V1F;' );
define( 'AUTH_SALT',        '6X.hpi7U6:1{sMBe2[@C3@q~^:$1/=},On[:tt)OqCFY1:uN{.yO_B8w$-z=y(^8' );
define( 'SECURE_AUTH_SALT', 'K>qYdiFwL)6T`uLYZW@1;-NUCH.qoH>ukTu0%@^9IFUUMoT-|)jez%fWbF&Ybv(]' );
define( 'LOGGED_IN_SALT',   '2ZivdVNF?2|r>fy08Fz1#glv^Rn,.PxzQW{5yYLQUAkLEL|W3X50Kp+7zb[Rfcpj' );
define( 'NONCE_SALT',       'BNm^vs7e*^B4#D+]8K3t4;_P#+sL,,m)X^@z=5EJP7z;:rgb?UI6TPf5T|!3I!2C' );

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


define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/wordpress/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
