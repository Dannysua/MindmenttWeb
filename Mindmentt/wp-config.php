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
define('DB_NAME', 'dbmindmentt');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'tPqyY?%SE;J-)Qpl<Ja2;_-0nRwRlMM@+AYroL[]=Nj*]5B~Zx(?oqyuOq?|Vr2]'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'q(3`S%~2|#sg*hrEyhMhgVfcd_VYr+8]rnm)B,NSI?5h$]T|o[|9yrsHg#X^l:=$'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'b&!Iy]>nB*F,c,-!U{C2-eT:/[Qg9*0~}@ldNQrvNuTmM.L-iL_{Ml~j  a-&g|D'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'J[d-^s8+`|(V}%H,o[[MN=%:E|a-qM%jj^a|;+C?([i-R&I@/!%Q+jsPmJhx=X-8'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'o[1Dr }YY+Apxkc3==wb}<hlYYR2vQK|}UT7-ygf mg+hh;G%}!2w~>O!wW+og)-'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '^kG!-WJ(8?+44x.O~7Q}t#yRMHJ81(bhoDp-)&wIQHm](Z8Vi5M|owm]j4!kV*XY'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'sCI!N~#{h&[<f$N7JpimLMQC.T_M|sf2Cmu[Z2f{kqgxQ$?.44N|VLCh1BoaW{uJ'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', ' eprfP%wGq>8*u]<~jUcZ/XDkk9S%VH|CmsbPA+z+(;x,Vj>`Q`J^&k@>B|L].={'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'mindmentt';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

