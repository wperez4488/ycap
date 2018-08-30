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
define('DB_NAME', 'Ycap');

/** MySQL database username */
define('DB_USER', 'admin);

/** MySQL database password */
define('DB_PASSWORD', 'jBPueqnN5ivgSWFb');

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
define('AUTH_KEY',         '~,-PNpfWoe,)-WX`S3V+-75pm7WVArY[,W7X2Ut2LQjERoA ,asb=S)-G#CB(hX#');
define('SECURE_AUTH_KEY',  'Y5CTu/`uhhzw#ft>I<GC[3:[y:0G%Lgu6FGRZ)&}Kk+Q>&1NsTFn,80{`fOj*Me7');
define('LOGGED_IN_KEY',    'Qb-JpmvNl&iaMgYipr/3sTNa,7`h&wOQ}rQO*+zB0>>Mf}DRMy?{nkBSOf9qmAN6');
define('NONCE_KEY',        '&>BU9w&+D~)}jMiFY!)S{.,0=UV*}ZtFWHxEJn+A0a)ggTiq?SZ>J03xR%tCrY8n');
define('AUTH_SALT',        'gHnga|Y%C.v8T!JQ+o|p/9:ja^,(sZ-ScgI0,%NDo6ga<TN4KFpt2|SF5{{CMTB.');
define('SECURE_AUTH_SALT', '_y|CY$oeY+16yJRWmp}!C9.D 11=mhw=:ecQ-J@Ks>yRjA+.Bl@T>W-^NE <>o8b');
define('LOGGED_IN_SALT',   'C&mBDCvX+>wz$g?> |px?TuQV]oV Yc846[d=$y0YHPyHj8sp--uMos;e}r%i2>o');
define('NONCE_SALT',       '|kIJ[P.Fv5H?:>jvqjl,`yZO9!#3/m?,{QGwsdG:EcvmHSboIF,E_.-f;zPb>n5@');

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
