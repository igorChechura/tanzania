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
define( 'DB_NAME', 'tanzania' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'N*{Qhr`GENg}.od-d{Rd!4|q}wQ/1jh!u3~-b.8 )xB1]R3>Ty;B05yr3~WUylkv' );
define( 'SECURE_AUTH_KEY',  'S=)[@|3T,=q[e{%L{6UJ$-{~8ADM9C3H$_3/Yi0&Q:wg!7Y?L46}I0g3[ N,n&X ' );
define( 'LOGGED_IN_KEY',    '?<!*vdUq8}eFTyal7kMrPpG`fu8kRtU4~UHJao60`m^V0^F)RW]|]iT=(wEe+fUL' );
define( 'NONCE_KEY',        '3>?CO~@i$.4@Yrd0f~}~<b/O|/c4BiF}gh52(m5YheUIF8Yz~(h kIsY6bM&7aV7' );
define( 'AUTH_SALT',        '7^j &=J9%VW%utYeCfw:Gu5oO77wH#|yw(.R+:YG]:wFLiy8d:jCe53jS6 h8hh.' );
define( 'SECURE_AUTH_SALT', '8af%}~9Cc)L&K!3{FY%e6%O$Dd%HBmC.6NRbP^,9REp2>4b,cj+b@=*E8Wu#~}@x' );
define( 'LOGGED_IN_SALT',   'n&$?GI&y91$L56 WuEMCXnX64B8b%).7p^I}Q,,~F~gLQV!MO#=~#zgHH~Ix/NAJ' );
define( 'NONCE_SALT',       '#<RN{<&`DNFP6b`TXW5CN|MPc.>=8mAs Vo=SWj6BG|C^**Q^ks8Qm7l|}f3Z=97' );

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
