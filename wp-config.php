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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '5FhEBfosTG4zv6Xf');

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
define('AUTH_KEY',         'TV3^~de)Ult%6j-}`|KE*hf;X%IIFl#qAt84MZN64LvXPd{fimG[>FM;?E!DD7Bi');
define('SECURE_AUTH_KEY',  '0lo3|Xw@e|Sa*K)Dv!jyL-@0}|G=!)CqeS~!b8=nwDP2c#aGYC.1><5PweDUiIZ,');
define('LOGGED_IN_KEY',    'K3iIw7`s<|l k;|CKy]|k1Wbc[h]u28$iS;9b,Ta{<8CR!h;6{:uU(absHSUM?^&');
define('NONCE_KEY',        'QY*H}lSR-qj*y>yifr_2tne-zz@^=O2:,#WC<PrRj/.rf#Haa2eA<McMgFfVRiU3');
define('AUTH_SALT',        '6;`Mhm^8I44e6(ovEAPpcc*et*)1Z1b3t+z;V4!t0f?TqwR!;?zQX6_&Pd$l,gm4');
define('SECURE_AUTH_SALT', 'I+V.> _ngAYd3j+oC@w{H(FRE<i_df o7w|o#G}hiEGFrr>zp7QN}}{v[avwxA[!');
define('LOGGED_IN_SALT',   'E#bs9,u#:U19^j]KSw[}NKZq)4igj2dH]%N!qJ]1=xP6Rv&Sp8.w;@coc#c;*,CS');
define('NONCE_SALT',       'pJVdH)~um70[7}TObluPB~v?K10HX}>~F(L_9{Ub0*Y#4oL}zFe.V*BsRvf$)HJ^');

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
