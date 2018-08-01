<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends MX_Controller {

	function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('userHomeView');
	}

	public function indice()
	{
		$this->load->view('userHomeView');
	}
}