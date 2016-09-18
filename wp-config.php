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
define('DB_NAME', 'fcorrea_fcmain');

/** MySQL database username */
define('DB_USER', 'fcorrea_fcmain');

/** MySQL database password */
define('DB_PASSWORD', '56pDOS]-3S');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '3zmwb3dkkfndzig7hkvmk4wcdk55lgnpr91ev2utoji0tkoq6jtdkricav7m6ovd');
define('SECURE_AUTH_KEY',  'biz3k7di2gxw3wfqzcsyqgaaynfggwddtvwy1ew7jxy2nmdsj9vj1vzdisdxmpdt');
define('LOGGED_IN_KEY',    'cg1bx3mordr8wtk9e5de1byakeuniyvpafeif8efyyzhnv9cbtwu6yovfam746zp');
define('NONCE_KEY',        'a5pqt2xux5yx7ljh7bwkajek4shlxjp1rycarfp5ttinvts2xsjmciaxq86k8ew2');
define('AUTH_SALT',        'uxs2em456lyynokb1lawm6cfoaqfnm9auary0aanmp67vzeqmajpmuc0jjdgezcz');
define('SECURE_AUTH_SALT', 'rgzgqrd4hlbzzwvktqrdhsesne6p5bfjk4g9grpgtdyuij1m6qyovpyyttqdbebz');
define('LOGGED_IN_SALT',   'le9py1ulmnbfzxydy0sjjiuqpppimgagghw8ykxk1tuqd7sgwkskv4g6kh7pg5c9');
define('NONCE_SALT',       'cdujs7h0d1ukmttoahmnkxrseodiu2uymrjxsdasmam6sy6sxguhkxbhercfiqtl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fcmain6f_';

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
