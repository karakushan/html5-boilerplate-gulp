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
define('DB_NAME', 'kids-theater');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('WP_DEBUG', true);

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'b1tW$[XI-Dq=DZr4K4[AEq&Wvxw%H.sZBWBBSp>0WN*p8XwTdE BBQ{V}WnA,c0M');
define('SECURE_AUTH_KEY', '{jdphf0_3W0p?i#{$8,_vS]0e_O2rZ;aD8%}JAYPr@N2sD~tTqdb]a&zM{=?2OkQ');
define('LOGGED_IN_KEY', 'wa1l8Um7SHp{xcfp:ULQGgN0KH6B|lUVXQ2:^/[|mR-lxOC32[hHJpb=CzeH^fk6');
define('NONCE_KEY', 'hdeu^#{N`:ZE1f#xx?Zy$!gkK8gTwKMQ4<-B_JyEmDc6}sTFRVV~|Y9CpT|%j6~@');
define('AUTH_SALT', '=p8mt]xj]6sYl;GFmlKr(d?V9S8cMr(!HGpR-E3#a.CoVvY|aYZ/N%Dva-Gv;ixE');
define('SECURE_AUTH_SALT', 'cVOM?8&zI5@<184 c):O=*(18k?d]Ik|Ce<AWj]U109?Z3f8DSqthgv?Cv5Pg0(D');
define('LOGGED_IN_SALT', ']20|:od6@~W|n)}GY=[$$Mr+9q5Jo>mDPDW^,nu |=EH8U /J3 5 :YRZ#qX{f2,');
define('NONCE_SALT', 'Sn4+d2lNUB/SmTVfcn{^k9cURt_x#8Fv{az2,@/K9n?IUz+TaNQ6{C}<Wq{PKk7z');
define('WP_CACHE_KEY_SALT', '^#Zldd4ejAihFQL[[s!H{6n]l!3kSO1WhNQtAJ]3ExByR(;x7#.J&{:]0H P?Qo ');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
