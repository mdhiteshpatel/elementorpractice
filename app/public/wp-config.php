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
define('AUTH_KEY',         'ABaxqrvYOkk+e9uefpIT8sQR9hZ7fZk5tU0D8qvmorufwgMGUCprrqJLQvf4H5/KKhmgpIvGinccIKic94/Kyw==');
define('SECURE_AUTH_KEY',  'MSAVUj0DEPJzZG84VOjnSR7bHFDtGuKB8Ur9tN89yK/2smPAmNU+dyAydXIl6kX4ERp7wwvSC69keoOPlPiHYQ==');
define('LOGGED_IN_KEY',    'M5IaDKmNPESv6ocCRubYwGG7JPRG2wcVlWKDw1IMFx4vKa495I7vfTrN03codpbNeTCejDtJEIOKXzeay9z+LA==');
define('NONCE_KEY',        'XVZVxzoJ/SBUZZh9/6Exk01sNy5e+p0CacmhAISg5bCNyxk+sO49Fu2WmFmNkK0n+RyU4cs6CF3Blj8yq6zdjw==');
define('AUTH_SALT',        'biEG7gKErCgwSo/90dJrRJLF23MneCt4kK+PLCOjG5BCmXruugspYbZHTyP8jyTOValps1zAb62LaFZmoTAMnA==');
define('SECURE_AUTH_SALT', 'SPWyVmMsr0soDUED/L5hEtjSsuhXIiwslmbYwzpsK4RcLaqVaDbCAA+qCXEV3HPpKE0DfIHflmNs+Y9UXCmYYQ==');
define('LOGGED_IN_SALT',   'CpNQn9GjwyNdmjWZU4EaVvs7WtHf/rLXsbAYHlVNa02iSIYx30KaZaCzBA4iiKF+4j+B8pZxdglzyETM4KZhrQ==');
define('NONCE_SALT',       'wYyMc2GyTpWFQLhcqLaoPJ9CavkNTVt4a4YFXnxIE4BpWUbckT28mygxiyLGxGMIFx+Rn98IENaGM6FkZcSJVA==');

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
