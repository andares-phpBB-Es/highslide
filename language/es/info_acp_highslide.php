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
	'ACP_HIGH_SLIDE'				=> 'Highslide',
	'ACP_HIGH_SLIDE_CONFIG'			=> 'Ajustes',
	'ACP_HIGHSLIDE_EXPLAIN'			=> '',
	'ACP_HIGH_SLIDE_TYPE'			=> 'Modo mini galería',
	'ACP_HIGH_SLIDE_TYPE_EXPLAIN'	=> 'Si está habilitado, se mostrarán miniaturas adicionales de imágenes en las que se puede hacer click para facilitar la navegación.',
	'UPDATE_CONFIG_SUCCESS'			=> 'Ajustes modificados con éxito'

));
