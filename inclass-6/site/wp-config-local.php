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
define('AUTH_KEY',         'En8q88aQuO3vzIxmWQj7B57xhVmjg2m9n4MRh/isB3wLcz0dyo0w4TVm9+4CcEux6e36gvzFOK40Ugd9g5igZQ==');
define('SECURE_AUTH_KEY',  'HOAWo+cC/Mr9/j0Nr2F1J/ucvR2IDmzKL7YLpoI2zBe6/I6LxfNxWNNlyIjooenBNIozn3l2L59L1ZoSoQigwg==');
define('LOGGED_IN_KEY',    'dt8WJzVMrIUU99FWPpEyfUDkJ5yU6eAycDZlPZnt0DFSfsYuOfnAMkG5N2RLqcwFnnV4770BB30B77IsTztfQw==');
define('NONCE_KEY',        '3NEOD5lZ8iEFss+wkt+iX85xYnfl7jmNgTEXsFyWeT6azYe7dpHp1kgQ5GVGFZbXJyTIVFVZRt3d/2H5hxY0MA==');
define('AUTH_SALT',        'YJEFswMgVgdUmv3a+P6XLvpJDs/qcr7klTFAl1Gcc9LpZTJTvwHmpBzjN3KfUoeTEGnkqMhL9iJ0HFjntbQbNw==');
define('SECURE_AUTH_SALT', 'Iw8RHUN732QpX8jY6OjZS9dsS0M2g1HnqkdgxLpYlBEMOaiO47W62k7SDOt6IBEKf3APJRItEnP9HK1ukedK1A==');
define('LOGGED_IN_SALT',   'h1i0nJIlMdzMm1/KG4ct4qBXNnscxyQSF/joJJpxXdeDKK3fArJhUmu1y4dxjhIk7Nt2heFYiYneWcb6UpaqrQ==');
define('NONCE_SALT',       'HRQCi5RUDVUCEcRSgLsLyKgWHMo/y81l3CFHOi0W9BpfK6sT2AC8nsW4EfE+lZo+RZu1iCiv0ONqQRn6XNW+Ng==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define( 'WP_HOME', 'http://liu00366mtm6303inclass6.local' );
define( 'WP_SITEURL', 'http://liu00366mtm6303inclass6.local' );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
