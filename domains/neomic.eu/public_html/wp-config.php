<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u480494644_Nibxz' );

/** Database username */
define( 'DB_USER', 'u480494644_YFi2D' );

/** Database password */
define( 'DB_PASSWORD', 'ULMKYhxgfI' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          '}LT=X?>uL>hrWre`-*(Nb:`ysi!~uK-02$AY0yd%2>t3kJ=<EPCBDMyrbqq)KGW]' );
define( 'SECURE_AUTH_KEY',   'Jy^C)`c<VGT|yXH7(x=eIJEfq*Bk=~r)!R14t^[i7w^wqH@iSHCE;}sbV]]/pLv^' );
define( 'LOGGED_IN_KEY',     '%D7@Jg:&!E0<`>@.6wkG:^NF`K[Pxx!gSb8C87b#A>:?iGU<eXenmOOsW*Xi$uJ-' );
define( 'NONCE_KEY',         'Yn2U7t{`Wx5m/OzI#H9O>} dIebVCk<@k/f0G4`&41:Zlh9I%,(W|q8wqBL`LN(F' );
define( 'AUTH_SALT',         'I@D 7o]2cjE7Cf{TZQ?%rtB/8j -mp6q0(iy^xx+ru*(aY>0*`0vHc,Z+w e^??%' );
define( 'SECURE_AUTH_SALT',  'N[6&]ENW2[K@@TNP#22T{M1U;Zcy24d#nAT^r=:6v67BIC,{}ql]mlUyh{Z+oNEg' );
define( 'LOGGED_IN_SALT',    'q+gJjj@2-yxAUVy!W*BV.[&]-R#a>_R} bA`,XxHPU9}J[KZYG3A.++Ox(O3O[kl' );
define( 'NONCE_SALT',        '4LHSuz<X#h0vXK#0Gu?Q=Fa2iE?D4IZ5_qyVC(I4<b^ZvZP{ 4X[UlPg]yCC3NO=' );
define( 'WP_CACHE_KEY_SALT', 'T2+&Y!ar6H@Zn? Pa:_K]~J-q1r4t4E)AB=)|00b^q7l?uH{&u1|ome+5!eV wOz' );


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
