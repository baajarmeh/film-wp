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
define('DB_NAME', 'filmerdb-wp');

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
define('AUTH_KEY',         '7v )gTCX/Agzge|73olPFq!R~a.!1Yh*Gxer,n(J+fMY1!~vg>`Q>%?|Za>>F8O?');
define('SECURE_AUTH_KEY',  ')|4`*.T+B?3.eckt&HR18^df7|j5N.dhS#4TT++c.%YmK$FE,sKP!{BtlV/(52yK');
define('LOGGED_IN_KEY',    'QQSyrj%B,4F?A!4o1XRm1&_;%O1Io*<5<E=ync7{!m|OoxI@VkTKiYI(xlZ#e^Q[');
define('NONCE_KEY',        'DIpjMH?,^F>U]K&fh`yC~caOw^zlp8Astj]b{4pqv#IT_;L&MZHi]9h(aITjnQL>');
define('AUTH_SALT',        'U~r^dU<v+_7a9qsk*F(s)M.n`oc<={%1a2iX/Mm_f7=/8=t8^zcv:0$JtYmQ}I%B');
define('SECURE_AUTH_SALT', 'm[=z=nJDBXy&JN@OZ&g,yw (#&3y21OD$qYZ~`P-8-`J0h$Cj8]FBm6,z41pgK{]');
define('LOGGED_IN_SALT',   'Fsya7Pz481/ajrTy.J/N#Q[D)nN{F]&IxnQ`G]B` L[1,*M:pF-+)l;6mkEK?=G`');
define('NONCE_SALT',       'I_Ck5?&SNn/AhK5m`LTYkt!?,q!@W;l}sV+x4{un)~.8G!=8=`p4RF+4IjY]@xW[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fil_';

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
