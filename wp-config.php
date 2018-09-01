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
define('AUTH_KEY',         'w<I#0%?WB_lG0*e`k]N@&n~VdLD=%o[D KBJk$j^?Lc[5,OAsS)5z?p,M(L@z$,=');
define('SECURE_AUTH_KEY',  'Zn,b+.imgv$E4#zn66zV:gXEm+x- m@Hk`kSK1-z7}{.`FHx=c~n3^o&c:giL Yl');
define('LOGGED_IN_KEY',    'cWf}edL77+L_SmW^dRI*(DL7OtLZ2%:5zUb>:@:^ezR&sqoc12q8=e((~w9JUbL(');
define('NONCE_KEY',        '4)0:}PzUe)x53S-BFIrI[lp@VoMSyf}W6znx1V>z@vlk?tX0E(zTe)Wo@zjLWsA7');
define('AUTH_SALT',        'bqbR6S[Pyg-<.%:w_GodN:9&2(.eUkRG.g<:!r6`z +7XPqh9EVww$fxnU77JU>%');
define('SECURE_AUTH_SALT', '~/HncM#u4n<oWFtMwEPG<TwCGCe!FzP)Y~PwYGU4c):?*qt8cS@WlMFeZ?M[y&%f');
define('LOGGED_IN_SALT',   'cowsz[MZ 7 4*K/xz%=zx/~%!rv_!zM%y~7_1Ix*s<}w#K u|^-h%9Fnp2Myz%Jw');
define('NONCE_SALT',       '@Zb^|Oh~<G3|eHn<o*}D3%nBF$ QzAb#ATSi&-)LBKOR3O.Do?=zHc9s`rq}?-q`');

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
