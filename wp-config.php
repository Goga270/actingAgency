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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'actingAgency' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '57xgyM8sIIz1IDMKuuOKLQa5bL0NkLeGfr4ixPtPanBzygRWzBAEDnC7OoKiOJjU' );
define( 'SECURE_AUTH_KEY',  'HHxmr1ZAIc2MTOxnZkfBmbd5JWQuu2pTBpyIC6nbLcaoO8L5p1a6buWcstijBpdA' );
define( 'LOGGED_IN_KEY',    'HIH4mi1wCzBDFCCxt3D434uXWoVCAefBGFZNNzq7jSkMJG0MvqN3wlvdbTswGDnH' );
define( 'NONCE_KEY',        'HJRJhA2rxVcurqIGXK1vHULQaP1KGr6jMVpSY3t3RytaFexvAQpYQc4eUjBKLQxN' );
define( 'AUTH_SALT',        'P5nHNsodFVmJi8Jkf6BrXgn03PdbBsAUw8E2JghrpFIQgQrIqEDOOwnECse8zXgq' );
define( 'SECURE_AUTH_SALT', 'gHkniOd6ktrWQZ6d4uI5FmT2Abdp4vLMobVkrT35Zl0e2867EXkoTszCMW5ogiQk' );
define( 'LOGGED_IN_SALT',   'YNlFnYCRtV5vlPyIUxP2IjHADLgQzoXaYB3hIYwMAfiLxgDAiURgcEXN0jtM80TS' );
define( 'NONCE_SALT',       'NonbF6ygMmSQ9kI67PA6bThJbLD2sR9IOtLMaRzQcdZ1iHNqLplydWq1fYJx3a7k' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
