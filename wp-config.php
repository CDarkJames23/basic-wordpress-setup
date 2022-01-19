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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'DVDS!I>T6md0bmC7DYi:>spPh}<y#FamNqxOg4yGbQ.?Usy:&Oq{?j3E7] gc2,@' );
define( 'SECURE_AUTH_KEY',  ':Dgxq=+C|<yuWJh-x5E6:s({YE{s$(s@iCI{!HfoZf67lXFn&{K+SPWM}72`@?D8' );
define( 'LOGGED_IN_KEY',    'WvUlECno>AYE1}_FN?^G$hmtqcuTNzz(#D7p*Skw$SsZg.p+]d1%KJJF=f31gd<H' );
define( 'NONCE_KEY',        '.Y&XCpCUR|MI$v>!C<h)<Pb&%v`EJDJN* 7]ot_]16SC5;_&{Ukk!10;22)Z}I<0' );
define( 'AUTH_SALT',        '.~Dk+*!~`GfAp2iRmMi:lcIR:V/`zZ|3ZO_}oZ3C!MMq^~>G=!o/|i*[Y?~RJ,bg' );
define( 'SECURE_AUTH_SALT', 'v^=+$3JH_uQG7K.pa@tQ~exU `|(D=neZt8= xaNvbJP+P|G]NW~J1baeKEvX@i`' );
define( 'LOGGED_IN_SALT',   'C5Ia;HS5}IdLvSfoX%* Nmg{(Xx^M]Az*Q@GgZ4`npa*TW{Nv1i?l7`hC{_1{k44' );
define( 'NONCE_SALT',       'G<XNsJOlr|3yjwyDgE!96M-fVXF]!l]/m|5{-ErFQ}h2P2%o< uKis~[uMdn?_9>' );

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
