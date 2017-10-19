<?php
/**
*
* @package phpBB Extension - Highlide
* @copyright (c) 2017 Sheer
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace bb3mobi\highslide\migrations;

class highslide_0_0_2 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return;
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_schema()
	{
		return array(
		);
	}

	public function revert_schema()
	{
		return array(
		);
	}

	public function update_data()
	{
		return array(
			// Current version
			array('config.add', array('highslide_version', '0.0.2')),
			array('config.add', array('highslide_type', '0')),
			// ACP
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_HIGH_SLIDE')),
			array('module.add', array('acp', 'ACP_HIGH_SLIDE', array(
				'module_basename'	=> '\bb3mobi\highslide\acp\main_module',
				'module_langname'	=> 'ACP_HIGH_SLIDE_CONFIG',
				'module_mode'		=> 'config',
				'module_auth'		=> 'ext_bb3mobi/highslide && acl_a_board',
			))),
		);
	}
}
