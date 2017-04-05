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
define('DB_NAME', 'ss_dbname_n41m3me7h7');

/** MySQL database username */
define('DB_USER', 'WkrE58sa00uw3bm');

/** MySQL database password */
define('DB_PASSWORD', 'Nao me hackeia');

/** MySQL hostname */
define('DB_HOST', 'alexandreffariacom.domaincommysql.com');

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
 define('AUTH_KEY',         '^*QEtug^Gge*S]6(T/q6I#W.Do~|Htp_ivsf5C<nddn1?+a6,=?h8fT79VD6Xguc');
 define('SECURE_AUTH_KEY',  '_#A41}u|{`9?@1M>Je|O&{O8=]uC[70M]0sb}+u1UR6M]K:O/EMl#^)he{zUVHET');
 define('LOGGED_IN_KEY',    'L(K-i5o&1P{_+ZKYNas|8^!qW{a7ASJ?B}W(BoFXRY8z~2N/WGyNMl2DZ_RH[p6C');
 define('NONCE_KEY',        'Y4giY?j?*lTwc.EFT7h5zPT-|klB`y!ijmvM+?yHpK=)]z|r_=]!HG)iuf_k?|g4');
 define('AUTH_SALT',        '(Q+<Yz o}!gZ6=l<cLV!aG-=%||^|G<!d4@>qi!(zwsi!+L(kz.l0^SY@v8kA (q');
 define('SECURE_AUTH_SALT', '7^Sx~`>a16867;ROG~-^y| ~AhewE+z(W%EvkPTs&C(*z(=y.-_C]KCZx9~J@M7<');
 define('LOGGED_IN_SALT',   '|(qn#3QOn^?yyt5 @8$U*-/ftj.|fQKJ`d|gLPc~{]2`eW.4%SV*Vv,d37Pcvi~S');
 define('NONCE_SALT',       '%f^0GP-8V%7emk_:nV.(^rPyVYW##u/7mEF Em!q#{C]frYec`d&vd##1=0~ruF,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'abc22';

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
