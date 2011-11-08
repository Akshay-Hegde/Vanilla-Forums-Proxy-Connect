<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 	This information required by Vanilla Forum's SSO ProxyConnect Authenticator.
 *  More information can be found at http://vanillaforums.org/page/singlesignon
 *
 * @author			Anthony Sterling
 * @package			PyroCMS
 * @subpackage	VanillaForumsProxyConnect Module
 * @category		Modules
 * @license			Apache License v2.0
 */
class VanillaForumsProxyConnect extends Public_Controller
{
	public function index()
	{
		$this->template->set_layout(null);
		
		if($this->user)
		{
			$this->template->build('index', array(
				'user'	=> array(
					'id'	=> $this->user->id,
					'name'	=> $this->user->username,
					'email'	=> $this->user->email,
				),
			));
		}
	}
}