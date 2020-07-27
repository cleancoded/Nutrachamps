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
define( 'DB_NAME', 'acid_spider' );

/** MySQL database username */
define( 'DB_USER', 'acid_spider' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dL6QpNTEdVg=' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'jvH!T|YZ.@}P#8Hha`Uum6!s}U9$}RlK2-jci#HZy|{oCv1:?cSdC)oRbC|9qG-T' );
define( 'SECURE_AUTH_KEY',   'M.9>%cM(nn{3TTJl8%:TuTuUjzNdJ~kB=6c6,F)#E]K?u;zJLR^2}FADPM4@hz2o' );
define( 'LOGGED_IN_KEY',     '%GH8M):3.Pxm&(wX.KPDBoVJItNXn+EeX6m4*gBsg)lE4Sv@$JDcH6-[v)x:=u2i' );
define( 'NONCE_KEY',         '{shz3$OO-&8W 2Zqj,i)2I7;}-DW?{*r:IS|RXnN_t gkhi[~C&J}@bQv.QY78LG' );
define( 'AUTH_SALT',         'nLE}$A}%B>Up5iLPO7E(/o)E* wdGVG[8*3[FMa[&V4S1SZsyVY,jZ,4T.J<7N-t' );
define( 'SECURE_AUTH_SALT',  'kSV!rOHU;*ota8]Vf%-|UZOdDIR__AtZ.Ey4Z` 6L{g_?/`I^nT4;h3FbN6O(bF7' );
define( 'LOGGED_IN_SALT',    ' ?K|I%`{hupAl2}$+MG=1Y(#QRW*|sv@Gd<3tB1~,#sX%7;88VBaIhTi4U_E{9_C' );
define( 'NONCE_SALT',        'Urg.[9*aG50u^<b<X^bGi;iT?Y0fgCFe?JF_y=c,{^L}Q8<MIFCqF#CP6=1Qx#zT' );
define( 'WP_CACHE_KEY_SALT', 'LfpFb^heY^z7:bd}m448+LE(kCGZ|FhHJ$kQp_@3[Wo]w]0$%yvh+mvuj5Sjkg/=' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_DEBUG', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
