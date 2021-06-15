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
define( 'DB_NAME', 'wordpress_test_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Cb]2Pnp(lqd>u?4%^[zhBs|-Ttk<Z:Mtie_X;7J7mRYfy,N@cv)Gw8s&?Kc,~`Uo' );
define( 'SECURE_AUTH_KEY',  'A2+#7/Z|UmKse~6//}<aYpy|76-_g0Uou{ma4V,k%}:kPCuG~ot>gDFDQi(?<Rpe' );
define( 'LOGGED_IN_KEY',    '=pO_5!X{0nB{f.H -emo#r:FR y*b2Ixji&Ga;k|[EDA#U$iE/w6W7lw!MS>v`C0' );
define( 'NONCE_KEY',        '$(ki]{(RQ}JXa{3><}LQJH*jl]/oFiO_/wgyF]k#{U58T:}W!MYM9s:4l!YNDob9' );
define( 'AUTH_SALT',        'Malc,clMGbx=NQIgeF.~S5($1PU?0NRDh;q_&,p!)jY.,@U!+==uSer~fKip-?jN' );
define( 'SECURE_AUTH_SALT', 'aZ_uu>SK69Y{3hN7[R&:}}oNN;9~DU=Gf8^jThIiXT:RVC {kHA|tb;58Pb+S`q8' );
define( 'LOGGED_IN_SALT',   '~z]X9;VPt57=v$}6Iy.r>8vp?:Hfo7_,y*WS4ap*=%;`&OHb~k1P/iVtc~m$wZbw' );
define( 'NONCE_SALT',       'j%1Gi j[HhY-eim9.t9zhB)f)x& :LK4=2tk*WNV.H##x7%[ne ;Kg}>q{ WukB2' );

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
