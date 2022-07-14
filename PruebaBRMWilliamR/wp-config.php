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
define( 'DB_NAME', 'pruebabrmwilliamr' );

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
define( 'AUTH_KEY',         'D.]=coxz@6g98&4{w$)t{X}LY1DA42JQv@b#zH=e&)jg76$9VD?0PmUSnqh.la6:' );
define( 'SECURE_AUTH_KEY',  'RS$U;:6~&3ZOx^Z,ZxFfC=nO^#*7|oxtXcGF!a_{oH)D;rW:q|m$u Q<8=OR`2!]' );
define( 'LOGGED_IN_KEY',    'o-j(oX$xMT@IdjU,b@Q2 cTuH:=}eSF$h{B3GR,bW-;%}7k14XktXvQZ?& *kKv3' );
define( 'NONCE_KEY',        ';#f}VAEcSQ6LnXL:H!3=LP0G`AqonV|Qp,C(S>O:PgQk?7AeBi(Z8|NNCV^#eUID' );
define( 'AUTH_SALT',        'a-}9@A~N#N3ggis:%i.u?dB5eR#5gyMYLqk##kZkxtcJpGYtr>4Mo@wT@3gWd+47' );
define( 'SECURE_AUTH_SALT', 'I1@A]/rt,%RZLSo0`n~OuG%so9L~GhZgcE]u(8_u9[rmMBAVEJzf&7{AtO7E34pY' );
define( 'LOGGED_IN_SALT',   'b(v)V.HEgs$TX<.iIMpAaK!TvOX#]M3O^$ To;CI,aqkr Patv @c/JCk0cHi.]S' );
define( 'NONCE_SALT',       'V^Ye1jH:I3^A9Zb:&9.8t08p.&IOU`_0ILq1YLI%P61T7M%^%:D.$P(f-JMeF5s*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'con_';

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
