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
define( 'DB_NAME', 'zapatos' );

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
define( 'AUTH_KEY',         '7drmOwn.@p7|Hy.)M$bL#JDkf7$,UCG?X>yc^|0v&#:31Bkd*`BY!*TF2nsT<r/p' );
define( 'SECURE_AUTH_KEY',  'cvbc~?oK$Nec>L5X!4FoA0xGiM)eU&YOnxwjl;l[-Z%l`T.p##DDl@O|0C_Z-`EJ' );
define( 'LOGGED_IN_KEY',    'K+-_S2Z@L@7KnCic%^7BV3IKX]|HS7l.aI/`c2]No}YE>JnRPBdf~yv0;Nl){JgY' );
define( 'NONCE_KEY',        '29i0t_)R_h7CGoW&H~vCN+/tb9f-FfNq9pS^U~P(Tv~]Js_ZOx.(leWylppM3&u9' );
define( 'AUTH_SALT',        'LjalW?/J{1wi^z(tBP&?}AhS4]>[9GVR-ffnv&`KfRF(OfpI5o[~NH@CW`FQ7^#V' );
define( 'SECURE_AUTH_SALT', 'eP%gy4qXt9HjhH=!uQG$%gA^{_~i4=[h`T>69_:BSOFee1h$><0O[#6kr[69S]:G' );
define( 'LOGGED_IN_SALT',   'IyL!jxp)GerjwnU7fg1MXKm?+Awb}XnH-YTxy7sc 0!WwLV[s|cVOtML(MB*EDhN' );
define( 'NONCE_SALT',       'Z Nx]mXEzq{{A!x%Dm+o6^oxpiY$$W=rvK&0_TG%?+J]pEc)jpoGeeS]N:?aRemn' );

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
