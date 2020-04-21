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
define( 'DB_NAME', 'dannperso_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '/3:;#GhF/|N+VR)P}Y+#JzW:t9Q@ch.8qBQMUhUPXq0)4Ui`tMrjzRCxZ{IpZTOA' );
define( 'SECURE_AUTH_KEY',  ']$cKqMe?Uz@N%vH6fieKdu_bBGwq+gZZ1n[W(^c|Q~$9p SUau1YetB2/x]H8Aj;' );
define( 'LOGGED_IN_KEY',    'B;xzB1TBl0PFmnCX1+8JDnU#.?|x9g9qr$(^ sjeRAwVYSi 4CyPPX(?Zr6V8H~3' );
define( 'NONCE_KEY',        'l66e!e{gPD}d`?r:5Zy0CN3uhX0qh/xHHv@)AkNG]6(k#il )z91m{=7UC3js0NX' );
define( 'AUTH_SALT',        'IL@TKkN&0&;,#g2V#Eln%%9DpPJ,EYkqb(bOa@[(W%6JVFei95,#ppO8wirt?RQ2' );
define( 'SECURE_AUTH_SALT', '#04KS6OR,G-Oi2hSX)} ?j/4D{a],i)M ?=]cv+t0s8A<2,6&QmGEX)zj(@<>7.R' );
define( 'LOGGED_IN_SALT',   '?!;U(4MxN/7b~)6xP?|p9l1iH{j:_vOVhFE<>%<Oc_6#r>udAqtdKM{=0pd ;&Xn' );
define( 'NONCE_SALT',       'CmNA+}6a8n<w^e1Rwd_,_1[946U:RI`Pz^j~W`ANC/i9mn%RY${=+.j9ee5d|N&%' );

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
