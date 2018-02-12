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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '&@nU1s[WUq^<]=uODn0T3L^cPmfR1=%EkCs)1d/4rD:s4J@=]PlIIt2[h0W=Y}+3');
define('SECURE_AUTH_KEY',  '`6I)7K*JYBLQx~<GN&,e8hA#/Xz)i7e%=@|H`GNaWh^;W{^xD2 $3oJ1ZoS312]9');
define('LOGGED_IN_KEY',    'p6`n=+xe_uLB $5,/kaw#8twRLt(,^ll;`bS)EB>XM>hC?g/~!sSJwHE}r5NbotB');
define('NONCE_KEY',        '-cI$eL[8vDGf,hT,eOuMpPQ7ktEHFK)*0{Q4ze?}e~,0>s4qz^Vj&b^Cf(1:=`@K');
define('AUTH_SALT',        'o /^wj)kI*`4QfuT^^7tWKFP?W_bm#ON=!h1CZ^i8^;X3wZrOV!F`,:hwl$yc.+G');
define('SECURE_AUTH_SALT', 'v*NY%`e/5H$8bN{}T`*w;>zrAiMgVg0UYx3FT+k4#P*F:n*pJ8k+fMfT}B=Q&rl-');
define('LOGGED_IN_SALT',   'f_CxV&yN5WTTv?BcUQF+1&0Mpb1`fW+XglhFul*a/bPkY^A2_Z{wc._T0Q)!y#Ib');
define('NONCE_SALT',       '7Npxr&H}Ss22sN(a2BZ[ ;]LYOQi*^<v5WMErRq60vYYE^0{fhpq[-V 33pt*66(');

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
