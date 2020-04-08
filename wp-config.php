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
define( 'DB_NAME', 'wordpress');

/** MySQL database username */
define( 'DB_USER', 'wordpress');

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define( 'DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XTB2$<Va+RWy}hdM&%53xHKM/m]}|v%_Q}Va9-dhZWYW]G~(F$G^|c%+u:emLEW9');
define('SECURE_AUTH_KEY',  '|R`E;{Wv4Ry(g#?V6,RZO3][i%L(o&~ZHiu46l%|0-Zp8Eu=Du(WIgwmhyhb3wG[');
define('LOGGED_IN_KEY',    '8mXLd!&F[QHmWn4rP3$+O+M3VD={{<LjHCX:Owi]ppILaC*i9ok!U^Y>n^?gfO]-');
define('NONCE_KEY',        'c1GeC-|Qk^mP C(sFW-0o;@K2CQzU%dD(&c~)?^dLmQs!~$-Si8O+C 8mGec5?>c');
define('AUTH_SALT',        'gT??y8vQNC||B-5t)r*VB;6ZCH=pCa<Y/Pk*28pub%(29rA#nn7<GA-:q[LDRIS@');
define('SECURE_AUTH_SALT', 'i<P0B1t~Rn-m&TF=VN}j5jWFrqhHc&c5(4:nQ4|IAc|nz`&%iC|+e@]6tQ<RA2-9');
define('LOGGED_IN_SALT',   '51N|p,>@^}Jby-LA|3}w=bDy+d8qZ%qN2mDTmv}6(~$5)-UdGE&6t<ld;aPM;{yh');
define('NONCE_SALT',       '-GMD|#dP`[3a?#aDu74(^:[F[-7HO,RVPJl%uR+]sra5Plzab:w>RQhQY0vp`p~q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
