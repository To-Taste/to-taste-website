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
define('DB_NAME', 'bananasplit2');

/** MySQL database username */
define('DB_USER', 'bananasplit2');

/** MySQL database password */
define('DB_PASSWORD', 'Oranges234!');

/** MySQL hostname */
define('DB_HOST', 'bananasplit2.db.8568849.hostedresource.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '_KI2FWLNz~1&<+H?M>]{(5z6}hvj<w7i/lC}@x+?x?AoW&k(d#&~L=Lbxax0~0T-');
define('SECURE_AUTH_KEY',  'Z:?jHa_D{bf=~F`|t;riCl[P_,C T=}f-eYFG=?{zl1Jc4xMw^#xFE@tD)NXtbix');
define('LOGGED_IN_KEY',    '4i),:p!kosZWfuy}966Rn=:;}9GofFD9AFAJ^M;<VdWhlrL{/^v9r+dtLe,G.$! ');
define('NONCE_KEY',        'J_D#W&CZ7FndKC7`9m?8_t!$gK8zB7b*5Pd(=)n_8rN5yx7}[-,88KVzsFSN@xjn');
define('AUTH_SALT',        '_,g5=Q**-~^eJ6c =z#dvq*C%Z;~Ckn8_q$<0Lo}tI3p;,z$2_3jlz&tKY/m v0V');
define('SECURE_AUTH_SALT', 'x)D6ZQT42&TpyPA{7kcK(h.C-wxlZH],&U76J&k2-DIL gGy7A+7YTljiluBNc+t');
define('LOGGED_IN_SALT',   '1GJ0/?FZ-+oGZ?hJD(Kp21rJ&OCJCSFV>;8JlvT*)C62Pfj2V?33sQ_F:hmP+kX/');
define('NONCE_SALT',       'Lh*9`Y=%9Xje|}Jk8_=2-w^_d+!bPbTl=%MO#KfX/@j%]mm4V,}Wki^I>c1cb~b=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tt_';

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
