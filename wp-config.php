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
define('DB_NAME', 'ycap');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'jBPueqnN5ivgSWFb');

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
define('AUTH_KEY',         'vg|NC[}}~]U}R{kz-fS`rwAzJL68+Q.EriV85<4BZS^Xc=sCjiF|ow-XO#w6DRz>');
define('SECURE_AUTH_KEY',  '*YrRa<K/f}EnE*pTa;}P[~e|O@xc7#u,.~G{*{^ vyo%%-c~}aJrcSZ/GC!YqW-u');
define('LOGGED_IN_KEY',    'w,,Wn|g{fG)yx_[kCg>3q3;8AZi59K];C)5}S~;9v2s,xQ%9dj0.HwsKyJ1Xz>h!');
define('NONCE_KEY',        ',Shb#b0(1pvj]Q]z{MJKh$N(HCWKu85 <![l8jB2Qpvw{Atl@k/2L}}Pud8m1gb#');
define('AUTH_SALT',        'ZYS:%viu4=P=h]R^h.EfWvn!?9~|E-NM`@:JUy*cq$_p&j<kKDOxJO5S;]3tK_kj');
define('SECURE_AUTH_SALT', 'OE*txvhBRPY}tqu+nWH<y[t<jo7`{v3ragUM-R<6wN+flr2u(nU56z8bP[ldFj<g');
define('LOGGED_IN_SALT',   '$yRq2v(R@1|`@Ua4f-<}5c()N5iq7[l!Ks+R}Uz3BjRjk^`l<YJ_t=r7:RN>rIT3');
define('NONCE_SALT',       '(1;d`7P./+D:J#-WJXqrm*8pip?F5fE;p=f&t5e|`MYsfGmnHhaH(M:$(![0f:_&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ycap_';

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
