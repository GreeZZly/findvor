<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
		{
			$this->load->view('main/htmlheader.html');
			$this->load->view('main/header');
			$this->load->view('main/calc');
			$this->load->view('main/navbar_fixed');
			$this->load->view('main/how_we_work');
			$this->load->view('main/profit');
			$this->load->view('main/whywe');
			$this->load->view('main/trust');
			$this->load->view('main/aboutus');
			$this->load->view('main/contacts');
			$this->load->view('main/minimap');
			$this->load->view('main/footer_contact');
			$this->load->view('main/footer_nav');
			$this->load->view('main/footer');
			$this->load->view('main/htmlfooter.html');
		}
}