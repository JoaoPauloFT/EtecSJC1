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
define('DB_NAME', 'etecsjc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Qwy%#yT8J6m{9SxMDQ[Pe]`kmCK>)17p/MexxiKK(0LeL|I]y&i?jge|&m0,o Q#');
define('SECURE_AUTH_KEY',  '6z}V0/=3|e328ngasoJ{dQs]|*g*`gFp$M6@,cDIsJZ#CY8fc8jMbcW2xC]h0~fB');
define('LOGGED_IN_KEY',    'BnD6vz2WqI<t%Lxnjpl;+U56!ij]7`Bbfw1-T.QpY*gi <c*6*Sr5/H- k|;3W4T');
define('NONCE_KEY',        'APvgYOGaWZAoBU(aWk9=hDuYEyizB#3),K(j+<R/=t70ZBwCs,O+&MTpMw$o_Hxd');
define('AUTH_SALT',        '`o295.Y=K-{=F30ak%}K8}z/?eZ; .@t==k|T4jCntQUbYRZ7KgS20S;B9:V}t#M');
define('SECURE_AUTH_SALT', 'G$6Qswf|=O*o=|hZYm(EkXwQyX%a#JL%S1)sa1*!V+e<s&Xjj7=#iCuG,+DN?ZkT');
define('LOGGED_IN_SALT',   '=i).OCH4yWh&J@r E]eo,wdRg(PYS5#N@lLFtMi],@tPFYQ{>(H0EFbgO0ozA7($');
define('NONCE_SALT',       '*kt*[{!)(#HA8?e ~b)F$S=;@OkO+l_hP!3LA}9mtxA8VU^Mp/~cd#lsdx$sl3HI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
