<?php

class Test extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		
	}

	public function index()
	{
       
        // load view admin/overview.php
        $this->load->view('test');
	}

	// public function bisa()
	// {
	// 	$this->load->view('bisa');
	// }
}