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
define( 'DB_NAME', 'proyect' );

/** Database username */
define( 'DB_USER', 'proyect' );

/** Database password */
define( 'DB_PASSWORD', 'melooseda' );

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
define( 'AUTH_KEY',         '-25Zudvm2a_olrw10j]Yn7]SsH`tUr7<4x_$Rv_6|IX4C)1o!qw`2B3ZgE%#he5l' );
define( 'SECURE_AUTH_KEY',  '9yYj2X#pK<f6X@SRZ0R8z?{.}L{@z#F3u|w=TmbW~,LV.g!e.Z25irpk{ruqQ:{+' );
define( 'LOGGED_IN_KEY',    'Z7m?y|t@$2s$ _{Tz mg9VoNd, ,&QmbSB>-BvBEx8xd+$j_b-hHT<MAb(ndU1Oi' );
define( 'NONCE_KEY',        'HXQ=j#cM;=:hT;Yu^@&RQkOmJ$NV0M%2]C]wa[0`N=#Df[&d;?P`7C>3J(&M)d*y' );
define( 'AUTH_SALT',        'a)!Fv~8!}Hitq%^&/`{Ws;ye9G!<OvP*c(jo1HNCdkPH$QukyTY/Cj[_tuNtC|Yi' );
define( 'SECURE_AUTH_SALT', '0-Ac7F5Q|2.Vje3mi)+1n#VDf#O!$U#PqAE&jzv2E9bW/3}[/Kozjpkr4 1[E:dj' );
define( 'LOGGED_IN_SALT',   '{ _jF~,bmD5WI;LD~1^~C{o56st)wo?in:33tt5r}Zl*kB=XcD4WOU];1NeKqCQZ' );
define( 'NONCE_SALT',       'czQeyI]WqkGg6y,G*/IaqC^WsnOyQm~]nY#[3qCBcOQ_{G`TM@LjYOJ-w-CZAd~8' );

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
