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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OFPMX9lkY9ngCkfHuFB4Fd4OAH9kPmlRGGSjcfwM6Xa3PxNccxnv3NMc+jxc554IoWHS+Qo3K/pgimgVE6KO1Q==');
define('SECURE_AUTH_KEY',  'um3tSePNQzys3tEZHbchCNAao+rwssZOasQasvwmAG9PPMvVGD0QEbmqQ2KtIh5OTxClxcbX6EcxjjjpXtzZXQ==');
define('LOGGED_IN_KEY',    'BPRPJbB3gCJtbfb2CN/oWGXhaa1EqnVPj0mntQ1LgP0MwL1GN1a0RMvXm27f5H9DJUYh1Z7OV85+m79JTX+tng==');
define('NONCE_KEY',        'f47qSUeEJr+vVZcV3Nti82bsCpDm48JSI/DnoZBmkHchBKRC+KrEZJpra+0qUE99Sjm2g5e4PTYRt6nyYYqZxQ==');
define('AUTH_SALT',        'fXwrENGSbMejx6t/TgEy50Yr+SZihf+yKTy0jfeEYbD+jDIDxKSOBCYyrlx1lIz5iQFhM9Qa7UzTskkWaUqQbw==');
define('SECURE_AUTH_SALT', 'KQQuKlydusyYOHo1h+MZu1UUrMMYJDFJwetdndPuQ0rKD4y7wGbUINJX16YblqQPNEImdr/pPoOgiScRzM66Sg==');
define('LOGGED_IN_SALT',   'Wbfv2qCWQc4CldHkoqmZQIZKLV7LGgJlIPof0MrKiPqF4BB6Le9e8o39TAsw9LmApN+MnJhKzdJxYUQbPXNs5A==');
define('NONCE_SALT',       'KDnCaSWPqhuh6KlsytKGyKtadazwh/kAGMhX92ct63wmOOy1ZmB2UIZMDJ9G6UzRNGSuhdu66KGj/x3ziKh2MQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_8qeo85msfg_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
