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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'ritik' );

/** Database password */
define( 'DB_PASSWORD', 'rds@123' );

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
define( 'AUTH_KEY',         '0U_;3.,+:({7I(HkE;LOt0S?UM>F;,9^9_.u2T36{lu9=Knl<m9A}XyQ|vV6pS1:' );
define( 'SECURE_AUTH_KEY',  '/s.amL<I;KsDbyfg9rh5M|@zIu]hB>bwzlzQtR)hES;?JuD/=qetqIr1uGNCD J3' );
define( 'LOGGED_IN_KEY',    'j$?}0%*?WLqz7L{ORZMN5_*C)yV=2tfsg5Xk<zA$k@_#d]>Khm6>{:jG:*- <9T:' );
define( 'NONCE_KEY',        'uFEl_2]I7@U}KS@{wN?[l]uB1-G |]XF,rYq[2Dwb-c_mSCph5)d|G3?!P3eMEw6' );
define( 'AUTH_SALT',        '+mx$vo+_2U>E&uyxU>Q{X-ITV?lE~mSi%n)Mix%Gk3~qR|;8^9B(e*uVCUEu>ru$' );
define( 'SECURE_AUTH_SALT', '55+^}6FRs+[Y`jr8yC4l[P,b!V/Ch`#U%?^|c>81q]n3M>u<wXSf=H?U%^mBZBj{' );
define( 'LOGGED_IN_SALT',   '0Z2v`>E8jOj:}:t}=f:lczDelwQ$.OJ]vA9J=U4$LFw@?HV|_}),Y806=wk`?UQ=' );
define( 'NONCE_SALT',       '-0/`9Kug`8PlQlhBM?_o# jdPr0G#YD1SGc!$e;}!mrJY|Yi`ChQO*5oUCh6`_}c' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
