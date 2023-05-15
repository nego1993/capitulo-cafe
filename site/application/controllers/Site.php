<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$template["title"] = "Capítulo Café";

		$this->load->view('common/head', $template);
		$this->load->view('common/header', $template);
		$this->load->view('pages/dash', $template);
		$this->load->view('common/footer', $template);
		$this->load->view('common/foot', $template);

	}
}