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
define('DB_NAME', 'db1');

/** MySQL database username */
define('DB_USER', 'alexandreffaria');

/** MySQL database password */
define('DB_PASSWORD', 'Nao hackeia minha db plz');

/** MySQL hostname */
define('DB_HOST', 'alexandreffariacom.domaincommysql.com ');

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
 define('AUTH_KEY',         '3Kr@2^~HC98^@tt$/p*j$BP:U14PfHg&MtW~%{LZ7y(W>Fv.EN^{5! pB@|#0U5Y');
 define('SECURE_AUTH_KEY',  '+c&oPi-/7Y4>J6[*D+J1*CpV@m,Y$j0-B_8{t-v5o|H|k`/H*li4YX+%W/<T1WUE');
 define('LOGGED_IN_KEY',    '+{e$oy+2#(#PzXSor>XLHy1EC8%w~VD^*-;+G[>?RRHE>thtk px4f78lO6QY%Hu');
 define('NONCE_KEY',        'Gxy>$P$dOi!?6kuXWq`,~0ig0+&~tfBj~H41;>a1W/[wW; Bv}k}_9N)F5l}{,3 ');
 define('AUTH_SALT',        'd6pn}Lp/2+3*l~^ZY~PJv.kJ[|xX.,.iBcYNFyge{7jd.oGYC6IwI@Pfa8nELatw');
 define('SECURE_AUTH_SALT', '[|)<+_m7qCaniZ,GP-VLyh-aT<U_fu%K8 2Nt!8bS,W=1+0+S.h vY;$Juq[1hz!');
 define('LOGGED_IN_SALT',   'FS`<C8Hq5HOCB`pIc++jV[kH)NB _n)QxT~l!^,Nf6yH91%z5-`t|%#A#S|YBMwX');
 define('NONCE_SALT',       'lIWa$l(w|-{x__t54z}Qhhk@||0Auv 8TDB^m#h7u`zQ;gN_@3BwFl-!z!u0vE ~');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
