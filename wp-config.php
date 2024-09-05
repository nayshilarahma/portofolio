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
define( 'DB_NAME', 'db_por' );

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
define( 'AUTH_KEY',         '3%(7sKt?$x3I!5Gw^Cg{C?wf++{ITZ11*q5K$d;+,*Kv0TRY-9JMe,+)<;q(Bs(A' );
define( 'SECURE_AUTH_KEY',  'CG1C)l=0?j^)CZ#mBMDL&u<oO9wY-R`L*my}J-x/`Z<J[MRb1h5eKW].}FJccTb5' );
define( 'LOGGED_IN_KEY',    '&[iSuRiymlhf^fjfWUMO)T/{VeG3dWE[m%=Tj}i1*}%4jC[;,nb9~NVC3EqcJ6xB' );
define( 'NONCE_KEY',        'yc.xt^G0gTFpT JWNsAMdDZPfkX81bOoXa[JC4eg8Z^Xoa=erxt[/vU:&Yc@g+NI' );
define( 'AUTH_SALT',        'eY8BY6>>hk2*WIgA|MUQ@#@!3bV6cIU%B}]j+8|y12@PWw/gtM2gmA;4k>l]B+YV' );
define( 'SECURE_AUTH_SALT', 'HcY9i{bF3Ct{3H<_5-{U26:g]3`T45R59Cy-i *.(F3e9_LAMNF8NdHkVIBt~}>u' );
define( 'LOGGED_IN_SALT',   'kS1m_=wDh#2H@p1llCw(uvd^j.}j^-FgbRgRtx=wRU^p8}^E;-xv3mZEe.2rj%-_' );
define( 'NONCE_SALT',       'n<]dG#+|o|Tgzpo}`)p?enI)AP{F^B;w6BZ<0l_mFEy4A-(!]V&b%Tr^l8o^QX!B' );

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
