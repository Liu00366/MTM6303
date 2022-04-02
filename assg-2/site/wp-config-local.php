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
define('AUTH_KEY',         'HhWLUy9Rs4+kWdrgiAx/ILfgO83aY9NTrum7PMrS0bQJNlLp8ONCHVNtcha2j4oJ2gwoImeZzrbU/Y1TW73T1w==');
define('SECURE_AUTH_KEY',  'l0X5iZDrJJSOJK8d0V48U1CrFguBDS1Va5KpXnGgIX6B6KMbrDP/dEXlOr+ZSlvICHkqaRfH+Pwu5W4XpcOtbQ==');
define('LOGGED_IN_KEY',    'gpiZhnCejDSkdOGgVYaAAKspV9d+m6jxmKMShDN7YlxdAb0YH1yCKnY45dGog/K9K5fPmwJnOTlTYJCCBuLcvg==');
define('NONCE_KEY',        'SmfoM9AnB/okGWnwslygGv65ECoA3mWm0IrIq0Tq/xHSfQSX92YaCkrxKOMMsFZLzxhewyUyzir5GI4OuVMiwQ==');
define('AUTH_SALT',        'F+cWMholHMaGRGcNRCdnDjh6jUzLTnWePcIfV3B3RREK6XgUDDR5FiETBPNFrS9IHNk+0W6kdJi57wVAYsbL7g==');
define('SECURE_AUTH_SALT', 'OXY4ckjcfnEX0xGYxx5THLPSxW+/Ufaf2VgzbM7KHLsY/QUPkMZMKFfHwfMX6lvjvnVyEu6a55/CP6SMUAa64Q==');
define('LOGGED_IN_SALT',   '/bvspHH3RtE1FUto1rp5UVK1AGeSI/ogCO/s/4dDrGRXbagRp0y028uU8BleFDw0sNNFNisJlhzcbGDGfI5XHg==');
define('NONCE_SALT',       'KjMRRJQBYmb0eqzS3tD2NC24fEQxc36C6JPdEBJRNI2UAr9vQXKbJREr/+CCJ7rIbsMsGLzaOJJE7whoDcLhHQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define( 'WP_HOME', 'http://liu00366mtm6303assg2.local' );
define( 'WP_SITEURL', 'http://liu00366mtm6303assg2.local' );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
