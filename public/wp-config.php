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
define('DB_NAME', 'wordpressdb');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY', 'JR0[OAPUJbaZfg5XXj==7>+jR3>G%5U8-H8VO--x2pFf>:0&htmD~&-K`3DQ%R-}');
define('SECURE_AUTH_KEY', 'w,CVE_SG{+ly&Wpdq6.-Vzt0n#?VOL9l7*|qddnv@iES}(sU94(r+pg*A@f#a.p=');
define('LOGGED_IN_KEY', 'fJ0{)M4-=)(oE|qNo&;1iTzV3QDYl|/BckJ8T-6x&lB]V<c|WX}gLD--2p%!j-I+');
define('NONCE_KEY', 'lAb37KW_O2-9-a*v`kZ(-+ ~.Mol91e53}ZqKQ01#{YL6@}y4hTNWIqB3}A_g+>O');
define('AUTH_SALT', 'emMh%/m[GXe,Lc3-5Yz}< b,<aDTOw9i@,=IL(-_IG>j+]W+7q5^EQ)3&kzv3+W6');
define('SECURE_AUTH_SALT', '_IRSq+zW!!#)yN+J,!0-tNIJr|x{v+8L5*KcW,,5D8m8@`vNV.n&@f-CoDh60ydG');
define('LOGGED_IN_SALT', 'kc-uVnQU+Y&oe^:!I/M-i})s+(f+S*u]j2N+nPTi4px%Lp9e7b7acvzui10E+#;T');
define('NONCE_SALT', 'F0Sya_=@sa_uft}ft.B.6N[cwB>-|++ew0]x$[:(cNs+6F<a=g8;v%%IH2gB3Vo!');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

