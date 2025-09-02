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
define( 'DB_NAME', 'u716423947_MbQRa' );

/** Database username */
define( 'DB_USER', 'u716423947_HoRcJ' );

/** Database password */
define( 'DB_PASSWORD', 'Daz5b0NtYF' );

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
define( 'AUTH_KEY',          'tiKVSK|G-EeG.y44AX|x^j:G}~,/VXbz,,5:umd&=x>eU@:>t%4K5p* K&b<UYN^' );
define( 'SECURE_AUTH_KEY',   'YY49|+3v?w)N37LWGdf$TkU%4,Y, @m^-{m&Q.5LH1b<{q.FU^qc>A}gbu25H4K*' );
define( 'LOGGED_IN_KEY',     'Yi6ceHn^R6Zd1BLDY}@dFhHe-T8T1t+UkV!0#Xh@Hl2tY1{/ZzET&Qib7&6)$kP<' );
define( 'NONCE_KEY',         '3s@+UvGW&XJqsUp?hJjaY%~A977J+%jSW*5)H2OVo[Me<vErZ,x*J7!nl,S~cC93' );
define( 'AUTH_SALT',         '(o%LsPd?oXfs){= f:m_t8U%-80T=pwqZS?hk4`9)rw[2}IPrk6~&V_T*G=q|UoP' );
define( 'SECURE_AUTH_SALT',  'hW56cHIr&uH = %^D.m4@c<~d4H!Z5x#!@S6mC4)N{?3pQz}b)P/o~l{KdcaRqeh' );
define( 'LOGGED_IN_SALT',    ';3bs^dRTwhmVT}p0j(TLbBfb<1d5G.Lh,}sW-q4`EgP^*M9Yfgw@|$ho@ ]}3NNu' );
define( 'NONCE_SALT',        'i=U@/.itX>cD`7hb(*yQ<m_6;JFWOV}GE#6m]iGAR(GxD p888iVG:1Rf~x#!#PZ' );
define( 'WP_CACHE_KEY_SALT', '>DvAfFE5}h}rx%zN@v|P7E|21cZEKp(($Pc(No`G^#o*-4U,#uAYS{kEYM}/=]%H' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'd64ecbde42d5746bbda2cd604d7bf391' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
