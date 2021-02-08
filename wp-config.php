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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbs1392235' );

/** MySQL database username */
define( 'DB_USER', 'dbu1510702' );

/** MySQL database password */
define( 'DB_PASSWORD', 'WrKCXhivhBopvGJbTdmn' );

/** MySQL hostname */
define( 'DB_HOST', 'db5001681710.hosting-data.io' );

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
define( 'AUTH_KEY',          '&X*es8S.DW*k/b4d#,,x+?2A~Usj(C_0QFBAshQ6}HKbvmArzkAfA5ZzXk#.~pY=' );
define( 'SECURE_AUTH_KEY',   'f`L@;LgeEP91Cx71&aUbUXnpi~ ot*>}eH^7LNt^nqGx=#_p x{ls~hS$+C`M,Z{' );
define( 'LOGGED_IN_KEY',     'mknL.DrT6v}+-2H;*iund<eNsas*9dbKxXE*B|+i<k[+F4Fo*}~Bp,BTGz*$H%pt' );
define( 'NONCE_KEY',         ')3vx6$Gon2>mKm6Xa-!#qm#a~8wEVN*4IVsDl:OTNtVXzf1+j_6uNiuS=Q,B-jj7' );
define( 'AUTH_SALT',         'baCREYSBz|hp_OK.qK95~{XwE;`S1L}|+#eszDW2T{ WS`4r^gB_ VGxz*b}m.3e' );
define( 'SECURE_AUTH_SALT',  'zp=9J`W3ZNomEacT1LbB*(PE:,D|Ss@I7~2@7=v1&p%X>^psWlhuFs/7W? _xeFF' );
define( 'LOGGED_IN_SALT',    '4~gGExM$Oi8.%7SPlDGZkv9j}{d~h?7>0|^T7x[b5us.^NX^J#~7`}{G1|<|Kiaz' );
define( 'NONCE_SALT',        '4aHMZ@%g5/|!U$~|j2@EX+b jbKGAv+fDrNdzbNP:JqwI]M!~*)m~rU-=$-R<Ae[' );
define( 'WP_CACHE_KEY_SALT', ']PQ (0<iM33Cq13r,|G[2HU9YW$tgk*@Gr!vvN]X|dI)MJX(BtC[;g}eT!|xYm,W' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'DybzmHkP';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
