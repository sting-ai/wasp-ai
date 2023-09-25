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


define('AUTH_KEY',         'XzSS2l2WaZAXeXE+HKqbfyCTCxd6gG1qdpPMTzm7jWas2g0+c+YxJleyrH4sJ/Zof1WBQuwsVTTYfubon+JDeA==');
define('SECURE_AUTH_KEY',  'hlSa7vTaQLZtUUACl20TG0JPyQO6vB0AuJB88tBDq9ikfFWOuwt2qvALRJKX2FN4LxUX51KLOON4F+4pl/FfGA==');
define('LOGGED_IN_KEY',    'HFHokmEESTW0Ig0NzPUJs7g/daY5ony3CkargwRxxrKI6r5YTMwWTWJ0NwYP9Ydt1TeoGmULAU81UtFkQaJakA==');
define('NONCE_KEY',        'kshbhDTtXTIS5MRnkt29WizWH+Qkjkco5MIn0Fj5UQ/mxfQkVMMpKiCQAerj4K3Ym+GUjqGWWnJPCExue/mJhw==');
define('AUTH_SALT',        '3ANvEwtHuEvHp1JTOVMfX24Cb6XS/GPN/06vY8V29sw1f6K7GEcCkcalOH+IyPYLOtONPM5HmIXwBUWmD1Pcfg==');
define('SECURE_AUTH_SALT', 'HcVfCsbS8g8Nt6xsO05saTwI6yvF73qAVc8coAtn1A/DPfxirMw41F6RCsxvWpcT9yt0O2MXQmCvbIJjJv+89g==');
define('LOGGED_IN_SALT',   'IGDVD7hVeGc7aZ4zDr7WBdzTCPnhsYaXgg10tzqFCgt9uBRj/SZuo+yGiwa2tnA/qVfcJF1z2cbu3ZCO15rjzA==');
define('NONCE_SALT',       'D2pXBDlnQaYqOl2URA+j48Ix18sZQI1A8Est8ro0pAuSkkD9YHoKoT5zCQOndGw2Kn7qG6LM1zAH+/rZCadroA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
