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
define('DB_NAME', 'knowledgeflow');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         's^bSD[(BVU~%tc!jrp]o/b{q{oB>^rfO$JoR(HA,QI@@1ng(Hiozd!?r{VjKtF=~');
define('SECURE_AUTH_KEY',  'SLU)h<8IQm4~iX_<>!:@tv=sXa*IU*Vjj4r7&GJtw*dV(*sBU<@||Qo+=w|3}R/F');
define('LOGGED_IN_KEY',    'Cgk2$oA9BBwNsxp0jmNReXx0pzR5OB(odinQU%]H^ /nqa/]@q6qm<I^J6gQ&xV-');
define('NONCE_KEY',        'yerHM+7%weDnAXI$ve[z/.rsAcXS1/5QAo3qRV>gMn3ebCZSa4~U?U)CI><2F,}T');
define('AUTH_SALT',        '+}C<n<?A4#mQ5p#[ZMYVx{J*trz(m%::{>Nn o>9DC]CQo[|KTYNe4Qb3Ac2&]MC');
define('SECURE_AUTH_SALT', '1E/Gc&78n?m&}obB3U7g4wyh+PuxQyi`(b1Yel>W*gYcG5J%Xn[a1qPXq|. V0VR');
define('LOGGED_IN_SALT',   'GG4c!RvQ(ils~!eag0K}h*`K+;-M#FD;dnRdRA2L/s=-u5r6;jCy3VLp~xrh>Wap');
define('NONCE_SALT',       's]3I[Gw.<{z^fApm2CHzM9jn)Nz@fA;)djZu6cJ?*W@eu)OXdqrg~i/JU=D6FgZR');

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
