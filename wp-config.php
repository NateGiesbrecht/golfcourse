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
define( 'DB_NAME', 'golfcourse_db' );

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
define( 'AUTH_KEY',         '9kwX8vH]E^<@hQ9)e<&?nMoT~$bP`4LN}$h+Sx>h0m%ytru+Gq.-pA%cGYcz1)jr' );
define( 'SECURE_AUTH_KEY',  '#^wx=egn_:b8A*gd{Zsuh5zyb.y.KQ(T2H~^V/)M?nON=Uf_s2_4=Lante0i]B12' );
define( 'LOGGED_IN_KEY',    ',>a0_u_B}sK`L)B5n>w9|CDWCAsu1%=#FR_yKixr.;9$_,jlLM#i4#o&fC4fk9Eg' );
define( 'NONCE_KEY',        'QK@URiQsW Sa^nD27*p5IC/iJr[K/Y<2eR&J23oP7366QhJ_rPUn5I7lfdH$Z]TY' );
define( 'AUTH_SALT',        'YZ5fni8[gsR?U^_ p|];Hg&hMn)<7H=Y!q&@5RZe%ygkkqU0f~`+4|-MD.pIXk[~' );
define( 'SECURE_AUTH_SALT', 'cl=TG#kK?dfLL=O|Pmm7LtSpMg~>*&y1X;9+s[%tJ+J72i=A}=Y8G&L,=0~ ?9cF' );
define( 'LOGGED_IN_SALT',   'XMcxp@/0x$cATZa}uCef-g>EfT]R)37>7gqaUJ5Ny@[3Ay/R=Ur}#5c+pk.@O`-d' );
define( 'NONCE_SALT',       '4wEb9wvwR3z%=fd7%$k=rpR/+sa@g4OgMOLZI>1m4eM-RaQSs2e(|!:S)CMNirwu' );

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
