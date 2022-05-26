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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brian-wp-db' );

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
define( 'AUTH_KEY',         '}s0/bgv5Ca>C5HY?ijF(QaAyy(A[hLS@GAlPwU7lyNvXvQf>GiDuN6YvlgBTK2-Q' );
define( 'SECURE_AUTH_KEY',  'p^ZMn%^I%>;gUq37M,@/0)0|; GYp}I(O03[2K+_?s.B2^pXJ}Rx3#F=)GX`=_TJ' );
define( 'LOGGED_IN_KEY',    '1Qn-Z*<UbY&IdL+r>ZZ;7?a[Dd^t<`${ydk%Nf 06^IbCqhO3s|fbS,$~D[+[[:9' );
define( 'NONCE_KEY',        'V~t8(kwuYr7hfsS6J*4_@LER@s;iRS+Ts2o,=;| y~-8@5z6m-rUbxM$}.f_4j.=' );
define( 'AUTH_SALT',        '0dgp@^8A][zQO2#)p1y(n-Cv;ci%|~v++:qz,K+iD)mD)jEk ZDNY0M>me5iuVHU' );
define( 'SECURE_AUTH_SALT', '${9HCsE]BaCVx+gR/O~!b7@;Fhp9!(wOS~CVJU%G2V2:whvb{<k!CRu[ML]9N>=h' );
define( 'LOGGED_IN_SALT',   '25BWC.WR;`19TLOh)&wnAi8GbF{; LL#h6Ay ]3?mGvLBB[QIsm;|mHd>imyO-Tb' );
define( 'NONCE_SALT',       'fRw}i!W9sISZ^X^;|Hn)D.Qp.-^^pYk?g5RwQ+i<W=_Hp5YNfVi%0$7s-Fo96y$5' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
