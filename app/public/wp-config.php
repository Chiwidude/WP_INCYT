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
define('AUTH_KEY',         'hdAJA+4GnmlE8qxIXAlrgJCRs5AFS1wmk9D52OwrXI/baniOmSKjVpB5XoyiVCUz5axvj8pdmerwA4xfayid9Q==');
define('SECURE_AUTH_KEY',  'OcXmRq3JiFrILh+LN536cX+Qw/H0CtWaGqQOCO4ibj27B4Giakwwr+s/U8gDn+jUeLMSBofwVHgKRynyxpDyKw==');
define('LOGGED_IN_KEY',    'n0k/qBm5o1Zcan1G3ZeKzhjJcfTQCn1O8XxmZ9oP7sFnZ9MQpdnBuHp2X6l0ykOyy+gzyPREtjY/9e7sC9Gz4Q==');
define('NONCE_KEY',        'WBa000rCmJbMTnbgsO+ApQO604Pkn7Wk7oXQHgUO9wBgNLvNKPkABx5t9FxjdRIFme+66Ph9xA0CeYfTzMFqwA==');
define('AUTH_SALT',        'KEUcVEUoI9v2iKWc1g44ahARNaAv9ZXg6/00e4Oba+LMobKRA1pe70l9Lmi+WXqsVwIW+Tpp6YB5irk2NTGuZA==');
define('SECURE_AUTH_SALT', 'wzIW4NeOC1eYkW8e/A2rr7A2gHIbAGGHLvWGxqdlYPkBbYJ1bpX6uTwTurzDqHvGnAD6he8KoPhtmY8ywD5Ulw==');
define('LOGGED_IN_SALT',   '1QLdyBj+8LUlKcsxzMkAiRSC44gFn0dut8E53grZxELluOmjMwWJHsspsLJiYLjftJDeIoWvv8Ct2LuvolBf3g==');
define('NONCE_SALT',       'NpuZ8ayHexGpulJakjWhyuiDUCZVDizVX5dQ97j+y1q2z0tCwTgqPuvNyYopuLU93SpQWrwmgZwG4OCFmL2AyQ==');

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
