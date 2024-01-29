<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
if ( file_exists( dirname( __FILE__ ) . '/gd-config.php' ) ) {
	require_once( dirname( __FILE__ ) . '/gd-config.php' );
	define( 'FS_METHOD', 'direct' );
	define( 'FS_CHMOD_DIR', ( 0705 & ~ umask() ) );
	define( 'FS_CHMOD_FILE', ( 0604 & ~ umask() ) );
}

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

@@define( 'DB_NAME', "n1x945071074324" );


/** MySQL database username */

@@define( 'DB_USER', "n1x945071074324" );


/** MySQL database password */

@@define( 'DB_PASSWORD', "dFA-dA=+G4" );


/** MySQL hostname */

@@define( 'DB_HOST', "n1x945071074324.db.45071074.3b4.hostedresource.net:3311" );


/** Database Charset to use in creating database tables. */

@@define( 'DB_CHARSET', 'utf8' );


/** The Database Collate type. Don't change this if in doubt. */

@@define( 'DB_COLLATE', '' );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         'lIdbkXbwOUFSJc8udFWvutxqH72L2Ij53HiTimXg0XDGW1CIuI0pm4hCpJhEzbhO');

define('SECURE_AUTH_KEY',  'olLw3YrbwrdYqKwbfnFFD8kUYz4kuspLaqnqI1Kvzgu5rtOH6Vlu8cbxn8ciBcpF');

define('LOGGED_IN_KEY',    'znk4gJOXwWsA5a9QiYDk0g0YIt0rgeBkB9D7JRwskALf5EBudke8UFgrTEdC2u46');

define('NONCE_KEY',        'j05ijKgTGmDlI1WvEw1LYP5if2kUoGLDKy4kJLUov9eEbv1mkYL2tT20oVJr2Ine');

define('AUTH_SALT',        'elROGe4u639bFcMdKvnLaGOrljj3P3E3eDncCfbIsfecVPb9CZc4IvvTNG3O2jTF');

define('SECURE_AUTH_SALT', 'lmKQZLlMZA2IqJMkr8Fu8QnsJPdUV3PdtRuEPMiEOzHNxQ44UH6ZednBdYFuG6sn');

define('LOGGED_IN_SALT',   'oKch4pI7sIkILyM7XVutz802uVriuI3ccvSQz1kPa7z6YegtnLR3jcocOqKw3qn5');

define('NONCE_SALT',       'E7od2h2C47fISp7wRxwY1mBtfH3EMbGJQwNlU79VimzZkQsOfFfnFoEIar9bTBd8');


/**

 * Other customizations.

 */




define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**

 * Turn off automatic updates since these are managed externally by Installatron.

 * If you remove this define() to re-enable WordPress's automatic background updating

 * then it's advised to disable auto-updating in Installatron.

 */

define('AUTOMATIC_UPDATER_DISABLED', true);



/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = "wp_0qf0xv4xrq_";


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

