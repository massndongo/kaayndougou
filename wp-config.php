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
define( 'DB_NAME', 'kaayndougou' );

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
define( 'AUTH_KEY',         '0hP`@p=,>5vK=M]u|t{@FM?^vECN[x,.x[KOih.@L1 cwsRW<A[f6I--icE6.1iT' );
define( 'SECURE_AUTH_KEY',  ']oc$.LlF{Nhe$?<RAmtv?}oBd~$}@2<+d`&(<=*}ge;}c_OE3_XD;09BWirgvD%T' );
define( 'LOGGED_IN_KEY',    'Mk>`h+*Y]ZJk?5B 0I;fR?F|&T%w~F<1al)w1E)9}|e2a&Yo8ur/DGV)X| B61*U' );
define( 'NONCE_KEY',        'aH1r_zl^F=CpQsIa:OE?<mkp0Kw%-&L8+bdnEh-eEdQ=C3E%d7Hm}bL9s,ga2zWN' );
define( 'AUTH_SALT',        ')P=xeXFSnY*]GpQSb)&q>4QSX:#$=hoE[f-jUno0)KFj2QyT:f78S >63dt3kTWW' );
define( 'SECURE_AUTH_SALT', 'TJ(IUNmYbOJ:{,-<$zn,yba!g]d%HG3)8X SQ0|FaplLPQ6Y<v=,diK$s>q;[X6w' );
define( 'LOGGED_IN_SALT',   ':LE(86F3)@Uzi*bN6r@ZIP*hR1)p0{P}a5C>>I~YS87@n+%o6~oZ_x7m;|%{6?GT' );
define( 'NONCE_SALT',       '!Euq 73&am^_rC]+1cn?Pvq!tzb@{zRi{<D2F|zo^NSk18F/eQqK_x1i$Ey%fk#2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kn_';

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
