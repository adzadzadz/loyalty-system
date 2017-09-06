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
define('DB_NAME', 'jephty');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '(Kq3!6ip}6Wi3Fl(|~F }=@uL3^y~=@_3B87sc(/m;6iB_O^fHw_}KHRosVH/WPf');
define('SECURE_AUTH_KEY',  '6PF@M.S<ESoddW#8z*mOE{gs`Dn@/E,)5Ki;7T ;Fdj?KLsR}^Y TU6Ka4M<O|&u');
define('LOGGED_IN_KEY',    '.N!/q?:X3qStN]bLt_Lw:),^2U^,IM!DA(v8xu-pW(!I%ODM6WhU.-J9^2a`,:BU');
define('NONCE_KEY',        'Ao]9B_vj3_d ,nel!~&Lz5<d0e=b*sH9d{iWQeQ3f7E@6b5W2wD=XMR24(j$L3vA');
define('AUTH_SALT',        's/U5Rfg=10=BsE?Pt5_L%@Y22TeKzS@nHZv;O8gU?P G,wZe>PyC|(=*-ccWh2~)');
define('SECURE_AUTH_SALT', '/v)HS3n8GH&<])qIAJ|i?^SQ6f.ZiJ{c#Rlv+mo#F54C(ss-4fbz+kh+}~KB*,=j');
define('LOGGED_IN_SALT',   'mX^`R>ikvt^=t7H|vnoTXxPy7@h2hQ_Sl;QuS@w%P&$|$B:+F)2E&bs*N4k8jEw0');
define('NONCE_SALT',       'Z7&Fm7$JJ)?.*CI+%_hjR#-iV}$0>%uo}E<J{r;T0e)U5Zub6&Ah[6QZIy=i{Nrt');

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
