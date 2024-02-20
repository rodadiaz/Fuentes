<?php
define('CONCATENATE_SCRIPTS', false);
define('DISALLOW_FILE_EDIT', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_AUTO_UPDATE_CORE', 'minor');// Esta opción es imprescindible para garantizar que las actualizaciones de WordPress pueden gestionarse correctamente en el paquete de herramientas de WordPress. Si este sitio web WordPress ya no está gestionado por el paquete de herramientas de WordPress, elimine esta línea.
define('WP_CACHE', true);
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
define('DB_NAME', '2037862_ferretes_wpdb');

/** MySQL database username */
define('DB_USER', '2037862_bdadm');

/** MySQL database password */
define('DB_PASSWORD', 'F3rrecabs421');

/** MySQL hostname */
define('DB_HOST', 'mariadb-051.wc1.phx1.stabletransit.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('WP_ALLOW_REPAIR', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mF/j65AR _j<C^W~epb2,2rvPK#Vp3A( tF)YX;dP%O$PB$9P4Dac[(p/_xI$15d');
define('SECURE_AUTH_KEY',  '840@1ybwnZGMiG^^R[5vE~9g9^rRK(%-Z&(%wZG(a4lXZ~Adp51TjD65;SP?xO(Y');
define('LOGGED_IN_KEY',    'Nx!9jNAOoM!J<$;t88<{nX[8u0-$X7c,HbnSBpynGsq4Y#yIgru?el8rf,Eg,^Xg');
define('NONCE_KEY',        '6R4B)xHRG/g-LEkO^U6=(Q;z7~Bb@f)G(pN(4X`DmI8*a0,VBqu;`vPCTDH&P{5r');
define('AUTH_SALT',        'RJ-[dK$|px&/2ZzO!{?ZAw4Zz^9}lU@.U<Yz:sK|!.g_,N@?As!~+.xX(MYRN23T');
define('SECURE_AUTH_SALT', '~)hrNf^Xn$X=|uL:O>bHL(<3]rsMU+[6-H|0[-$GTxd`G H3Xw?a*-QYhRFi&@!7');
define('LOGGED_IN_SALT',   'P&J}73-uxfKy`>w$lf2,+5J3]aP?2P=)s.[,=io]OjiW*5SX=L#(I7:7AT+H@YSC');
define('NONCE_SALT',       ')koZ!l^ZBkp${R33Pu=#Q&cCQwLp!~DHaXfDI8@9hTOt[J0|LPD}w,{^!f>|5^r4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'PvwFApK5fS_';

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
define('WP_MEMORY_LIMIT', '256');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
/** Directiva para FTP. */
define("FS_METHOD","direct");
