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
define( 'DB_NAME', 'pokechampions_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'U}!DXz)nUI)b2&EN.`6pO7~Dtd>2i7te}~AT{`0qH~kNh1/`Hg8v[1)!ncqoo8|K' );
define( 'SECURE_AUTH_KEY',  'zgmUTC}/KP?;F}ym-b$Xf+ijK&hTzzUcL4OT[KD)KwUU|s6?2x/`q&t^}>iB4@bh' );
define( 'LOGGED_IN_KEY',    'UzurBme0dA|j%tXZP`-^&V>P1?=>x~Q!.;=L7CVLBh?kB1^QAZ@T42Ix^z&gn5@z' );
define( 'NONCE_KEY',        'vcLw)BuC&C)w9PRZGvk;}xtfRu`@=a)o,r)vkyT 7<  A3:~Yx>6W+U ]r7bKB_K' );
define( 'AUTH_SALT',        'oTY:pSE>LU2N{=;u2M4W;#USbi7clK5TL/&`[uM0S%0n6aIzhp5YQ0FMOeC|BKs|' );
define( 'SECURE_AUTH_SALT', 'Y=tE|yzBxZ]:q)vNhG)ml&oLM7gzU_JspJ8n|Q 7-1KW/==zrHHzayNXmxRzG,Ye' );
define( 'LOGGED_IN_SALT',   '5Y tM#iW1.bm?7Dm~OIp@k~GBxCqZ7d9C5I-g;foCHz-9,(?TImUq< aGY%(/H6E' );
define( 'NONCE_SALT',       'Ru};!Zjvqv.~5G#,GB-x]c$h(y?cq]./2<z3J=K8Z~hUA*Z2;QRI-[gDcFU6G3at' );

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
