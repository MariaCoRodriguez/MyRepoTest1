<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db_midterm' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.dO%Qm,<&Oz?_oj8V:p ODwoj(^#Zxj7.(_T!q]Yz)[fl^J0S|c&Gk|R.m_NME.Q' );
define( 'SECURE_AUTH_KEY',  'VhwTl8q$vLs{q5.Y@j~9PP9PmiJUD.}L.tmMFK4wi8-M24WZewB)JDC0Y]bP`Fj6' );
define( 'LOGGED_IN_KEY',    'Fke:;iE1*3JOgs4Z)kMd{jTSp=OF=Hp9J@h9,cpEH5@VhTQJqMI:yj@7nRsvp%VS' );
define( 'NONCE_KEY',        'n87cww})rUS`U]jK&PYy*4IJn#jE@GzoVOZ{)+9Q7ZJ6Bs/G((Bul}:^N%j$!]Hp' );
define( 'AUTH_SALT',        'H9Av[}7GL+!ws/KsP3k*[F&3?ER.knrI1uXgVWI)^)v^PUaO3LstV%^q.40,&^!2' );
define( 'SECURE_AUTH_SALT', '/vl$Mf9gXiOyj^h$PiVCWK?5p;MZS<F}[B8Br`[st9(*$r h%^-/:yjCKbWT`Qkq' );
define( 'LOGGED_IN_SALT',   '[0oW8?Tg!0m51Cpk2iahLahne,muR!D*>}8~S9s([4p&=Uy3W_8Do}w=Wn2>/G~9' );
define( 'NONCE_SALT',       '/a|~9xFu]:Q<$54WyjPg9CM65W_cB8Z!L-axn}ADlqqcov@*XUlKj=:,0tK;UV$8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
