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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'panggo_cms' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Qwerty123' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '4eQn[d4(0u&omox1fL1`q6MJ+69|gTfk-&P!739rW0)/I0y..v?,},9y|]J4IPlt' );
define( 'SECURE_AUTH_KEY',   'XtOei4oXChevN=fyB0OO}~^SdmS~RZtMiscBP?=k$V2kK3Al:tswNHc;0c1hNk.Q' );
define( 'LOGGED_IN_KEY',     '4@tlBh#uS_VWaqsCJh0On)()3m/0r>6cYP1v6d%o6G;[JCd&IeAW=Sai^kr.sB[C' );
define( 'NONCE_KEY',         'geg/oM|!j*(h8tBnuOLrm`A45(]R4Dt5X$l$y|iENf`1DJ;NIuV`x~/iNRmortdl' );
define( 'AUTH_SALT',         '96F+bz?%A~rd6{d@Q`4EP}|tyQvr%/~SO+V~#m_ 2!0oe>D#nydX_74>4=U5( &?' );
define( 'SECURE_AUTH_SALT',  'V[zetEgwc*=HXc_R:{z8RDweutgd_cJD>P,:n-]5vUBe yh5&=;(!xi 4! An%v[' );
define( 'LOGGED_IN_SALT',    'B!7sS/k^xDr`]UfoS/mg5;5iR7{S8Y$m?g7HQbV3.9G RpIjcWFbQNo3NScjkrAx' );
define( 'NONCE_SALT',        'D<5U?/pQ?i-CTH;N&^MJ%ZU5g-`bqh|IvX3QaDH#^^x&=J)xFh /{J[A=X;@NUc<' );
define( 'WP_CACHE_KEY_SALT', '^w@2V,UYp:>4`S8tzqQ<=%+M|.x F]sjFJ5iZy0B>p?|:953BXX)O5`HiTefd4DL' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
