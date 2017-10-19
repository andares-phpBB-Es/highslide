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
	'ACP_HIGH_SLIDE_CONFIG'			=> 'Конфигурация',
	'ACP_HIGHSLIDE_EXPLAIN'			=> '',
	'ACP_HIGH_SLIDE_TYPE'			=> 'Режим мини галереи',
	'ACP_HIGH_SLIDE_TYPE_EXPLAIN'	=> 'Если включено, то будут дополнительно выводиться кликабельные миниатюры изображений для облегченя навигации.',
	'UPDATE_CONFIG_SUCCESS'			=> 'Конфигурация успешно изменена'

));
