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
define( 'DB_NAME', 'eyepax' );

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
define( 'AUTH_KEY',         'U){$v7DD6[$uV(+iESmXYbgQ)?+i18be!4!@q%eX!r}ap,I/B~9Ql!V-j2T=|5^O' );
define( 'SECURE_AUTH_KEY',  '9qyg${qy^<FUq I07zBwl}A+wOFJDC._*-lWUr4#kOB(!V`B6!JFIh.,.?PsQBPj' );
define( 'LOGGED_IN_KEY',    '{kIddc2)#hdL(SjKI,v#_CP;M0lAxSY@^Gz!`,DGUSL(zpWl5`D!o/*ABvz=~M|Y' );
define( 'NONCE_KEY',        'y(bf^dH3[$o<PP3drdZ5+vm6lQWt*GKuLUa2c3(:t7-&I&IMeR9^+xblPyk43GTN' );
define( 'AUTH_SALT',        'wVj|CPS?L4p_FdX>FpzD:fM5SM-cDJ@&ao9<M08H2Y=B0~)R(5NBh_F[!iha$;4z' );
define( 'SECURE_AUTH_SALT', '.[$q2|.lLRzY$~,EG/.<FY[>5hj]RlKGEFQo7mK!n@c@y>CHf7B6hTQGpsGAP#g3' );
define( 'LOGGED_IN_SALT',   'F6Ni^Ez9$Prxj{fZ}n&nD.THXq-/9]-:YKwyf5WG(oCmve+7b6})6#F}R+O^Y2U.' );
define( 'NONCE_SALT',       'H-#DV4/Q5_wt<R)+R0[kP(qaW+7ZYuV~F Q5*EeiI}0:=GAZ5>15G0Q&z/q!<uh4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xeaypewp_';

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
