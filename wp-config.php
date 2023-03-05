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
define( 'DB_NAME', 'demosite' );

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
define( 'AUTH_KEY',         '%<{Rie{RGxYR5A`A1]oc}98WZ*T|2bwt $.MS$)Z,vD+uO~tDlwRd.qxSk#>rUO ' );
define( 'SECURE_AUTH_KEY',  'gR@R}w29>J+PU-k_t+S(SeS0Fi~x8jaD;0N<o~.0hRxxo+{9v{i2O[x:k2-f:cE-' );
define( 'LOGGED_IN_KEY',    'i]}$wDd)laj+?jABzT@2j/0r;}*&>X:Z]DDuM^Ue]`r0E/bceReT}e|9$?gpy SI' );
define( 'NONCE_KEY',        '=qDjC)]|whf-MOKU#wn~N~&!GBp4.rVXv.O#%3s{?2MJZF%5rU)T1I:<K6KDky]K' );
define( 'AUTH_SALT',        'c=:n=+`d-_7z+5kGo%d{}n< 8$.|HKiC{9e~^q iLl3]RMi]kGe|nY8;px;(UJ9h' );
define( 'SECURE_AUTH_SALT', 'Cq)?Jn&8yJz|ut0%D^|qDi#]IOd_WzH[!xeU|66_X#w4qPcDkaTiH2qq: FvJ|~z' );
define( 'LOGGED_IN_SALT',   'VPF},|-ifXir1/=[T_P$uKY8#J6xdHoTmm=0<1B`2y7vRaVTN/WQ8@Zw|[!W-a8 ' );
define( 'NONCE_SALT',       '_0qP~F>X^+bYHY#VT(`}D|Cb3_L236K?#>Jl>dDEG HY7su*(*2(uv*)6<W0LM)s' );

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
