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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

/*So FTP authentication is not requested as localhost*/
define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressWebsite' );

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
define( 'AUTH_KEY',         '@k@D^ZQzf*-/h]^gKx^exobQjmed}acc<QwaL3:}[*cn8=eJmGc_&rA-S4&c}LVT' );
define( 'SECURE_AUTH_KEY',  '$qa2S`lpr1xX$vhO39e%kKKl`/lv@T~/~#}6ZkVBY`4Zk!q+%nTvy>tF#7SN`qj3' );
define( 'LOGGED_IN_KEY',    '!l#yMD(#HSbw=iU=8iL>EHuo98<$ff-zx:%d-4S,,rIZ<^ySm#7n*8cE1YJX$~p*' );
define( 'NONCE_KEY',        '#nhS;8Cwvv3XJonOJ[xqy.}2BRPl|=@bVU:SY_|)4_x}}W:MaIR)Q{:ybNpv0~&a' );
define( 'AUTH_SALT',        '<7n/I@d(8?EFGUoo=VE8ikdK]i)&M^ Kz7Go*V5P;`m3h_&OB^!?I}4&7Nuk2Wne' );
define( 'SECURE_AUTH_SALT', '$.ZZ9Hj,lb:lDa]:UMb,:!IA0D^oCWFs=x#y0cNlX>h_`K:}Y.kk U7(QKx6ug_t' );
define( 'LOGGED_IN_SALT',   'yxT|VbpA(Y@)-E-kM%<H{F,KXF.s6]W#i-o|IN}|}Ms!0fRvF8jt(bh^`1Lo_kON' );
define( 'NONCE_SALT',       '7%8A2v UA?/pjJCVQ84obp_4Yduu1?m7RPRs+7/j,5j/Ml%r:@8k0$^`HCEGzk)A' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
