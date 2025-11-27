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
define( 'DB_NAME', 'WordPress' );

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
define( 'AUTH_KEY',         '<,qF@t>=^,z<#n|oW:WmSx$ye%[pG4Y`xBW8l_,p0CtWo=E-lMzh7d#}:Fm#fLj:' );
define( 'SECURE_AUTH_KEY',  'F*xWa~mrY0h#k{7T)oaYZ;%x&_g5%~wY<O47L]NnK/<KX.n+x]9Nn!]W)e8@7zsQ' );
define( 'LOGGED_IN_KEY',    'TX(Y.;yt7H+BP{V4u>!ZC@2wElzu8!]O!W$GrjT;w?dN^]pC~EpO-I=1Tp@%daT>' );
define( 'NONCE_KEY',        '.BV/H[[/0A*@9cLPq1EQ!sqc,/G1>MftmWc*^usqvRX5VQi~e]rNI@RYLG|/6(1p' );
define( 'AUTH_SALT',        'pDj9+kKVAZve<J]P:qVuf_IGxHIl3dxT`4.2!V@8=l|:~$sT?e5XIW8Cf$9kL]wz' );
define( 'SECURE_AUTH_SALT', 'cw!s4v2V&wE$Q.$B@Lj<ywC<=]9~g0ev[hZJ$J61WXYrpZWiT:ScIZtAP|(Rx+13' );
define( 'LOGGED_IN_SALT',   'pI|B&CIG`~9WO:]|:$9Owr#T(iZBAEkJJ[:IQRp%X~x36C 0Pc>fajg8xj:.R$Le' );
define( 'NONCE_SALT',       '_}_$6VYHPT3hZ=$fi3{U)~WL({Y/a2ysMDn }`vHIv6&t!butn<JMne?3MqmpwEa' );

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
