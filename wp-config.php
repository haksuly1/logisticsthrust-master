<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define( 'DB_NAME', 'f2dighub_wp346' );

/** MySQL database username */
define( 'DB_USER', 'f2dighub_wp346' );

/** MySQL database password */
define( 'DB_PASSWORD', 'oSp.N1R9-4' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'o8hltt4ezml7qygdlrlbi7rhqmjtchdx3s1vi1ftspsbhkbbsmvtrfzrpjre3pzj' );
define( 'SECURE_AUTH_KEY',  'gw4uie516afaoec25oqr7oytagfdbbwo3uf9gtrvfl3swub8n1pfvzx7gyhdhaqq' );
define( 'LOGGED_IN_KEY',    's10nnwahnnkitkfl7o2a7memnj6kirdknk7lwirduibshnbghdgjczfpdho2xcpw' );
define( 'NONCE_KEY',        'zxjjy5vphvk3hygohnzjpbhelxs51iovk8csxyxnogjc5tuncedjbnfhqfsifame' );
define( 'AUTH_SALT',        'ns7j56wr5idyzihjfm6cafys8v8o4obdomdrbfqji6h0slf27obbuhdsdcmsl0ce' );
define( 'SECURE_AUTH_SALT', '6ms1akrtslvdrnbcv57fyq01ssxsnjvfgozcocsh242xu4ghirl58smx6lsmigae' );
define( 'LOGGED_IN_SALT',   'dlxjahkod4jksag9n3pwgb97rhdh5ubjlr0umvhkgw870ltjycho52q0n74vds7o' );
define( 'NONCE_SALT',       'j44taxjom1ecyqcy914ovsen9ympnkxys1jukxdgynousyywnbpureulwqbeg5xj' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpuu_';

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
