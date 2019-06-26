<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
define( 'FS_METHOD', 'direct' );
// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'repuesto' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'rafa2112' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '#4`AS@R@WiST,>5[QLLDbAH4-JS>E>o:rxcOo|x=(=!vBCucwqNqA]*Us=NWebO=' );
define( 'SECURE_AUTH_KEY', '^AIrozf=&6O:EN9+iuxS`qYu%^DndeHVN]Z*V%T;TS`+^n3U+;,.a8yI$,/{ hB$' );
define( 'LOGGED_IN_KEY', 'Z= azoGCpfmeRTBYe.Gu(Dbr8r|Xl?G1{rfbwN-r*(74)SE*D5z!e5t~!>:(ly5{' );
define( 'NONCE_KEY', 'p`}v&awg*cF|JK^o^mhPfkJ3Sd1%j!kR6VT_fJAe>NNcuOJP&8Tkp{^`W}-&dD[j' );
define( 'AUTH_SALT', 'dN:im[Nuz/McDqR`f/[Cs=0@6!J 5z8Ycl?9&ES8zV4WPH%x}-P]am}z-q_>=S;=' );
define( 'SECURE_AUTH_SALT', 'tcwY5/%*#70e|DZ4U{Na&M^L9gr6PB29$_,ELa&.!oj5b>q+K7/iU]m#z#[)wxa0' );
define( 'LOGGED_IN_SALT', 'is4EeC<5IEzywGCa]uF0aAaC43;m),RRaIm,^ei(]JGV2fVXyro&eA$.;8]uOoL=' );
define( 'NONCE_SALT', 'bo!`3w632{B`d .zE7HL`2Jpp4=,BP7D9+(2a#cLE*oBsfG2^onH%Dzc :%%3#G7' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

