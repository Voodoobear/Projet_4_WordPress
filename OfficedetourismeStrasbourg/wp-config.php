<?php

define('FS_METHOD', 'direct');

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
define( 'DB_NAME', 'db739480171' );

/** MySQL database username */
define( 'DB_USER', 'dbo739480171' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kovbknuCmkABkgCDrTje' );

/** MySQL hostname */
define( 'DB_HOST', 'db739480171.db.1and1.com' );

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
define('AUTH_KEY',         '=X-gkEgvNBgy,8.XuHGNcjsQVlO;n*;hWtuPiOadQCeo9V9mh ;D43(c=rd(_7pW');
define('SECURE_AUTH_KEY',  '(c6I34V,KXu8k-E>Ijir1.+OtQr<V+{ StCf9B~}-%T-&%I+#[oL#$S$mM+9AA4q');
define('LOGGED_IN_KEY',    'Q3Fc3TCMSJEF|B|78@19}=.B0hzjAZKZP.CydIJZn:TlKL1-Y/-|B_KZuEvhQ@9{');
define('NONCE_KEY',        '[i<,+M{B4-0uz(S5>.2#0!rP^-3pBV0P.gVf|j6nfSr&(~xxT(H<,db793GLM}E>');
define('AUTH_SALT',        '8-oD2wju]|;ZRRwqqO[CiLiBnPCE/JDY[}P})b+^1r-]Kf^M+nC.db&QFHK&N3&p');
define('SECURE_AUTH_SALT', 'ME|7!ae;t-1 ,G({#@#WPu?pU]pu)$:t).~%C8I#;iWZu!DPYz]=lT#9|^I=goAW');
define('LOGGED_IN_SALT',   '>DM[eYDrMxhb||ML-QrTf|I9Sp*xs[T[&!cs5 361+BY|Bo_`2ehZhVmnGxNuOil');
define('NONCE_SALT',       'WS52dw/k^}p||-2v3l3M2S%Zor-v]iHD}|2N;=EI sMk_u _J.&DsE1!GCRs^JCF');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'TFdgyGap';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
