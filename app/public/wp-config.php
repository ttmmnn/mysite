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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'pJYnLTLxwrP7Nex3lhU5DwSMXyAjox2ujp0HkThAftvr9TZo/B7s+B1VTxu1TEaA9cgb/XPM/Aj48hcxUgUsVQ==');
define('SECURE_AUTH_KEY',  'Kllv5u71YWqHElzTOf5fjCxRGJvxZUjCwDopW45y4jRVAZ/eCf8buL7CeONc90yLSVRoNffVTPyWE/FNB/DFAQ==');
define('LOGGED_IN_KEY',    'oj78PEo1RSRsymmzWYHYsahNAV36dvCyGyfGfHGzm2CeWwFRWX5XILPYKqdjIHrfZvOcwsZLVtM4YJZJDX3C8w==');
define('NONCE_KEY',        'QRs8haTFju+rPM19SLAm/QCZNqbFsgLiO6TfGH2XA8r5d58wyv45wk2rCztakJ7kqrS6ZWEDvYoMgzNgpFStgA==');
define('AUTH_SALT',        'YrvXaDohXX44W2pkX+ir4ftgWTXkCfC7/nn0l9o4mwXBrUdGmbgObYVd87vD0ExijYWZnqXWvFeIZtx7sASeNw==');
define('SECURE_AUTH_SALT', 'WF075ej2HwUHCwdyvDq1X/7+eZ9XSmLUiCnJe2xyWTeLY3n3mLVK2O/BKZibtyV9CTJdp9+8JxRfG3a8Bl8xKg==');
define('LOGGED_IN_SALT',   'QYg5GRP5U+3S5HmPHK5XgWDnzqlMKfzWYGrkAbVaIolkEeK9incngFIS4KL4wVCdTBSTt1Mr9QtgaMaSq7zqIQ==');
define('NONCE_SALT',       'ZXhQyJ2avYgDORor+9oyXmH/G+ViSqw9mjDKjP+oOSu1AwLgXsq838EoeTgm0yZIRHJVddqpkX8bxSjjylksBg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
