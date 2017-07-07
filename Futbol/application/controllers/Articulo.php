<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Articulo extends CI_Controller {

	function __construct(){
		parent::__construct();
	}



	public function index(){
		$data['titulo'] = "Articulo";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/articulo');
		$this->load->view('futbol/footer');


	}




}

?>