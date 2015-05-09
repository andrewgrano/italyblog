<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'WPCACHEHOME', '/home2/agrano/public_html/andrewgrano/italy/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'agrano_wrdp1');

/** MySQL database username */
define('DB_USER', 'agrano_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', 'LI9wBlqPGnw5QT8X');

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
define('AUTH_KEY',         'H<#P|5<M-c0lKz36nOcM3Va;rdl\`k(<tyFf-7LNPm8838=J:eG|CG2d#*1LX-');
define('SECURE_AUTH_KEY',  'OlpONDhAiBz:TWMKlSVp1S\`@6ZITEHT$?<)O(4Ps3=;P^!eos_aecD~D|l$Q9n');
define('LOGGED_IN_KEY',    '-/CUUY*N=5eDR4cSG|JXlU*:(mBgYp=as=H_SWCut0b@UZ?z<RM?g-VWZXEouq:vh0Y-b2K\`4\`2TJxR$b');
define('NONCE_KEY',        '2bWbfPYP~H0?|HGby<unKs|aaLtMKk~Da?PYDQOno?lcn7f)a?Wc59aYwkQvm<J\`S_!n6(');
define('AUTH_SALT',        '?AQMcsnmc;K8@E0\`f5>Ob1nljIoULF^A(<QK$_DLk\`wv0<JO^HFluI3EB|HW0<~r|WN');
define('SECURE_AUTH_SALT', 'RCVelHkucI:Yxt(l7wzhl8zbngUD!2waNmXOrY3)|:8;JK7$B256XU9#N(E:n!kODT?5z\`BjG?D6jn?/u>');
define('LOGGED_IN_SALT',   'h|pLU<xl)c;*zs8-g#=<Af=Zn$\`6mi#k:vJ_83uy087(ZRHua!uQTv))~;qm!<gXrz(n');
define('NONCE_SALT',       'nX=@FOObDC?*Xz0lSqH_CjcPR)dwMN(ztCF*l!)w8@OK:*rbVjde*I8FC0$MNh:1zQK1x');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
//add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
