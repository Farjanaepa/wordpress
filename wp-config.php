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
define( 'AUTH_KEY',         ',y/I43fc?n8])MZl8OA94WDNF,WE!tP*OvyN76%74?(85q(r6R&-b8V!/RV|59sp' );
define( 'SECURE_AUTH_KEY',  'h+g;ki5!aye!6 4Og3Pro;6+dY$6Ikk%jFOb)%12~e|s% 1zl6R*f5,}ZTK|sHVp' );
define( 'LOGGED_IN_KEY',    'g7n6z#jb73nqHr,E[]6~,&pt>6qx8[wuhe ;j7$93$0VgaR&8([xf<f0D5mO<RM.' );
define( 'NONCE_KEY',        'c|`}(Dx+eFO9ZScAkqLi0`d,9K=&ZubC[UNvS!ExoYF@J#2]3{|fTfWtji[l+Vca' );
define( 'AUTH_SALT',        '^?OCQN1;7wWq_S-j[;!wL{F;xGS(qDQU$6cRh|1:h87^G_#E4-k5_L!X^]+r7=f+' );
define( 'SECURE_AUTH_SALT', 'd&FpF9IaO%a([l#Yt.?(:ktageO]`HZtg}mhM+I8 >TGm ,CnQZW-A?=*i5ZL4]m' );
define( 'LOGGED_IN_SALT',   ')3h6O-uB.9s.k]l>|9rqoJFRQT~6$4!Cq_9}>N+r)atc>bHdO;EVl2#3Obmh.@# ' );
define( 'NONCE_SALT',       'd<<|Ex+8OdWCQa/V]#>OhPrnCr.;WSYrKxJ?kPskFOw.*-LS&Pl*NK)B0B{x}cXa' );

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
