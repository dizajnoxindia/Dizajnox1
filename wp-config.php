<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dizajnox_db' );

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
define( 'AUTH_KEY',         '];IKm#kJ}Qs[!2r3MuW CZcsFXc,{GX*JB#hH{@.opT@-1-Ae? PQHP7L->-a08N' );
define( 'SECURE_AUTH_KEY',  '/{[zv`WqJ,,d}4DM]x:@kzZ(^rZDRyS8n,v*8|;0krit[<cQh4~[1j6nC}%gh*G^' );
define( 'LOGGED_IN_KEY',    'qtY:k|(=W|_f-xr7F$oOhh$PB$]<+b~F|K[/Gp^7`G%Z0!5&1G,{GolNz&@Q+xjp' );
define( 'NONCE_KEY',        '~[wAEbHYHnyZFlS@2t[DznO8nI06lOO4W`1:v>0eb zNDw{YPGnmKyZXAm3/*,v?' );
define( 'AUTH_SALT',        '<?u]F/7`E>n#*nUR6` 7)O!.K$[{[ohgd]r6j=-x[XwkuY>DjsiL!@i~i,8WG*3:' );
define( 'SECURE_AUTH_SALT', '6w@{Jsx5hYVsvX~W?NxnP3Z=}H8{V8Zq5CNt;=$N&5h~t,YdyWEI^fR}g}h?X*P!' );
define( 'LOGGED_IN_SALT',   '%EX;g%<~k-$NrNl5*1[^r1n|-`FSa|W{&Z1cB-72._xcqEc=5S;OG; {@b+EX;b3' );
define( 'NONCE_SALT',       'O)R~2JP.X$A])Y$DC8rbmoG|g>t4@-F2!FX2VLm^{|5t?f(?UN}sVU$cA*gpu)1j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
