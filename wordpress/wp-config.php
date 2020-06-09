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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' D5~fE84wG+_Mz@C*4Jig}s<1%Z/L7()Q]>r59/s~!6A[E$3Eb8~cB0E+uDHX`$i' );
define( 'SECURE_AUTH_KEY',  'S%i=j7.|2>aZtY*tO<JvE/_E?`4_q{~nBQ&[=E+)4J]O:bGOegg8M)7vTu_Kg6g.' );
define( 'LOGGED_IN_KEY',    'M]A`rC|?UJ=& #*p-kh+F,g1bR&HPz7P[*MH!@<=Hutil@$6Y4^Me9}{#$_8=Fm9' );
define( 'NONCE_KEY',        '+dQ{~ni(f> +vVJHq`;EP97+pfl[P?~iS,,K0N9oSVWMe&spC4QnIc#4xrAZd Xv' );
define( 'AUTH_SALT',        '#@(54`z5{t4_}?nSW0F%}*+q_vsli[jyySQbG%YUk:]tV+V-/U{Z9Z@IOkW-(GHe' );
define( 'SECURE_AUTH_SALT', '1,^sO1@ryAuJk K.L*5+:(Z6+/2^#W5/?jA_><;y|CKWJs+>5-T%[y:qoh0[ +?D' );
define( 'LOGGED_IN_SALT',   '8%!$4:%sn{ZR>~$HhzZID62s#|!y0u<LLyMoo.$$|w(+Q{Qse8~%iTe:ZoM;?vKs' );
define( 'NONCE_SALT',       ' (I{1wrA,t7(`MK_VZ67 4|?{7;P[^<>vP8r=aznr4+<4WrT;43D![F[+A`Aq!c;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
