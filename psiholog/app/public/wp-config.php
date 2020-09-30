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
define('AUTH_KEY',         'VXZLkGpCLk8sh19pAkDlvTqf8iq/IPrV94HBvnwCmqiypgy3bKx5hVYvZkSX9FcmFuRAQKjN4fLS0lnMhVU4Fw==');
define('SECURE_AUTH_KEY',  '2PwKHKNsxAGSUDJ6Ag6mYvTTVD+0sVW36/xaosRI9OgM5mjM8uLuNwXrccOZLekoWXOsuK2Q8vEPPZ5Q+NH+1w==');
define('LOGGED_IN_KEY',    'd1Ahp980+QvLk657W0KRJkCbFHq7fD2wPK0BbYs5N+b9uFoZyATGNRRdq5pS2LgXljGWx+QgZ+upDOgUxWzfMw==');
define('NONCE_KEY',        'HAGjO1eWioHERNaIzQX1QlrsPUhdie9OtZvvO2RYo10+pvsbMii3mOv6352mGY7C0DFGaonFiWu0pUFZnUnSBQ==');
define('AUTH_SALT',        '3Z7ZpuhzBz9LpoYRbWeB628C0SrO7m2eaBRxb6N3AsZDLLPBQZUdtVQy9BeLaVB6TnL5MZmGoJzuaVszvjw0KQ==');
define('SECURE_AUTH_SALT', 'aS+WOaL7wh33up6PJ7TY34az+fqMmd/aLDK5Z4l9lxemYos8BSLixpUYfBda0BqOPFgxhXl3PMO4iymd5o1WCA==');
define('LOGGED_IN_SALT',   'RRuKnpuAQooBDxVU/fNc7SwHY8wf1N803mQdBKCn7OUA7UL3Uioxq4QDkGwyG/JvQDa4v3xDPw5sLGW1cCQcpQ==');
define('NONCE_SALT',       'MVG2zQg6d/hynRexrEOr9OMJsQ/MzZdeBzFPLrVAhqwWHZkuDAo1j11kEnFX05eje0I/XpH505h6enV1cXIphA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
