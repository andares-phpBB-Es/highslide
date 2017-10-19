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
	'LOADINGTEXT'		=> 'Загрузка...',
	'LOADINGTITLE'		=> 'Отмена',
	'FOCUSTITLE' 		=> 'На передний план',
	'FULLEXPANDTITLE'	=> 'Открыть в полном размере (f)',
	'PREVIOUSTEXT'		=> 'Предыдущее',
	'CLOSETEXT'			=> 'Закрыть',
	'CLOSETITLE'		=> 'Закрыть (esc)',
	'RESIZETITLE'		=> 'Изменить размер',
	'PLAYTEXT' 			=> 'Воспроизвести',
	'PLAYTITLE'			=> 'Воспроизвести слайд-шоу (пробел)',
	'PAUSETEXT'			=> 'Пауза',
	'PAUSETITLE'		=> 'Пауза слайд-шоу(пробел)',
	'PREVIOUSTITLE'		=> 'Предыдущее (стрелка влево)',
	'NEXTTITLE'			=> 'Следующее (стрелка в право)',
	'NUMBER'			=> 'Изображение %1 из %2',
	'RESTORETITLE' 		=> 'Нажмите чтобы закрыть изображение или используйте стрелки навигации вверху изображения, чтобы просмотреть другие изображения.'
));
