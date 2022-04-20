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
define('AUTH_KEY',         '2xTP9185vqOuVqoYyhIvuOFokXorFv00qcwd6DI6d37d2cyqycfXI1O4a4IHa8ViMQC+BBmI8zV2hQ0swQxY2Q==');
define('SECURE_AUTH_KEY',  '5+4xFSn8hPh8OYMWCU9ziPQrqGT76w+2gcaPXZSM8CCVa39VhVx+2rnTKkVz3ixGAUGmWe4p2SdZ6y5P8xUhIA==');
define('LOGGED_IN_KEY',    'Zk3zrKSty6B6z+6LUt4BpOmGKlGZVyHvO1FBX5KVv8NrCkaVaLkYhbJzkYg2InVhzch5OdsVgvBPrx70haSWXA==');
define('NONCE_KEY',        '5IgYawSr1OGWLzHNE4AuFoov+sYeuJsD+6QjOr4BYDhzmj0Rr1VQm8y4Qg5kXA5xrms0owIWsaAoQUeMCARZfA==');
define('AUTH_SALT',        'JzEU0d0ASajWmO3pVy52154nL9Ne2Ezr4XtFkZowWPUK+OG2Lev1eFYUP0Be2AcEkQiyjmXSchq7jlG8o2n35Q==');
define('SECURE_AUTH_SALT', 'WahhrWlNi+NJcGxHhaiAxkrH/Hv7D5ktI/ioeHOYJ/EEtvn8/liAyejHeC0IIjnktquSyDKDQYaRLnpqJxVVew==');
define('LOGGED_IN_SALT',   'gc6zO17R1BkIG7/RDr40xmdfRwtrG0RsQbv5jWe26R5mEQAxR/MmHozoxNuFS0oe+yteTCeWQEXPgzN2vHyFKw==');
define('NONCE_SALT',       'MQ7721psBUjWS30SYULEh0pX+f66fWGEhosFHPVinJMRaKqDjND6RJKyAqieTYSF/aKVA27xRvRkLpZV4rOgSA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_HOME', 'http://liu00366mtm6303final.local' );
define( 'WP_SITEURL', 'http://liu00366mtm6303final.local' );




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
