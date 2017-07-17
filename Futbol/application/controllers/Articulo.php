<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Articulo extends CI_Controller {

	function __construct(){
		parent::__construct();
	}



	public function index(){
		$data['titulo'] = "Osorio dirige su primera practica frente al reto de la Copa Oro.";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/articulo');
		$this->load->view('futbol/footer');
	}

	public function articulo2(){
		$data['titulo'] = "Nuevo Integrante del Real Madrid";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/articulo2');
		$this->load->view('futbol/footer');
	} 

	public function articulo3(){
		$data['titulo'] = "James Rodríguez, refuerzo de lujo del Bayern Munich.";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/articulo3');
		$this->load->view('futbol/footer');
	} 

	public function juventus_cancela(){
		$data['titulo'] = "Juventus cancela partido frente a Monterrey y Tigres.";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/juventus_cancela');
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

	public function tecatito_rompe(){
		$data['titulo'] = "Rompe silencio Tecatito.";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/tecatito_rompe');
		$this->load->view('futbol/footer');
	} 


	public function duenias(){
		$data['titulo'] ="'No jugamos para darle gusto a la gente': Jesús Dueñas";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/duenias');
		$this->load->view('futbol/footer');
	} 

	public function grito(){
		$data['titulo'] = "Afición del Tri en Denver se manifiesta para erradicar el 'eh p...'";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/grito');
		$this->load->view('futbol/footer');
	}

	public function chivas_playera(){
		$data['titulo'] = "Chivas presume la 12 en flamante jersey para Apertura 2017";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/chivas_playera');
		$this->load->view('futbol/footer');
	}

	

	public function Amenaza_bomba(){
		$data['titulo'] = "Amenaza de bomba en UCLA da susto al Real Madrid";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/amenaza');
		$this->load->view('futbol/footer');
	}




	public function ochoa(){
		$data['titulo'] ="'La gente en México cree que es fácil estar en Europa': Ochoa";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/ochoa');
		$this->load->view('futbol/footer');
	} 

	public function zlatan(){
		$data['titulo'] ="Zlatan estaría cerca de aceptar una oferta del Galaxy";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/zlatan');
		$this->load->view('futbol/footer');
	}

	public function moreno(){
		$data['titulo'] ="Moreno arriba a Roma y se pone la '15' de La Loba ";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/moreno');
		$this->load->view('futbol/footer');
	}

	public function america(){
		$data['titulo'] ="	
		América, 'rejuvenecido' para el Apertura 2017";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/america');
		$this->load->view('futbol/footer');
	}
	public function ajax(){
		$data['titulo'] ="Aficionados abarrotan las calles en apoyo a juvenil del Ajax";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/ajax');
		$this->load->view('futbol/footer');
	}
	public function disculpa(){
		$data['titulo'] ="Dueñas se disculpa con afición mexicana";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/disculpa');
		$this->load->view('futbol/footer');
	}




}

?>