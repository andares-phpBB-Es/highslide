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
	'LOADINGTEXT'		=> 'Loading...',
	'LOADINGTITLE'		=> 'Click to cancel',
	'FOCUSTITLE' 		=> 'Click to bring to front',
	'FULLEXPANDTITLE'	=> 'Expand to actual size (f)',
	'PREVIOUSTEXT'		=> 'Previous',
	'CLOSETEXT'			=> 'Close',
	'CLOSETITLE'		=> 'Close (esc)',
	'RESIZETITLE'		=> 'Resize',
	'PLAYTEXT' 			=> 'Play',
	'PLAYTITLE'			=> 'Play slideshow (spacebar)',
	'PAUSETEXT'			=> 'Pause',
	'PAUSETITLE'		=> 'Pause slideshow (spacebar)',
	'PREVIOUSTITLE'		=> 'Previous (arrow left)',
	'NEXTTITLE'			=> 'Next (arrow right)',
	'NUMBER'			=> 'Image %1 of %2',
	'RESTORETITLE' 		=> 'Click to close image, click and drag to move. Use arrow keys for next and previous.'
));
