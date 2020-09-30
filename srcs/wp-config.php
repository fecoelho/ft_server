<?php
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Generated using https://api.wordpress.org/secret-key/1.1/salt/
 * 
 */

define('AUTH_KEY',         'wW6mP7@0tsBs.hz|jE{cC>{/Rc+|A QRS&lP+n_#+JO1iQ/9`^ = |o5chZ`?|L+');
define('SECURE_AUTH_KEY',  't`>>O4tiE-?gmNyCB4Rb#_@aY&Wx#?+23d3^|H|M(|f-imWjZ8Som+%|mN.PKEp>');
define('LOGGED_IN_KEY',    'xLneVpb_Y||IxJ7_D{pYR3x~bfZT?q#7Jb8EQzW#ce**37ap&d;jFk+fniQpK-A#');
define('NONCE_KEY',        'sg*|h?52$$SA .t}.u9q~?+(/|WFX)3A7-9}z1V uT>6x9hW+nKq3hcx[MvD9tKY');
define('AUTH_SALT',        '<-&QKs(g]3a$rf`wd_4R#K}2r@!F.e?a =p.^>wGB1+)3>QKqLiEa+53<f!d[y6K');
define('SECURE_AUTH_SALT', 'IvY<k ``kt^)/<3r(|_V+]bFx6m;D#<%g#g%q4qN%VAWnN3dCmd*(E}0-d^A=Muz');
define('LOGGED_IN_SALT',   'BQYLUin1l&Z4,QM]2P|pdJ}qQu+o~;0qDp^|hu0@s]/>k9~?X: ]keeFQVV33#r/');
define('NONCE_SALT',       'fggP+p!N:[HGvFR&7uH)~3C6PIZ}}-N1KJd<^%VX6a<!vq:^;1d#Sl.V6]DW-5F;');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores.
 */
$table_prefix = 'wp_';

/**
 * WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 */

define( 'WP_DEBUG', false );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';