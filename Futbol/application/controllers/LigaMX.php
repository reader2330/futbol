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
		$base=preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME']));
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

	public function NombresArticulos(){
		$base=preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME']));
		$NombresArticulos = array(
			1 => $base."/LigaMX/Mateus",
			2 => $base."/LigaMX/America_Top",
			3 => $base."/LigaMX/Jona_America",
			4 => $base."/LigaMX/America_vs_Pachuca",
			5 => $base."/LigaMX/NicoCastillo_Gol",
			6 => $base."/LigaMX/Omar_arellano"


			);
		return $NombresArticulos;

	}

	public function ImagenesArticulos(){
		$base=preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME']));
		$ImagenesArticulos = array(
			1 => $base."/img/Mateus/Mateus1.png",
			2 => $base."/img/america/americatop.jpg", 
			3 => $base."/img/mexicanos/Jona1-1.jpg", 
			4 => $base."/img/america/cecilio1-1.jpg", 
			5 => $base."/img/pumas/Nico.png", 
			6 => $base."/img/Arellano/arellano.jpg", 
			 

			);
		return $ImagenesArticulos;

	}

	public function TitulosArticulos(){
		
		$TitulosArticulos = array(
			1 => "Mateus Uribe realiza exámenes médicos con América",
			2 => "América, en el Top 20 mundial de clubes de futbol con más followers", 
			3 => "No estuve cerca del América': Jonathan dos Santos", 
			4 => "América endereza el 'vuelo' y se impone a Pachuca", 
			5 => "Golazo de Castillo ilumina a Pumas en arranque del A2017", 
			6 => "Omar Arellano es cortado por el Ontinyent", 
			 
			);

		return $TitulosArticulos;

	}


	public function index(){

		$data['titulo'] = 'LigaMX';
		$data2['nombres'] = $this->Nombresequipos();
		$data2['imagenes'] = $this->ImagenesEquipos();
		$data2['NombresArticulos'] = $this->NombresArticulos();
		$data2['ImagenesArticulos'] = $this->ImagenesArticulos();
		$data2['TitulosArticulos'] = $this->TitulosArticulos();


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

	public function Mateus(){
		$data['titulo'] ="Mateus Uribe realiza exámenes médicos con América";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Mateus');
		$this->load->view('futbol/footer');
	}

	public function Omar_arellano(){
		$data['titulo'] ="Omar Arellano es cortado por el Ontinyent";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Omar_arellano');
		$this->load->view('futbol/footer');
	}

	public function William_LobosBuap(){
		$data['titulo'] ="William Palacios, baja definitiva de Lobos tras riña";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/William_LobosBuap');
		$this->load->view('futbol/footer');
	}

	public function Futbolistas_Manchados(){
		$data['titulo'] =">Futbolistas que han manchado su carrera por amor a la fiesta";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Futbolistas_Manchados');
		$this->load->view('futbol/footer');
	}

	public function Palencia_pumas(){
		$data['titulo'] ="Altos mandos de Pumas analizarán continuidad de Palencia";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Palencia_pumas');
		$this->load->view('futbol/footer');
	}

	public function Marquez_Narcotrafico(){
		$data['titulo'] ="Márquez niega cualquier relación con el narcotráfico";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Marquez_Narcotrafico');
		$this->load->view('futbol/footer');
	}

	public function Marquez_Nike(){
		$data['titulo'] ="Nike analiza contrato de Rafa Márquez tras ser ligado al narco";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Marquez_Nike');
		$this->load->view('futbol/footer');
	}

	

	





	}

	?>