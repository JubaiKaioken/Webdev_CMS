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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'm uGn(&ViC(<tH}Rgq+NiL#[>67]x-L@0yCQO=i.% Kcz#Q!h$x-@#d7:l)cC i^' );
define( 'SECURE_AUTH_KEY',  'Z::FrDm#k+C-+6}Q@KGOmf?jtk}Q /Zy)c&z{=E6e#vPDTQN=Gc|oS(0)/&v#2$F' );
define( 'LOGGED_IN_KEY',    '[R(FL?*hirr:A>9}$/b#e0I7BgKI7z(]eBON7;iF~;/.^C,u}c;3(^0&wc/>u>F@' );
define( 'NONCE_KEY',        '4W<dLZLcLf:*<XbKk|2z33{f/!BhqQD(fyOF;_34_#^0!1ta(}pX0xu*^k:AO<ph' );
define( 'AUTH_SALT',        '2:{AfY%RpIe2glSD&D**u|--J@y%&t) a$]~6.jI<m&l)z=Ik+7a)k WE}V#T,he' );
define( 'SECURE_AUTH_SALT', '[vEt!)`A0.jjdU#iAFcX|9cIsNN>lflPH)}TW2cJl(`DtVyxEyU=Nu`vkoks~$cs' );
define( 'LOGGED_IN_SALT',   'g Oz[ejk[d5+7mLi.xlI$ xkVs=8x}R^6JB+</c-v[o}SC-3G!<jLQ})cJ}49Yez' );
define( 'NONCE_SALT',       'riW<^KI{__=h?Z?!?<^jB)x+#WHdLwnc4oTm@$M1Ln*z[W4l}e;//TqG9O_,$uEm' );

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
