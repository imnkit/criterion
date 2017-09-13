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
define('DB_NAME', 'criterionblog');

/** MySQL database username */
define('DB_USER', 'criterionblog');

/** MySQL database password */
define('DB_PASSWORD', 'qU9zXB23yjDLM3XJ');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FORCE_SSL_ADMIN', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm(MN?~+kLhi({|:f>n[f{$A?HU9@fjvuNCce-#)J!j-5~$h@6IJ}Ww;@)F~n_ZNE');
define('SECURE_AUTH_KEY',  '>YJP2([K15TEyLziEO-BC3/s-Cc+Lb$8=O_bma44vJ8d1phv3wrin6^cBHDM|p{Q');
define('LOGGED_IN_KEY',    '+enz9j+IH M2Gsqi sc~)(r[qz7*o4Z%-m^s>5l|_1)-%7qp+Jij+c_8`THvw@$o');
define('NONCE_KEY',        'o/P<rb8K|DK-cECgcgS1~Zb;[|i(&+Wg,G.j?[6plTz$`k(2pz(O-&>xdszKc.4|');
define('AUTH_SALT',        'Eym1oYIDl#+xj=u=T?FV1SyU`KpD,LP??v.!:[8/~?c+u[R7Z^~O,IBiy+6~:+_n');
define('SECURE_AUTH_SALT', 'MfGF9:&]W.uI:D(d3jQ1us[>*<u`|S>{|95dJ&NwKa~D5SP/]a.A32LAE,-w@iga');
define('LOGGED_IN_SALT',   '|C-LX8QE`ToS[w7|L5KzFpy}d}8vJK,Yls|!v_!l-~MO|<Fj#Gx{0MYo#t?nrlw{');
define('NONCE_SALT',       '.u_}R1$8:v=dm+|4D~NTz@B(U{lG*Gx~%-$t-k>9,CutIksd_0]R nq|HHhcv-f?');

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
