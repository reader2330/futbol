<?php

defined('BASEPATH') OR exit('No direct script access allowed');




class LigaSantander extends CI_Controller {

	


	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}



	public function Nombresequipos(){

		$Nombres = array(
			1 => "Alavés",
			2 => "Athletic",
			3 => "Atlético",
			4 => "Barcelona",
			5 => "Betis",
			6 => "Celta",
			7 => "Deportivo",
			8 => "Eibar",
			9 => "Espanyol",
			10 => "Getafe",
			11 => "Girona",
			12 => "Las Palmas",
			13 => "Leganés",
			14 => "Levante",
			15 => "Malaga",
			16 => "R.Sociedad",
			17 => "Real Madrid",
			18 => "Sevilla",
			19 => "Valencia",		 
			20 => "Villareal",		 


			);	

		return $Nombres;

	}

	public function ImagenesEquipos(){
		$base=preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'])).'/';
		$Imagenes = array
		(1 =>  $base."/img/LigaSantander/Deportivo_Alaves.png" ,
			2 =>  $base."/img/LigaSantander/AthleticBilbao.png" ,
			3 =>  $base."/img/LigaSantander/AtleticoMadrid.png" ,
			4 =>  $base."/img/LigaSantander/Barcelona.png" ,
			5 =>  $base."/img/LigaSantander/RealBetis.png" ,
			6 =>  $base."/img/LigaSantander/Celta_Vigo.png" ,
			7 =>  $base."/img/LigaSantander/DeportivoLaCoruña.png" ,
			8 =>  $base."/img/LigaSantander/Eibar.png" ,
			9 =>  $base."/img/LigaSantander/Espanyol.png" ,
			10 =>  $base."/img/LigaSantander/Getafe.png" ,
			11 =>  $base."/img/LigaSantander/Girona.png" ,
			12 =>  $base."/img/LigaSantander/UD_Las_Palmas.png" ,
			13 =>  $base."/img/LigaSantander/Leganes.png" ,
			14 =>  $base."/img/LigaSantander/Levante.png" ,
			15 =>  $base."/img/LigaSantander/Malaga.png" ,
			16 =>  $base."/img/LigaSantander/Real_Sociedad.png" ,
			17 =>  $base."/img/LigaSantander/RealMadrid.png" ,
			18 =>  $base."/img/LigaSantander/Sevilla.png" ,
			19 =>  $base."/img/LigaSantander/Valencia.png" ,
			20 =>  $base."/img/LigaSantander/Villarreal.png" ,


			);

		return $Imagenes;

	}


	public function index(){

		$data['titulo'] = 'LigaSantander';
		$data2['nombres'] = $this->Nombresequipos();
		$data2['imagenes'] = $this->ImagenesEquipos();
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/LigaEspanola',$data2);
		$this->load->view('futbol/footer');

	}

}

?>