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
define( 'DB_NAME', 'birojp.com' );

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
define( 'AUTH_KEY',         '|mBR{ ?<t*nldojMiNqyhs~dZ7yO!>!RJ)bTRPq:IzcJ rkop1`eACM(fde_%D@l' );
define( 'SECURE_AUTH_KEY',  'ANDgPNn}s$z=J }d$<kod4Ga8CNz}iAn|uPw{?:*pO3BCo&2v.Jih~T,vifVjgE/' );
define( 'LOGGED_IN_KEY',    'cq68_i:z_q?e?P?`*kE[0BZ;slM7!KYmT1x=:;,fjM8}wD=7xQs+H~vV],X.h{!k' );
define( 'NONCE_KEY',        '%TQ<IW;@O;ej6XI-ptbQ+SL1BvB1Q4wYQrEF&udf+[|,BgXo3;L|Z[XV=r]d&:Wi' );
define( 'AUTH_SALT',        '=2/vv4eqk|$}j|kIyDiMS=0kv~{0<jfJ9A])ZdN_RA}d.-R9Xk-?Mre}v9GqOM`+' );
define( 'SECURE_AUTH_SALT', 'vYUPy`K;Crq.4}g<0GVQ(5&!BKBAX6Z$3]zu%|5vaSvajT&9Ypz()e?R)KmwZ eX' );
define( 'LOGGED_IN_SALT',   'AP! 6^__>!4yj.;}(oA:TO_5+rdO?jg$n^Z7+RES[+B)(cvTZ=X{/jYSy3ER<,3o' );
define( 'NONCE_SALT',       'R4@yp/dD5k[/is*j`Yx52T0B6i`JXf[x#_6?v}Gkih2Lb 0w;Lv/%=;5@.I zWie' );

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
