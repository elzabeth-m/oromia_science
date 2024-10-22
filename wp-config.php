<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oromia_science_db' );

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
define( 'AUTH_KEY',         '(4Fz2]$770wM ;sSVbFU5]c#Xw#jraqDTS|mQ6Kz=]R&sYq:>~fIK5lT90*^W4%T' );
define( 'SECURE_AUTH_KEY',  'i_Hy]086:>)wRfeI8 iZYpicv+=@=wI5dqBEl8ty462B,LkkeF?ygGB2XFR/}m5%' );
define( 'LOGGED_IN_KEY',    '<(SKL#a3B<IOg5qA)edP!p13vR&;56/fN=Y8_buB9y516;1l.a@>|h,7YY|;bEHm' );
define( 'NONCE_KEY',        'bpP{|!-Qb&zwcq&$0V[3B,jF lOsL$SaN7OuI1iearnH9%p`U)Vh12Z;fwUaoA^x' );
define( 'AUTH_SALT',        'Xk*7dBFsfuBDZeb>7*0N@9~c7M3@${7+_pjO(-+$Rh88O>m9r)2xe@@1.a6GeCNi' );
define( 'SECURE_AUTH_SALT', 'gsj*EH3H4AgyA+>y$$[.j;PI$J0&n>~;,&++dDVY4pm>1-|5YNxuzAFxOaq 32Qd' );
define( 'LOGGED_IN_SALT',   '9i/r[.RD%#A^_J<xq~A(+f0__y#~I[mUAM3c=$@ejc#j8vBhd7{TGZoR-/K3b}O*' );
define( 'NONCE_SALT',       'ZM>tql~McNxurnR$#!}5+{i4=F)uVXu- MjSLMc^cuOI0yL&s+lqPl#h:=Kl$[wS' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
