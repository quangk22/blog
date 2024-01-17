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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         '#E{u7Xhf.f)+0dFHXvE}axK}F<rV_qN+t)?vkY-n2%%Ic-E&q2(y,NR)#u;Oro`?' );
define( 'SECURE_AUTH_KEY',  'rNjxWAM{W%ZlcE8mg.Hg8 bg1HW8!Jp%E;AJ*qajjGvVzJ]Ikpb90!;w2%&^EneM' );
define( 'LOGGED_IN_KEY',    '#@$&r8f.r`%+rBnaovh$jnN9~-KF;m|dVc=b=Zl|GcUFtz>AtS@zX~kyZd4HP1e$' );
define( 'NONCE_KEY',        'w<&*i(*f_yY^tk9< cwSh,sjg31>m7sJM[X$&BCnq&kc.{@2{5Zk(0&cW,4K7BTb' );
define( 'AUTH_SALT',        'qIR{#:%^21S&C]HpZ$6:KWLXA(.K0X*b*Ot{Hi$HkYfB;{@.g{&(_e0YS]1P3pO!' );
define( 'SECURE_AUTH_SALT', '^D2TT(@R9M>Ugfhrur.Z=!OB%D?)cqUP+aI)I53B +.+egs=n52Y)>?cvGhgSZcS' );
define( 'LOGGED_IN_SALT',   '-e 0!{at6D@edpzGI<&P]NjqHLND}%@?`YzQ00lsSEt]>Pi~t]zM$6c&;KP t)UV' );
define( 'NONCE_SALT',       'OX1NKb3gqfScC/:c3dj_O=t8q}v]Gd[GFWTZ3S0Z|#~~jn!j2cOJ7$56ZpN*d*s^' );

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
