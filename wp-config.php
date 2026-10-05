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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );
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
define( 'AUTH_KEY',         '-t}q[CF?x5djth<)Xv:o-9d%p1Pl3t8ftZ1aUh>ft)tOZZ>9*r<`0: mZ3{kT+x6' );
define( 'SECURE_AUTH_KEY',  'A^Nfi6{VkdXC]Kn7/JPlX@}i?-.Jh .5^KgLhtdu}k|Xh G7V/sJJQyX>cq7:m-l' );
define( 'LOGGED_IN_KEY',    '&?=C2Tk-/n5k#(fz)NtMiCg _l3A&&d:UW[fR2txUd> PUfzpbXMZV-5Y$a!J>[|' );
define( 'NONCE_KEY',        '&`?ZzF4W%Xed8[Z2WelR W%jXk6C/Qq*PkceF[{|k5im4Itx~q-X>,>~ ZQa37s@' );
define( 'AUTH_SALT',        '`z.qTxGhbti]`/0$CpugaX4u[0Ky~OmsXKWdJe3G!7T{d%~P:za;,Y@di=W?7_ED' );
define( 'SECURE_AUTH_SALT', 'Rl..Ny;|)N3~*+.sKG#veX_k%RslW6gfi0_[*!NElK3O*v9jCl`D&D`T~^lVWX*,' );
define( 'LOGGED_IN_SALT',   '1je#s&)/4dD@.>;]z63+Gw]D7<L&Rd5^,FuGghS$B7s/?o5bN;z4Y]7O,Hd82L}M' );
define( 'NONCE_SALT',       '^+9?po9rGT={Jn;Vg+Qsqica[[tw)6u7eK&4$){pW(_UpeSl95U3x!t9H<oK2a2;' );

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
