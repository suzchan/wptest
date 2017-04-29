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
define('DB_NAME', 'wp_test');

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
define('AUTH_KEY',         'NLWLR5^Q~Ld?#UuMs7?4PE-ajW?hF}E9W.On4EE6:l,u7Z<5NPl;j-KBJ?Eu#RIc');
define('SECURE_AUTH_KEY',  ',1ff&A5Pq<*h=GpT_RBI!%^7fl;*SgVr:r nK=0P_e[FG@/dSw?W_g|?Y/yC*uRM');
define('LOGGED_IN_KEY',    'XmHgKbAJeO%tj[4g3/2k0)YI@h|OYo/QlHL! D4@pB*iGyu6KGmr@DA2%5bhi-F$');
define('NONCE_KEY',        'F.B?Y7Hs96|w8U&.[f#9T]M@|#Ht_{J>A8R~]+(,V;$:h8~_7SfI|]b[9_wN(;rz');
define('AUTH_SALT',        'w{Q+m)}5A2isnh=bIV_Us^aW+*;X]}IH]ibU<vq)W%^Gh$G@M;D+/3~9]E$pt[_W');
define('SECURE_AUTH_SALT', '.4QwjgdXgEQINniOSh@lwL0<T~!4xBiKIZw3u}`y.NfUW 75 eSuITU%_Z~WjWV+');
define('LOGGED_IN_SALT',   ',%70A[|$0KUg`1/(]n|f*TU!l[(@cThry]fY$=>4(neZOYYu$~^[hul4+k!|2MUm');
define('NONCE_SALT',       'cA5W(7tC3(F/4UjeGJY.+LTg+o(Pc)rw1u9U#B[b~CrMy0%wk0Kdl92sT1D 1%Z=');

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
