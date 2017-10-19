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
	'ACP_HIGH_SLIDE_CONFIG'			=> 'Configuration',
	'ACP_HIGHSLIDE_EXPLAIN'			=> '',
	'ACP_HIGH_SLIDE_TYPE'			=> 'Mini gallery mode',
	'ACP_HIGH_SLIDE_TYPE_EXPLAIN'	=> 'If enabled, additional clickable image thumbnails will be displayed for easy navigation',
	'UPDATE_CONFIG_SUCCESS'			=> 'Configuration successfully changed'

));
