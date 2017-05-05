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

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp_db');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '~@RK]<&k`@/C0n*1t# UT$VxYwC]<qu_9P7&rymTLM!O,GMEo/ :RE$@)DD=y^f~');
define('SECURE_AUTH_KEY', 'l JSk;go}.;Er-=C1Iw%D%Ya:.?V8/*)[G[N#rh*Obu3VoZ^R>uvt+0KK#s%LSrf');
define('LOGGED_IN_KEY', ':5GSqLwQi%<!V^DU:8QFjMF3jHY<<<w:JI/Z1&u`m=Se 5t Z[w=o</ToKxlfDP?');
define('NONCE_KEY', 'z_@Lhyg$MOp~5@4![RVmho&i]ZWB1x3:?lJv7NlOQ-(JW}Ed:{qnB,Ivq;JSxhHn');
define('AUTH_SALT', '|1!;l][}S8JB);%yb/V+?d-kMeGr(5I8XF`n0WS%)`03wYO6}:,uSiC-CFy|nI%-');
define('SECURE_AUTH_SALT', 'TS0h@/q#hOEYIqk-:;+^A2j;Smvk>s W;WOr)~|^G#AH]%-6%rOci0*W]Un6<W$F');
define('LOGGED_IN_SALT', 'W0LU|OqHqK16_jX`!dB%`69,=>U+rZ`dX=!5zUlMY7SU6GmYP^LMIP;=P,P(,3Sa');
define('NONCE_SALT', 'vhRPmvUWnON0,C4)%B7::|&4$Pkude+JA4U&}pGz;g2bH*NBJ$&oYP*mb)D$iM5>');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_tb';


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

