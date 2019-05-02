<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("pendaftar_model");
        $this->load->library('form_validation');
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("home/ppmnh");
	}

	public function metamorph()
	{
       $data["pendaftar"] = $this->pendaftar_model->getAll();
        $this->load->view("home/metamorph", $data);
	}

	public function sejarah()
	{
        // load view admin/overview.php
        $this->load->view("home/sejarah");
	}

	public function visi()
	{
        // load view admin/overview.php
        $this->load->view("home/visi");
	}
}