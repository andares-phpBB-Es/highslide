<?php
/**
*
* @package phpBB Extension - HIGHSLIDE
* @copyright (c) 2015 Sheer
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace bb3mobi\highslide\acp;

class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\bb3mobi\highslide\acp\main_module',
			'version'	=> '1.0.0',
			'title' => 'ACP_HIGH_SLIDE',
			'modes'		=> array(
				'config'	=> array(
					'title' => 'ACP_HIGH_SLIDE_CONFIG',
					'auth' => 'ext_bb3mobi/highslide && acl_a_board',
					'cat' => array('ACP_HIGH_SLIDE')
				),
			),
		);
	}
}
