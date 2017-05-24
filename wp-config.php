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
define('DB_NAME', 'wordpress_base');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'snTEn4=H$}X&TwP3`/e[8YA+RAcMIdMhc7=p:iS`Wm!UF8}PkwE:0?q,Gm[>=LiI');
define('SECURE_AUTH_KEY',  'Zsae3Sl!NJ,(~,6l7aXKK&B_ZRiwWFjc&4#2F)JofVd%Gv`*s|2:wlEZ24mseUE;');
define('LOGGED_IN_KEY',    'eaES66C%2]V^^KC_TT,5G(n~.h8K-pYJN-.$.xk{A+<5/ra3KFZz?oHwcG/Z04OO');
define('NONCE_KEY',        'SiN{C3AN%d%P1rQ>t^0h&cwT~9LaCMb53114C[Z?#O-R^RP7@cusMTA}6ZYH$|#9');
define('AUTH_SALT',        '{e{De%{`#o+XZ$A*Uc$~4f,RV@=KBmkyrMC|Z>n13C7-nTB[W:dz+s1j# ?8OCso');
define('SECURE_AUTH_SALT', '_D>d9jdPMrbe[S83az>0EaLwuX[15XNNe&!kf)#!|?1bjuiP<=DJsB<VE=7RB,%/');
define('LOGGED_IN_SALT',   '3@e&C-3i[N+S-oGx`4-:2oAzQdGV3uPW>%dcN=K,|gq9Jnr]@uZ^a^60[xS=Sp+@');
define('NONCE_SALT',       'pog;|b;5IZP}.HTU-PO0;nR?Oo380Vc!.bu#A(uG!VU^T}e!,qb|s&+->=XtHQ0d');

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
