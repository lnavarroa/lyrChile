<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends MX_Controller {

	function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('adminHomeView');
	}

	public function blank()
	{
		$this->load->view('pages/blank');
	}

	public function buttons()
	{
		$this->load->view('pages/buttons');
	}

	public function flot()
	{
		$this->load->view('pages/flot');
	}

	public function forms()
	{
		$this->load->view('pages/forms');
	}
	public function grid()
	{
		$this->load->view('pages/grid');
	}
	public function icons()
	{
		$this->load->view('pages/icons');
	}
	public function login()
	{
		$this->load->view('pages/login');
	}
	public function morris()
	{
		$this->load->view('pages/morris');
	}
	public function notifications()
	{
		$this->load->view('pages/notifications');
	}
	public function panelswells()
	{
		$this->load->view('pages/panels-wells');
	}
	public function tables()
	{
		$this->load->view('pages/tables');
	}
	public function typography()
	{
		$this->load->view('pages/typography');
	}
}