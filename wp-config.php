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
define( 'DB_NAME', 'Krishinepal_db' );

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
define( 'AUTH_KEY',         '7D_G1P{ZM6kOcc YnmlsJK8s;Y9Hg&dtM_U:V?9-(Bm_zKqHzm$FEn=MRPaq0_Wk' );
define( 'SECURE_AUTH_KEY',  'FSQwrGQ&-NVBR&MzCcEx(Wz*n!KCD4LMZi/>9%bNCAJNiWVA%Es25oDhUJU=i}8>' );
define( 'LOGGED_IN_KEY',    'KM=4cDwd^6m+gtt-Yem0MoqC%:uZa P]D3bENjzAdPGj.ineN~-y#}1vqjyl@%8b' );
define( 'NONCE_KEY',        'x|=iS.(mU4G,VaJUY-H9!cai63J #6E$[8~;xLzg`1Lj_Otvf&FqeT4$F#hIbL-j' );
define( 'AUTH_SALT',        'gpX)hY7s5#F/G%/O?kXS{:ZyK<UtI.[w?f)IhJhLi?IDANkq*MbyB@0MW}XqofxI' );
define( 'SECURE_AUTH_SALT', 'eUQ|+;DkMwa2Wxqqlq1~j8XS6i_0oC)dlK)J_lSVEbJqaj4&SQMI4AtE<Y;_U`j7' );
define( 'LOGGED_IN_SALT',   'eCujLUJBhR*YC7:hHs$HRdM^iIi)WsC}[;Fa;mH9?}C-cc^WoNZ,,p,Z[%R%T3*a' );
define( 'NONCE_SALT',       '&dHCJ&Fb^M5i:HKjmsmy1IB6J${zI74@+F.mpuq3{p/#=:#(gI4biJjhTl~4o)7A' );

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
