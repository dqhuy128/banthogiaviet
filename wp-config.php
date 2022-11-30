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
define( 'DB_NAME', 'banthogiaviet' );

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
define( 'AUTH_KEY',         'RwK1#!%?8}b8o/:fkJz{Ow_WLF!^.*9O<@qo}+nY2:^%/Z;q7b/+=O/m`>G)<h.L' );
define( 'SECURE_AUTH_KEY',  'AD  G(p*l/M9JwXye=L_H=xcTjfC6Mxw|:)-o5-Q `#(V8mZ-bwY! ])lzBmk*d=' );
define( 'LOGGED_IN_KEY',    '+pg`O<}ORH}%;svp44/lfn+LbMf-_BxT][Y?@YwH@(!cj!Yf}RVS,YG+|ZLk A))' );
define( 'NONCE_KEY',        '(Kjp,0/11|P/Z c|eMF[:&yrgQ;ZPZc5Q$S*|YXh,r_E1#bA|qI?Zl7hFeUZeOo%' );
define( 'AUTH_SALT',        '|z=Nqp^4h5+p]ik#v$~i5YT%`$;+Ol}83LJnAhd&NeQU9g3kbRk5pbc%Q%?FER:d' );
define( 'SECURE_AUTH_SALT', 'b7MY5!VYQm5xCKBLN^9hJXC45Pu^G@NzfJXDEtxtC^ctEcX21gJ5T9Ho&%A)QG|H' );
define( 'LOGGED_IN_SALT',   ' uHO)8cHe,9}o%;a3/y}4xPuk?-F8Xu#%DpW,{}/*_GDCP@y`#q]Y$~zP3,:GH(G' );
define( 'NONCE_SALT',       '{y~,F/|@z-2U+S+lx.6&v=X/:/i.i4c&^kyx6cdYzND=Kjt @U)-PUTjO~%s%;>0' );

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
