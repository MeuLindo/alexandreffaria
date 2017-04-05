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
define('DB_NAME', 'ss_dbname_j5j1nbenjd');

/** MySQL database username */
define('DB_USER', 'ZhISYc1E9t0PzDL');

/** MySQL database password */
define('DB_PASSWORD', 'weSAQ3wNTZebqRjs');

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
define('AUTH_KEY', 'tZJx!XByBOj[Ino^%*I|JI=VT>)F_j$+WCCX{tVCWPe)y|I@sLcauY;ZC^R*NfQ{HARC{PbvioDKO^<H>%v&@GeWzd}tze+m%(=YH%t/tcot<f}+CUobluZ-+d&DN^*B');
define('SECURE_AUTH_KEY', 'InMyjxX}X|Q*+=g>)G])j;>A{DDXh<YoO%a*<^Gqd&!oT$_xZ[Ohl{o/oFpHW-[iL>Fe!(<X$@%m})?SwS(%ymtSj+SlH}yTN@x{%hyY(SG<g[ke!%|v$)D+%r(zH++K');
define('LOGGED_IN_KEY', '/NI%_uoNjb}WTnUcOd>g+P)hy@P&)lB-ONja]x>gvw%{Mlop]baEWg=^a=SYbYs}mN;NsSj[$D>YE^^m-${G&qAxzZg@aFUfeM&=l?SABUGboM/zER+RaBW($h>!G+PE');
define('NONCE_KEY', ')V<!HWEo;}oUc)-fZH?Apf=GQ;_w!i@a}/?F-|pW/&s^}(bZl}KaaxsxuwF_W![ZU+iX+?bLUHXAhHqp*YCFz?VDBfIU%V_yTlkk*J*_zgA=fYBIUC+}//WKX]N;wEtc');
define('AUTH_SALT', 'gc]FVhJcYI$ib@lF?EKbXsHdb}-IqKxPmBQDROHPIMo_payZ!KjcvSX=EICIblnp&qD%*k!trzZnY)uMZ/=[WiP/GzL?+OmpH=xWNU${y{$p=s$pJO[mxs(TaG>FU{U^');
define('SECURE_AUTH_SALT', '>z&Sog<vzK?L_juU_jLSHPDQNsT;JOR)nC{QbpxUOci]!}||/QAjARg)+UxjQKJ{+SP-%-kri;LHWqx)VL(?/e@a|KE)IYB]$b(z>F@ip=stvCjes|S>g/DVKhI|z?S<');
define('LOGGED_IN_SALT', 'M|dQ!CdQgP-uyFdPra*IKesfj]*}{<opxwsd-^HTRxZP)$grpy^>MKT?^_E!JjuTEb{R/ct+{iFs)OM<>okB!B{Syk%n{jd?KeVIGza^^qPgFgBfC<S$Pa>ceV+{cPH;');
define('NONCE_SALT', '[Bk>-UffbFmBQZcV!ynAr$[[!%]@Fc*Qfdh_ks_%!ti}t{Rlz$CrdRx)p[lv*Bxmqcf<yOFz@@HrAvt_?MiwFAA[y$CbbtxK/mUap{kKZbJXu_b=zeK[DU(JxzYiJ/Sc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_qdfb_';

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
