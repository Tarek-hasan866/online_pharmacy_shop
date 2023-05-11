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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site2' );

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
define( 'AUTH_KEY',         'aaO;2=-PTV:v V{WVW,bO]fnKlW(khA4W/d?eG_V#m0WF,[Mi[SIGg|V?P%!W:)Y' );
define( 'SECURE_AUTH_KEY',  'eB)(`h2BmHJ}P%,Teqz2fw 1sx~Vue9(hlFTh-1jPTafV^ +)`^4<nn* ]cKU-:=' );
define( 'LOGGED_IN_KEY',    'Def}~DN0rXMVm=lR>EG1u755b^^hOY4BlHt<khF&-|}DF4#Va$~Fk6gg(d=L#l4Q' );
define( 'NONCE_KEY',        'Mv~sA[k( mby! =l@ff&tQ%bNCYs)I:DF_1oEVcotav*8hj)ZsX#T,!Pji#vzy[z' );
define( 'AUTH_SALT',        'iggErOf&wt+x=Q`w 8yr1pz7U.3*I~D:zO)|,G9LV/Buxfo?RWbIZ75wO[~cG=:|' );
define( 'SECURE_AUTH_SALT', ';zfl9W[adm%&%y_#g`hCFjB1R5aC(5bjc{&daGV[bD$2vKC*?8Ikxyg$pJqtflhK' );
define( 'LOGGED_IN_SALT',   'nbeqhzskP(`(N6 z}7Vtgwo{;?BobF*45%a%r^)m0=4UsX6%2e|a& b${[7Fvfxa' );
define( 'NONCE_SALT',       '2,XD~Pd}gpwSCh*uFP<H>Mu@CkRd7U*3[%@cnR_mmi`np3kL0#J6~DW6-9O8r-|W' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
