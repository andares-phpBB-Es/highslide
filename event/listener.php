<?php
/**
*
* @package * @package phpBB Extension - Highslide
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace bb3mobi\highslide\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
/**
* Assign functions defined in this class to event listeners in the core
*
* @return array
* @static
* @access public
*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'					=> 'load_language_on_setup',
			'core.page_header_after'			=> 'set_highslide_type',
		);
	}

/**
* Constructor
*/
	public function __construct(\phpbb\template\template $template, \phpbb\config\config $config)
	{
		$this->template = $template;
		$this->config = $config;
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'bb3mobi/highslide',
			'lang_set' => 'highslide',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function set_highslide_type($event)
	{
		$this->template->assign_var('S_HIGHSLIDE_TYPE', ($this->config['highslide_type']) ? true : false);
	}
}
