<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){

		$data['titulo'] = 'Galeria';


		$this->load->view('futbol/header.php',$data);
		$this->load->view('futbol/galeria.php');
		$this->load->view('futbol/footer.php');

	}

}

?>