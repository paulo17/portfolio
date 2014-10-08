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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'S|{)F>}c}|$!-O-A-1Mi4{J/I;Ihd]?PDqf4YFJG:*1Csl4J<z/a=]LwQ6y(|0%P');
define('SECURE_AUTH_KEY',  'Bl;V`qdI(6X$d0x|LdZ*ttsUdHe{mAR.~q#-JR>El]O*@k`G_t1fezuF5G/dcVLU');
define('LOGGED_IN_KEY',    'QYMIuhoNpEso+Czx0gUJgf~X|:i+TQVYp!un&:UE;VNnm.44n4$z%@9gpNq>ER}#');
define('NONCE_KEY',        '3{=xY$4/R@+JG{pTpy%CXc*9,B6<#INo9X1JG}P$(-od>jW1v~+VMYEz2Swa|a**');
define('AUTH_SALT',        'c!]MaomJW0nkPb@tB}E{zitx~3>I$W)QJRc;B+2@C,J{{gA_r?IbWiNQ<&P#XaH{');
define('SECURE_AUTH_SALT', 'Kh+imTIv5h@;[9_Fp?K_YN/0Th-9)q_=Asu:Tcom?N,bPH+BNaq/+fk6kIi_DJhG');
define('LOGGED_IN_SALT',   '.+4p(+PZ{5E-HhV1vQp86*KZMxz/B9,-.Zm!RjjEW5uFCb-=xkj{e)=Kf$k:SZV[');
define('NONCE_SALT',       'wbN;eVIty(78p~7atE#mt}:p01eB-2B=UU.WCk n}CdJ!v*[7i HS*)2QB-Xc-zr');

/**#@-*/

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
