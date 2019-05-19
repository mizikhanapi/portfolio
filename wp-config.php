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
define( 'DB_NAME', 'mizikhanapi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Pna508#@!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'op3eUu?Do*ME_9P*_&CH7B@h[_uZTamzl1@&0^-:<^SO=XW|=0!Fu5v]U<]f-2J2' );
define( 'SECURE_AUTH_KEY',  '%w7C: 7Fg*>h(BCkuchUg.GY Weq+&aN),k;thIa#ZMFHlN+U;1l#VQyz@D1]ha0' );
define( 'LOGGED_IN_KEY',    '[%87RKHfpuU-l0]v`E%g0qW8Wvij,6/I0bB-dYRT|1jf 6;57%D~pjwV^AD00q)@' );
define( 'NONCE_KEY',        '6 {cH+Op[I@A2:qaj,d;$B+A|hm`bMeaxrU)<LD Mg+[/RUfQ}ck|!3l]k5A9Ga(' );
define( 'AUTH_SALT',        'bfRZ:QI*Cds|9$ $>&MKITyvr2Ed`s?^M:K8+1!b1NmmMWL*]Nk#2fiP}Bs}X=Wi' );
define( 'SECURE_AUTH_SALT', '}5&|nPF,@rCw!KTM8t=rmF}iTAl{<zy:ecX`GLpTB_gsQ2999VRU08^;Rz9d$I`4' );
define( 'LOGGED_IN_SALT',   ' e^bl/gYHFPar|WqUe}}Vr$45C4p~-?1d1=UC.716Ma?)c^gCG)dbSW%C*{_b[n|' );
define( 'NONCE_SALT',       '6.hQ*<nFG*b[(c%gImBbMaQHR2:29}oyNky-0q?p1J/#7STxHv>@8s=#kn& G,Vp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mk_';

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
