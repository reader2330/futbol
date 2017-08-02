<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function Nombresequipos(){

		 $Nombres = array(
		  1 => "America",
		  2 => "Chivas",

		 

		 );	

		 return $Nombres;

		}

	

	public function LigaEspanola(){
		
		$data['titulo'] = 'Liga Española';

		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/LigaEspanola');
		$this->load->view('futbol/footer');

	}

	public function LigaInglesa(){

		$data['titulo'] = 'Liga Inglesa';


		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/LigaInglesa');
		$this->load->view('futbol/footer');

	}

	public function CopaOro(){

		$data['titulo'] = 'Copa Oro';


		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/CopaOro');
		$this->load->view('futbol/footer');

	}

}

?>