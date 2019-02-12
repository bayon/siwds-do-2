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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '50dd38260312c4fa26eb4b4525b46b87430bd65d243532fb');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'pSRY,7!v0JMskzNFhpje&DLRk[%[&0P4:cEOX8Q!7`uiww:9g;_.{W8M2Cj[1w(B');
define('SECURE_AUTH_KEY',  '<+k#ov6NhT-nhJb%[mB$f:1r{IRM=Fc;v`asgcS9}HB5Mv`byY^*bU)UfDFEY$M<');
define('LOGGED_IN_KEY',    '@NzJKxpknT-w$trE[>{u,2qY&4lKIij~iEmnExhr%v2^diZ3a2I2d%ct|:mOE@d{');
define('NONCE_KEY',        '{CU)7FrxOvnUZIH-*d=W}>RRW+$,5m^).I4;tx}g;,@!>dG-I1[HFdG^^MYkxc3l');
define('AUTH_SALT',        '^VJOmF#7J8H~^x5N5X>7U7SB4&>IsW_$^VHnTJbAt:tl{dd|c6/pHtD>IA :-miN');
define('SECURE_AUTH_SALT', 'Zn;jJljfhWzZ&g8q2lrD<COUz<$dk[|KXJ~VmI?n/)Trk%8X:mOFzL6.V(Ji%f6B');
define('LOGGED_IN_SALT',   'kY^N4|u6xWMbR(Lp3w(ng3;Xh9!!ig,!6N4<Gy3XEb#fsrCIh[*RYEtm}fP&qWTw');
define('NONCE_SALT',       'a9o$:i.K)v$Ips6Rco}*f4wq^R{; O)P]^xH.LK1=XYe,0:|4yoLGV*JpXq.>(,@');

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
