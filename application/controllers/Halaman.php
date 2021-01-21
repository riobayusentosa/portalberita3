<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	public function berita()
	{
		$this->load->view('list');
	}
}
