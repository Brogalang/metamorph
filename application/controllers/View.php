<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class View extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model("pendaftar_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data["pendaftar"] = $this->pendaftar_model->getAll();
        $this->load->view("home/siswa", $data);
	}
}