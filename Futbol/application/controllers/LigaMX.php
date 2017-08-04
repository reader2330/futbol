<?php

defined('BASEPATH') OR exit('No direct script access allowed');




class LigaMX extends CI_Controller {

	public $equipos;


	function __construct(){
		parent::__construct();
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


	public function index(){

		$data['titulo'] = 'LigaMX';
		$data2['nombres'] = $this->Nombresequipos();
		$data2['imagenes'] = $this->ImagenesEquipos();
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/LigaMX',$data2);
		$this->load->view('futbol/footer');

	}

		public function articuloChivas(){
		$data['titulo'] = "Chivas apuesta por mas canteranos para el siguiente torneo.";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/articuloChivas');
		$this->load->view('futbol/footer');
	}

		public function articuloJugadoresSancionados(){
		$data['titulo'] = "Te recordamos los jugadores sancionados para el arranque del torneo apertura 2017.";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/articuloJugadoresSancionados');
		$this->load->view('futbol/footer');
	}

		public function duenias(){
		$data['titulo'] ="'No jugamos para darle gusto a la gente': Jesús Dueñas";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/duenias');
		$this->load->view('futbol/footer');
	}

		public function chivas_playera(){
		$data['titulo'] = "Chivas presume la 12 en flamante jersey para Apertura 2017";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/chivas_playera');
		$this->load->view('futbol/footer');
	}   

	public function america(){
		$data['titulo'] ="	América, 'rejuvenecido' para el Apertura 2017";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/america');
		$this->load->view('futbol/footer');
	}

	public function disculpa(){
		$data['titulo'] ="Dueñas se disculpa con afición mexicana";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/disculpa');
		$this->load->view('futbol/footer');
	}

	public function directivos(){
		$data['titulo'] ="Directivos de Liga MX le dicen no a Osorio para reforzar al Tri";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/directivos');
		$this->load->view('futbol/footer');

	}

	public function rayados(){
		$data['titulo'] ="Rayados hace oficial salida de Cardona a Boca Juniors";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/rayados');
		$this->load->view('futbol/footer');

	}

	public function mexicanos(){
		$data['titulo'] ="'Mexicanos con confianza son potencia mundial': Almeyda";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/mexicanos');
		$this->load->view('futbol/footer');


	}

		public function NicoCastillo_Gol(){
		$data['titulo'] ="Golazo de Castillo ilumina a Pumas";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/NicoCastillo_Gol');
		$this->load->view('futbol/footer');


	}

	public function America_vs_Pachuca(){
		$data['titulo'] ="América endereza el vuelo y se impone a Pachuca";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/America_vs_Pachuca');
		$this->load->view('futbol/footer');
	}

		public function Jona_America(){
		$data['titulo'] ="No estuve cerca del América: Jonathan dos Santos";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Jona_America');
		$this->load->view('futbol/footer');
	}

	public function America_Top(){
		$data['titulo'] ="América, en el Top 20 mundial de clubes de futbol con más followers";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/America_Top');
		$this->load->view('futbol/footer');
	}





	}

	?>