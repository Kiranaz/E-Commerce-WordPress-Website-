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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'wordpressweb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '@07p2N?FW{L]ria!psENZ8*8N@GCqBpR5[Zt@5vtK(waL{p5.PA>C`sy1p/&8]m*');
define('SECURE_AUTH_KEY',  '!{sv,wG&tUUX2Ik.s=>&3}Na$HhQ{o_kdSa;ZdO?s>B-lGtUDn0/Ip?|h-,wFuKZ');
define('LOGGED_IN_KEY',    '3D%4YXn+k&EEF)oewL>Kg^{vRQx&+7Vxp5]SxQJ#9%p/7yi=sqs3UOZ~Kde*v+b)');
define('NONCE_KEY',        'zlb+Sx]|79wln;rOY#Bl>(?,nGh;b8%:sn))8MF=D>%lA*q?@%rmH)vlx/iWHNnY');
define('AUTH_SALT',        '41htRyZw|Ut+_scY=$y/,;nfdjtXnPERS^]A<=8>|l +<H:T@)jCty,_]6Pg>ypN');
define('SECURE_AUTH_SALT', ';e!}U`s:-l{3VF/s-,J]QNYR{zee3=+481%i#b1e N17) #!aMI$>IJkYuD0xv!?');
define('LOGGED_IN_SALT',   '9S,eqTN-l0T=odz#;s>=PAu*tyY,qPru}c[+5!73F,5&I$R t >=yDe<+J5|^0IA');
define('NONCE_SALT',       '-^{PuVaO5R%*ychm/,q|7EZ*|:cl:~;JXkP3J&bpa?uag/S-zqvJ=Q_vwNO_~lK4');

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
