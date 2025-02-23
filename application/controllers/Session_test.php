<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Session_test extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		var_dump($this->session->userdata());
	}
}

/* End of file Session_test.php and path \application\controllers\Session_test.php */
