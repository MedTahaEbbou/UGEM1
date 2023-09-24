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
define('DB_NAME', 'umhcoomy_WP1MF');

/** Database username */
define('DB_USER', 'umhcoomy_WP1MF');

/** Database password */
define('DB_PASSWORD', 'V%N)_<n<sFfXM#F?}');

/** Database hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '5b6bc154f672a559350bc8c0f99b17bb18a45c09174c02651a84840be981f778');
define('SECURE_AUTH_KEY', 'e911e5257db4aa69260da5eb82a8dd4de79b75aa2ac9f93903a01bcef6c83f78');
define('LOGGED_IN_KEY', '03a1b42bb6f85c60a9e77cb7ef5a086bb247409da2245dbf02c97c90bc19864b');
define('NONCE_KEY', 'b024c45a4fbbf32540bd6d768c7eba90094fec016a0e0d9def7d64f57d97b808');
define('AUTH_SALT', '9e613ed7e023ef2197ddf1535f31fc7a0181230869d1988b2f76a6c019909eb1');
define('SECURE_AUTH_SALT', '58b19f411f19282e2640843be98a2f74c520658773e7238f7b3fd50f7707b16c');
define('LOGGED_IN_SALT', 'f599af0a1be9a51e57d9401b08b41c10809d85ddbcc825bc92d09017891124a0');
define('NONCE_SALT', 'ad1d92bca659572256a3fa68085e00b1fe90b82866cfd57943c800c15a48ea49');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'QPd_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
