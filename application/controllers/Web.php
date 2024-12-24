<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('web/home');
	}

	public function map()
	{
		$this->load->view('web/map');
	}

	public function benefit()
	{
		$this->load->view('web/benefit');
	}

	public function promo()
	{
		$this->load->view('web/promo');
	}

	public function aboutus()
	{
		$this->load->view('web/aboutus');
	}

	public function profile()
	{
		$this->load->view('web/profile');
	}
}
