<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'armoniamatutina' );

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
define( 'AUTH_KEY',         'vOi)(YsF2nxO onRq;Gw+~9x?O/@I#/2F(c-w._@~aPRv~Ye#)M+r9](q5-dn*pR' );
define( 'SECURE_AUTH_KEY',  '#Pr]q[uY1J<D:O8MSTnbCowfp|B#KCNrG[z0C};X=)`i GqGNkzg&w<Gx6X]YxK{' );
define( 'LOGGED_IN_KEY',    '6&,L=Ye0s_vb15cO&755rb1_fci#k]w+A70y{%_AWhy!u;9pRgyb,VAb/1/.Jydk' );
define( 'NONCE_KEY',        'tE5+e#v2Y{7gT+uB+5gC6 @xJt)J%elnM&33Bwzp@_ZJJL0>m?Uyxk6Ne=BjB|^z' );
define( 'AUTH_SALT',        'PVmZaGwbr$[:,G</bZpvACpn(+w=soC0^}_QWfW&2hqJk`FW{fWEE2R[RHrR9A3j' );
define( 'SECURE_AUTH_SALT', '*=eI%;R*9=|p}wfjI6[=$ePDK4bS<3oi!eg<I-*xbmfBO~gh!dKPTR3g]1B5NK>G' );
define( 'LOGGED_IN_SALT',   'x&:T&m@8/<^S}4OPHW}rM@(]@wBBY)g:oD}X.<3KA,p5.tVI3Zy)R(w2LEcRlUF|' );
define( 'NONCE_SALT',       'HQvLt9*fYGNDpM6fG|GRw>*W4Gge5y%37{Q!N/y(|NvgoIR#_/&vHe(%GJZGWiWR' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
