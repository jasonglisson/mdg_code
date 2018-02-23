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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'default' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L[KOny{#,[J>Mm=D,pXR-Nl.QC@DQ].DA.O:%aW?9&bl#TmKBa@^>:2;OEAdN^V=' );
define( 'SECURE_AUTH_KEY',  '|nIsPu?:7cz(Q<?OPJ)H4uX2Dyh2)!8g.ZRS-Sm0Ic{{]A&7CJKZjTQXwty+@yDr' );
define( 'LOGGED_IN_KEY',    'bf}C3zxX;|!>jq?]3CvYB#(#!!WBvX,YjXauwcO_c/9EFTyOG9*;D!^Eor#i!ZFo' );
define( 'NONCE_KEY',        '!~w^o]b3f;kd|80;CxgsBb>v3}HZJxa`)`vFFuk5pwlCu`H75@cBI;B51^cp%kn_' );
define( 'AUTH_SALT',        '&qB&}_pU<Y%sCn#vE1jOhYx,m{-}W#QJ:3&c&`kJHRaZ$p =FR>pZ|0t`a[!8YpS' );
define( 'SECURE_AUTH_SALT', 't`NfZUcoEt16v?dF9z:FSRI%oA18f/l2<;:YYrBFMP[Cv)3jY.;+kv?*$p>69w[d' );
define( 'LOGGED_IN_SALT',   '4rXugy1LH(AmDyN((oganK28^!@$Xa3rG|`hR&jAsHUGpZ22ou?JP|bh:UJ;w`nE' );
define( 'NONCE_SALT',       'Z59Plgx?9-PB3U;{RC[30phA^=7+0 ,-0q;*,G@iA,:6Zn}9J&;nKe3nxTG0;[(c' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
