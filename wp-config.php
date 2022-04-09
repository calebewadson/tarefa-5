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
define( 'DB_NAME', 'equilibrium' );

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
define( 'AUTH_KEY',         'Bl(;|a|id([PAOYi-Bv;&?ucU-9FS<-xzDg{_M!gblOQ_BZ&;!gR9v9-$_J%q(]d' );
define( 'SECURE_AUTH_KEY',  'b:`&5UJ}p4*~Bxn*q:5T96Y1nbz}VzFN^4lsi_x@lmnp~RGLLnqy^&YhE=<IbrUR' );
define( 'LOGGED_IN_KEY',    'bjt/$@^ZNip!qkK|yw(m9`)U%:p^UY_6<vhf($QpIw2JZU+E!S6O,^mD4|YOe49#' );
define( 'NONCE_KEY',        'hNQRrpcgeKdV1K-8kj8f<-3#fbbl P8rKSFAW,>Y{NOj=?~+$z6.~S:RI:Ye;-mD' );
define( 'AUTH_SALT',        '{(wsl3o-ojD*R%BQ`qo[DVJ`*$Z{ +PnU[%:zR<Nm~U&mmiD[A04eKD !sFEmKsU' );
define( 'SECURE_AUTH_SALT', '(d>5/`&`!u@Q9xu../f1B]DyF&&oXg{2i89`WT:i~]WcTEQ!I_qkwyfRn|P~vXXu' );
define( 'LOGGED_IN_SALT',   ':O-)1*R[c=ff2 0y~J^$kG!rOFI*T]* ZcEMH:E>Z^THWDi87^1:?mAemQFY4Jp0' );
define( 'NONCE_SALT',       '-JM:L_5?FW7KJ)S./r~W*6%:tjWg7N`rF1fV>veHBT;F_9ptVy)+JfF,>3j0_HR$' );

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
