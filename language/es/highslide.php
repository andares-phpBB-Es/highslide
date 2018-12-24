<?php
/**
*
* @package phpBB Extension - Highslide
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'LOADINGTEXT'		=> 'Cargando...',
	'LOADINGTITLE'		=> 'Click para cancelar',
	'FOCUSTITLE' 		=> 'Click para traer al frente',
	'FULLEXPANDTITLE'	=> 'Expandir al tamaño actual (f)',
	'PREVIOUSTEXT'		=> 'Anterior',
	'CLOSETEXT'			=> 'Cerrar',
	'CLOSETITLE'		=> 'Cerrar (esc)',
	'RESIZETITLE'		=> 'Redimensionar',
	'PLAYTEXT' 			=> 'Iniciar',
	'PLAYTITLE'			=> 'Iniciar slideshow (barra espaciadora)',
	'PAUSETEXT'			=> 'Pausar',
	'PAUSETITLE'		=> 'Pausar slideshow (barra espaciadora)',
	'PREVIOUSTITLE'		=> 'Anterior (flecha izquierda)',
	'NEXTTITLE'			=> 'Siguiente (flecha derecha)',
	'NUMBER'			=> 'Imagen %1 de %2',
	'RESTORETITLE' 		=> 'Click para cerrar la imagen, click y arrastrar para mover. Usa las flechas del teclado para avanzar o retroceder.'
));
