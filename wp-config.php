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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u587940817_demo6' );

/** MySQL database username */
define( 'DB_USER', 'u587940817_demo6' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Avishak@123' );

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
define( 'AUTH_KEY',         'Uia%q.Hk{=9~=zY?lfZ$yo%P/-9tAw+ou!R[0;B[rdpgVQ{YdfW=L9^BY$Z|,yL|' );
define( 'SECURE_AUTH_KEY',  'Nnq4{%mS[o,;?Aj[n{**lE?/hU%N7|];rsjO^Nyh P)yd,rgFAM9$<}I<8/f=aPh' );
define( 'LOGGED_IN_KEY',    'R,]h5fMeMzMiV+4[ts>d(O;rKY`Vf`K@I:8D^x#CB@yvCvuIc);Fp&!026:A6]Qk' );
define( 'NONCE_KEY',        '>ASC/E-y!3>z&A~KS%dCDR5gN7#s |Dk05r$Ggm&LdRW[i9e(-vT{<D_$<1H_w_<' );
define( 'AUTH_SALT',        'ph8ULRg{Ei)j>v1_-S7%Z/ucUh~,hWOr6.ZX![+HppVmE+g><iSCjGJV7_AoU]Y;' );
define( 'SECURE_AUTH_SALT', '{.awJOoSN`JHmRz>NN3v8VTu6Qxv+i0euG(Wb3zk&|IJ[Ob%S8S3Yj^jqxta5KU9' );
define( 'LOGGED_IN_SALT',   'ztA3[5@BtdkD$o#!gfe~#w^#k9;L3wmk|8,7?.8X)~YEQoMVnyc~CE,_9/%ty=mS' );
define( 'NONCE_SALT',       '[EU#@*}r]H6q*B-kIj.]cbt|kE#ZG2asTT0v8K?L5cx+`Z6^K0J; !PG;tky;1J<' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'ALLOW_UNFILTERED_UPLOADS', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
