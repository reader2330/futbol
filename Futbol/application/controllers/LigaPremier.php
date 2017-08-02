<?php

defined('BASEPATH') OR exit('No direct script access allowed');




class LigaPremier extends CI_Controller {

	


	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}



	public function Nombresequipos(){

		$Nombres = array(
			1 => "Arsenal",
			2 => "Bournemouth",
			3 => "Brighton",
			4 => "Burnley",
			5 => "Chelsea",
			6 => "Crystal",
			7 => "Everton",
			8 => "Huddersfield",
			9 => "Leicester",
			10 => "Liverpool",
			11 => "Man City",
			12 => "Man Utd",
			13 => "Newcastle",
			14 => "Southampton",
			15 => "Stoke",
			16 => "Swansea",
			17 => "Spurs",
			18 => "Watford",
			19 => "West Brom",		 
			20 => "West Ham",

			

			);	

		return $Nombres;

	}

	public function ImagenesEquipos(){
		$base="http://localhost/paginafutbol/Futbol";
		$Imagenes = array
		(1 =>  $base."/img/Premier/Arsenal.png" ,
			2 =>  $base."/img/Premier/Bournemouth.png" ,
			3 =>  $base."/img/Premier/Brighton.png" ,
			4 =>  $base."/img/Premier/Burnley.png" ,
			5 =>  $base."/img/Premier/Chelsea.png" ,
			6 =>  $base."/img/Premier/Crystal.png" ,
			7 =>  $base."/img/Premier/Everton.png" ,
			8 =>  $base."/img/Premier/Huddersfield.png" ,
			9 =>  $base."/img/Premier/Leicester.png" ,
			10 =>  $base."/img/Premier/LiverPool1.png" ,
			11 =>  $base."/img/Premier/ManCity.png" ,
			12 =>  $base."/img/Premier/ManU.png" ,
			13 =>  $base."/img/Premier/NewCastle.png" ,
			14 =>  $base."/img/Premier/Southampton.png" ,
			15 =>  $base."/img/Premier/StokeCity.png" ,
			16 =>  $base."/img/Premier/SwanseaCity.png" ,
			17 =>  $base."/img/Premier/Spurs.jpg" ,
			18 =>  $base."/img/Premier/Watford.png" ,
			19 =>  $base."/img/Premier/WestBromwich.png" ,
			20 =>  $base."/img/Premier/WestHam.png" ,
			



			


			);

		return $Imagenes;

	}


	public function index(){

		$data['titulo'] = "LigaPremier";
		$data2['nombres'] = $this->Nombresequipos();
		$data2['imagenes'] = $this->ImagenesEquipos();
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/LigaInglesa',$data2);
		$this->load->view('futbol/footer');

	}

}

?>