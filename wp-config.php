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
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'DB_NAME', 'sandbox_wp5' );

/** MySQL database username */
define( 'DB_USER', 'sandbox_wp5' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sandbox_wp5' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'muJGmlIzrbhT5Z9sqhU8kNx9se8sDTzHhtpmEuRLyRF7K7HeN6C57A9KKpL3FkND');
define('SECURE_AUTH_KEY',  'umhpAOOEzS9tDTrI0GzQVLos1SbF4jjcFzx3X3SPlHW1G8VPoLphT6uCBRaATQbP');
define('LOGGED_IN_KEY',    'QGheCt1GvuElUiIsVEntScUUzrYiJ5uIUIW6HWFFN6rBgDmOcpWgwvWo8s7VnSMF');
define('NONCE_KEY',        'ThF2byjoJdgG6DYcIoSMx0vQPvU0ENHPzOZY6CGWxPpDSVivPXqG6iC03yX6kHnC');
define('AUTH_SALT',        'CAjmMMKVB8PkNHMMRl4blXw0IlTU59Od5c74txHUnB4PbBPv9LkuO9RycG3Rttt4');
define('SECURE_AUTH_SALT', 'ferAj6354JoDfhW0UwaYz33BApYYuwGx5AMg8Tvj9hYDVjXbJC1HNakkMWIupII8');
define('LOGGED_IN_SALT',   'ZVKCEg6oh0D0rzNIidx7JHuLQJ8LFLhY5UT5LR1Dsl6ps3iS6apq32w44664pdyz');
define('NONCE_SALT',       'deNNmvlGv4j2GgbNK6zj3IT8JZtynaJvNqU8eqKwDIII4ohrGxvmrn2IQPpvUkJX');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );