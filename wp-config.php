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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_alex' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:9888' );

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
define( 'AUTH_KEY',         'o=^6R,4vv>;@;Oxmq< )SpD+mzjiZL$0m9Vp7Omr1>(pczZ13D$uv+)X$IJ0W2~!' );
define( 'SECURE_AUTH_KEY',  '<5>7`aD.tp&],7EKPp@#|fwU}2^jf8Sidri2<sY)18/K8G~%~3I%bm5y1N:Cz+Ki' );
define( 'LOGGED_IN_KEY',    'EN-b#Sn~vFJCJ%4c:^Bi=_#1i6@=E5N?%dMy-Wd#%[QDe_6tC$Oa){<Hv<Ty8TX&' );
define( 'NONCE_KEY',        '_s*CJXne+hOsLRMVJ.9H~xfVsvGd#NX.h@2g[BhZu65O(FoSDF)ofa]Q<1>gN{P9' );
define( 'AUTH_SALT',        'NY=)zquDi<?Ci3o4lSi,I h|C/:Bgy~JsxsCNCUM3BKil>pV.+x1eqwe0oKtZ)pd' );
define( 'SECURE_AUTH_SALT', '{g^(>%8!}7$0^>)Rqa]oB7*;g4(4UV@lB%Y,oru13yYX9_cQNQ}}{C{Ivh.#m.X~' );
define( 'LOGGED_IN_SALT',   ':T^$Y!yP(Dcq]r0>i#W=#<mEeB -rx#=c;#N+Dh%7Z(!dZ}0G7Xu]zkDi5sZSwF*' );
define( 'NONCE_SALT',       '<7;`dUVPxeW(xzGhL;9VX:uSb[P_w$&,f-C.{DuE?7xCj|lA%j#sn4a:_Xg^-t~Z' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
