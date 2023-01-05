<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends CI_Controller
{
	public function index()
	{
		$data = array(

			// Headers
			'title' => 'TinkerBox',
			'canonical' => '',

			// The Open Graph Protocol (see: ogp.me)
			'og_title' => 'TinkerBox | Mixed sized Bombs',
			'og_description' => 'Bomb manufacturing, Staff Rude on Mondays.',
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

	public function hello()
	{
		/*
		echo 'helloworld!<pre>';
		var_export($_SERVER);
		echo '</pre>';
		*/
		phpinfo();
	}
}
