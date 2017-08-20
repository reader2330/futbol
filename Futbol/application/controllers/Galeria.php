<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}


	public function Nombres(){

		$Nombres= array(
			1 => "America Vs Pachuca",
			2 => "Triunfo de Pique", 
			3 => "Chicharito Rechaza", 
			4 => "Despedida de Neymar", 
			5 => "Chuky llega al PSV", 
			6 => "Canto Eh Puto", 
			7 => "James narcotrafico", 
			8 => "Almeyda y los mexicanos", 
			9 => "Neymar a PSG", 
			10 => "", 

			);

		return $Nombres;


	}

	public function Imagenes(){

		$base=preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'])).'/';

		$Imagenes = array(
			1 => $base."img/america/cecilio1-1.jpg",
			2 => $base."img/Barca/pique.jpg",
			3 => $base."img/chicharito/chicharito_rechaza.jpg",
			4 => $base."img/neymar/despedida.jpg",
			5 => $base."img/lozano/lozano.jpg",
			6 => $base."img/Eh_puto/eh.jpg",
			7 => $base."img/James/james1-1.png",
			8 => $base."img/mexicanos/mexicanos1.png",
			9 => $base."img/neymar/neymar1-1.png",
			10 => $base."",
			);

		return $Imagenes;


	}

	public function Articulos(){
		$base=preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'])).'/';

		$Articulos = array(
			1 => $base."Articulo/America_vs_Pachuca",
			2 => $base."Articulo/Pique_Triunfo",
			3 => $base."Articulo/Chicharito_rechaza",
			4 => $base."Articulo/Neymar_despedida",
			5 => $base."Articulo/Chuky_psv",
			6 => $base."Articulo/eh_puto",
			7 => $base."Articulo/James_narcotrafico",
			8 => $base."Articulo/mexicanos",
			9 => $base."Articulo/Neymar_Paris",
			10 => $base."Articulo/America_vs_Pachuca",

			
			);

		return $Articulos;



	}

	public function index(){

		$data['titulo'] = 'Galeria';
		$data2['Nombres'] = $this->Nombres();
		$data2['Imagenes'] = $this->Imagenes();
		$data2['Articulos'] =$this->Articulos();

		$this->load->view('futbol/header.php',$data);
		$this->load->view('futbol/galeria.php',$data2);
		$this->load->view('futbol/footer.php');

	}

}

?>