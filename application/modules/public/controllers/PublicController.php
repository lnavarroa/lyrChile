<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PublicController extends MX_Controller {

	function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('publicHomeView');
	}

	public function usuario()
	{
		$this->load->module('UserController');
	}
}
