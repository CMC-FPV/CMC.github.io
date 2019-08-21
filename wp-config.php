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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cmc-web_db' );

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
define( 'AUTH_KEY',         'iBVYosg= r66.(zoa%r!j4z&&<#8iPE&=WZ<9MV4kqDre^&*Dm-zL5$8qfIjRY4E' );
define( 'SECURE_AUTH_KEY',  '$<:Vk#]b:BkZg~x-p.TDc?J@oKLexUNx8O%d`)rb7H@t8MvDcy_=Nl`Yl!hRT/_R' );
define( 'LOGGED_IN_KEY',    '1G0U6|g9p4twTw 2PIi|3V#je#oY(Poc+-@}!PM7x,-JPQqTIeYu?HLNt%K|j0Z,' );
define( 'NONCE_KEY',        '55QfTD}Ez[Jlrsd?%Xw?)MOXaM+}e>v`:*HGW]R1L3kD|;bGtgXB1B05p{W_Vzia' );
define( 'AUTH_SALT',        'n!{8eR>d< F~7c[7RkX3v(eS~ RN?ed-FMBXsdh@wN?z]@Hs%63irbilW*coO2q+' );
define( 'SECURE_AUTH_SALT', '7)w<xMFYxX]RTnC{tl27N- #RswmTyb-F3DZhtDoy.Q%ph!H+V|mM17Bmh))*RJs' );
define( 'LOGGED_IN_SALT',   'x,t537!4TX<7Lc[4Vvz^:L9M1FeHk/U#?$ irCD(gir!I|:Us2A SOvoD/XmE]6y' );
define( 'NONCE_SALT',       'M&B=TS2}6dL!UF--y=c*D@st]U:HRc*R^#_j9S]ll51FefEk22ci7?/F7x5Hi1EZ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
