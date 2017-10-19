<?php
/**
*
* @package phpBB Extension - HIGHSLIDE
* @copyright (c) 2015 Sheer
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace bb3mobi\highslide\acp;

class main_module
{
	var $u_action;
	var $request_table;

	function main($id, $mode)
	{
		global $user, $template, $request, $config;

		$this->tpl_name = 'acp_config_body';

		$highslide_type	= $request->variable('highslide_type', $config['highslide_type']);

		$template->assign_vars(array(
			'S_GALLERY'				=> (bool) $config['highslide_type'],
			'U_ACTION'				=> $this->u_action)
		);

		add_form_key('highslide_type');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('highslide_type'))
			{
				trigger_error('FORM_INVALID');
			}
			$config->set('highslide_type', $highslide_type);

			meta_refresh(3, append_sid($this->u_action));
			trigger_error($user->lang['UPDATE_CONFIG_SUCCESS'] . adm_back_link($this->u_action));
		}
	}




}
