<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');

	}
	public function Nombresequipos(){

		 $Nombres = array(
		  1 => "America",
		  2 => "Atlas",
		  3 => "Cruz Azul",
		  4 => "Guadalajara",
		  5 => "Leon",
		  6 => "Lobos",
		  7 => "Monterrey",
		  8 => "Morelia",
		  9 => "Necaxa",
		  10 => "Pachuca",
		  11 => "Puebla",
		  12 => "Pumas",
		  13 => "Querétaro",
		  14 => "Santos",
		  15 => "Tijuana",
		  16 => "Toluca",
		  17 => "Tigres",
		  18 => "Veracruz",		 

		 );	

		 return $Nombres;

		}

	public function ImagenesEquipos(){
		$base=preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'])).'/';
		$Imagenes = array
		(1 =>  $base."/img/MX/america.png" ,
		 2 =>  $base."/img/MX/atlas.png" ,
		 3 =>  $base."/img/MX/cruz.png" ,
		 4 =>  $base."/img/MX/chivas2.png" ,
		 5 =>  $base."/img/MX/leon.png" ,
		 6 =>  $base."/img/MX/lobos.png" ,
		 7 =>  $base."/img/MX/monterrey.png" ,
		 8 =>  $base."/img/MX/morelia.png" ,
		 9 =>  $base."/img/MX/necaxa.png" ,
		 10 =>  $base."/img/MX/pachuca2.png" ,
		 11 =>  $base."/img/MX/puebla.png" ,
		 12 =>  $base."/img/MX/pumas2.png" ,
		 13 =>  $base."/img/MX/queretaro.png" ,
		 14 =>  $base."/img/MX/santos.png" ,
		 15 =>  $base."/img/MX/tijuana.png" ,
		 16 =>  $base."/img/MX/toluca.png" ,
		 17 =>  $base."/img/MX/tigres.png" ,
		 18 =>  $base."/img/MX/veracruz.png" ,

			);

		return $Imagenes;

	}

	public function index()
	{

		$data2['Nombres']=$this->Nombresequipos();
		$data2['Imagenes']=$this->ImagenesEquipos();
		$data['titulo'] = 'Patada Inicial';


		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Inicio',$data2);
		$this->load->view('futbol/footer');

	}




}

?>
