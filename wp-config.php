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
define('DB_NAME', 'sumdu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

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
define('AUTH_KEY',         '0gtH2kkGrKY0u1{<:dG1/#+.3/%A^tZ7V(tMz=)ioD)oxvZH1d.wppX>oIx9KroV');
define('SECURE_AUTH_KEY',  'bL=1#v8QCPzqNNa+v9,ZE~zF:]5E{({ur9WAO7@1`fKK,NIBZ(^|^$-R_IQu%G4@');
define('LOGGED_IN_KEY',    'Q b/nu}|u)u3;HZehp48#uKD%(6b&HjF-}a_s<R8-srSlJ4y#8@/nKl2hpT7f%+$');
define('NONCE_KEY',        '.~;v=N(EGT)dg{$sovI`bC&0}<(lLMH^=-!. ueVmaWb0XIUx`tSu5U-X{8,J#:I');
define('AUTH_SALT',        'mybY{VSTp)+H)u]Tyajx-Pkm<C}eWb};R9ik&R=)F@2)$ A68gS%; ^rhdefgl]6');
define('SECURE_AUTH_SALT', '~;E}dV(g@&v#K2qqX0l1y;`N@Nc=4y5{suuiinVOTb1n:c@ lj?1fJjxA]8Jl) @');
define('LOGGED_IN_SALT',   'n`J}Qfa/o2h%V!+Xs5[&sN~zFF~-:&ez~c?T&M6mJ<U}xVS=6+6egf7cSj<gx{bf');
define('NONCE_SALT',       '@DRw.yl@=A,wk-A&9ne$xxwJ!@-,h#%<+EGrj<>T):y!?f{rH>01*(s@Z[0Of=Os');

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
