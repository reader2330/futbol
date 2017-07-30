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
		$data['titulo'] ="	América, 'rejuvenecido' para el Apertura 2017";
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

	public function directivos(){
		$data['titulo'] ="Directivos de Liga MX le dicen no a Osorio para reforzar al Tri";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/directivos');
		$this->load->view('futbol/footer');

	}

	public function neymar(){
		$data['titulo'] ="Neymar dejaría al Bacelona para ser protagonista del PSG";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/neymar');
		$this->load->view('futbol/footer');

	}

	public function rayados(){
		$data['titulo'] ="Rayados hace oficial salida de Cardona a Boca Juniors";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/rayados');
		$this->load->view('futbol/footer');

	}
	public function prensa(){
		$data['titulo'] ="Prensa hondureña se burla de Osorio previo a juego vs. México";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/prensa');
		$this->load->view('futbol/footer');

	}
	public function madrid(){
		$data['titulo'] ="Real Madrid y Chelsea llegan a acuerdo por Morata";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/madrid');
		$this->load->view('futbol/footer');

	}

	public function mexicanos(){
		$data['titulo'] ="'Mexicanos con confianza son potencia mundial': Almeyda";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/mexicanos');
		$this->load->view('futbol/footer');


	}

	public function Osorio_afirmaquecontinuidad_mundial(){
		$data['titulo'] ="El técnico de la Selección afirmó que están trabajando para alcanzar el primer objetivo, que es llegar a Rusia 2018";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Osorio_afirmaquecontinuidad_mundial');
		$this->load->view('futbol/footer');


	}

	public function Neymar_Paris(){
		$data['titulo'] ="'Neymar le dice que sí a París': Afirman en Francia";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Neymar_Paris');
		$this->load->view('futbol/footer');


	}

	public function James_narcotrafico(){
		$data['titulo'] ="James Rodríguez y la historia que lo liga al narcotráfico";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/James_narcotrafico');
		$this->load->view('futbol/footer');


	}

	public function NicoCastillo_Gol(){
		$data['titulo'] ="Golazo de Castillo ilumina a Pumas";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/NicoCastillo_Gol');
		$this->load->view('futbol/footer');


	}

	public function Mexico_Obligacion_Concacaf(){
		$data['titulo'] ="El Tri buscará el pase a la Final de Copa Oro";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Mexico_Obligacion_Concacaf');
		$this->load->view('futbol/footer');


	}

	public function EU_Finalista_CopaOro(){
		$data['titulo'] ="Estados Unidos está a la espera del rival que pueda competirle mano a mano";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/EU_Finalista_CopaOro');
		$this->load->view('futbol/footer');


	}

	public function chicharito_canto(){
		$data['titulo'] ="Chicharito ya tiene cántico hammer al estilo 'La Bamba'";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/chicharito_canto');
		$this->load->view('futbol/footer');
	} 

	public function Bayern_Grande(){
		$data['titulo'] ="'Bayer es tan grande como el Real Madrid o incluso más: James'";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Bayern_Grande');
		$this->load->view('futbol/footer');
	} 

	public function Monaco(){
		$data['titulo'] ="Mónaco desmiente acuerdo con el Real Madrid por Mbappé";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Monaco');
		$this->load->view('futbol/footer');
	}

	public function eh_puto(){
		$data['titulo'] ="'Eh pu...!' retumba en estadios de México pese a advertencias";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/eh_puto');
		$this->load->view('futbol/footer');
	} 

	public function Chuky_psv(){
		$data['titulo'] ="Chuky Lozano se estrena como artillero del PSV";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Chuky_psv');
		$this->load->view('futbol/footer');
	} 

	public function Neymar_despedida(){
		$data['titulo'] ="Neymar se habría 'despedido' de sus amigos del Barca";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Neymar_despedida');
		$this->load->view('futbol/footer');
	}


}

?>