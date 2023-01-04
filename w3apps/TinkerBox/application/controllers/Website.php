<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

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
		$data = array(
			'title' => 'TinkerBox',
			// The Open Graph Protocol (see: ogp.me)
			'og_title' => '',
			'og_type' => '',
			'og_url' => '',
			'og_url_secure_url' => '',
			'og_image' => '',
			'og_image_secure_url' => '',
			
		);

		$this->load->view('templates/header', $data);
		$this->load->view('homepage', $data);
		$this->load->view('templates/footer', $data);
	}

	public function hello(){
		/*
		echo 'helloworld!<pre>';
		var_export($_SERVER);
		echo '</pre>';
		*/
		phpinfo();
	}
}
