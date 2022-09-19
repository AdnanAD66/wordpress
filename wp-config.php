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
define( 'AUTH_KEY',         'q:]ix>;Koy&|e!s$-:SEcyEiMD-[-(p-Oh@9jUuhfyQ2Vv|3lWQkyTtpDL95jLNM' );
define( 'SECURE_AUTH_KEY',  'lJXa^?Uth5=OgyHp}N&Q~:$>wJjJ:f3S(@[2aHfIL32-<O9=H|zQF|3|`{3wHl,?' );
define( 'LOGGED_IN_KEY',    '1v,1x4{%%A`NJnV#DCDAt *#V>va/p47W^xS6C]nQc9;;0I]J)WYID@-x4tK#h^a' );
define( 'NONCE_KEY',        'Mj|6^{N`}TFn>L1!}e{A.GVcz+fm:|o;jj8nLy>4%Fal~9QWg3gSR}/kTB6!K*I8' );
define( 'AUTH_SALT',        'qBo6>qLPk1ORP?F=+8k_mHyurPq4D#@$)~/{:c-{5q~oH4x,u4(}|+TFsGF(Kts3' );
define( 'SECURE_AUTH_SALT', '<|RgHj*IY$EOTj?YKy+4NnwRB}]I4KdPLu)_)`+VB?EK0<|hQV* >?lAR$CJYdMR' );
define( 'LOGGED_IN_SALT',   'qFie`iGDCSr-kHXA-@:j__(*FrUbbh4sL[>Fc@R2{*,vkMR 40Zc1drAV!%*K27&' );
define( 'NONCE_SALT',       'qMl[z@ybmiU>uzZ]6}2>t)G^Ho] C22yE;Cq1e|+s3kBmR69F9=Rc1T5*HV+Hsks' );

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
