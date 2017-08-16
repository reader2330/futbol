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
		$base=preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME']));
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

	public function NombresArticulos(){
		$base=preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME']));
		$NombresArticulos = array(
			1 => $base."/LigaSantander/Ochoaometro",
			2 => $base."/LigaSantander/Neymar_afionados",
			3 => $base."/LigaSantander/Neymar_retos",
			4 => $base."/LigaSantander/AdiosNeymar",
			5 => $base."/LigaSantander/NumeroNeymar",
			6 => $base."/LigaSantander/Contratacion"


			);
		return $NombresArticulos;

	}

	public function ImagenesArticulos(){
		$base=preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME']));
		$ImagenesArticulos = array(
			1 => $base."/img/Ochoa/ochometro.jpg",
			2 => $base."/img/neymar/pasion.jpg", 
			3 => $base."/img/neymar/paris.jpg", 
			4 => $base."/img/AdiosNeymar/AdiosNeymar1.png", 
			5 => $base."/img/NeymarNumero/NeymarNumero1.png", 
			6 => $base."/img/Contratacion/Contratacion1.png", 
			 

			);
		return $ImagenesArticulos;

	}

	public function TitulosArticulos(){
		
		$TitulosArticulos = array(
			1 => "Standard de Lieja lleva cuenta de atajadas con el 'Ochoaometro'",
			2 => "Los seguidores del PSG corrieron a las tiendas a comprar la camiseta del brasileño.", 
			3 => "Neymar asegura que nuevos retos lo llevaron al PSG, no el dinero", 
			4 => "Neymar se despide del Barça con video que enchina la piel", 
			5 => "Neymar vestirá la número 10 en el PSG", 
			6 => "PSG hace oficial la contratación de Neymar Jr.", 
			 
			);

		return $TitulosArticulos;

	}


	public function index(){

		$data['titulo'] = 'LigaSantander';
		$data2['nombres'] = $this->Nombresequipos();
		$data2['imagenes'] = $this->ImagenesEquipos();
		$data2['NombresArticulos'] = $this->NombresArticulos();
		$data2['ImagenesArticulos'] = $this->ImagenesArticulos();
		$data2['TitulosArticulos'] = $this->TitulosArticulos();
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/LigaEspanola',$data2);
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

	public function neymar(){
		$data['titulo'] ="Neymar dejaría al Bacelona para ser protagonista del PSG";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/neymar');
		$this->load->view('futbol/footer');

	}

	public function madrid(){
		$data['titulo'] ="Real Madrid y Chelsea llegan a acuerdo por Morata";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/madrid');
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

	public function Neymar_despedida(){
		$data['titulo'] ="Neymar se habría 'despedido' de sus amigos del Barca";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Neymar_despedida');
		$this->load->view('futbol/footer');
	}

	public function Pique_Triunfo(){
		$data['titulo'] ="Pique da triunfo al Barça sobre el Real Madrid en Miami";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Pique_Triunfo');
		$this->load->view('futbol/footer');
	}

	public function Bale_ManU(){
		$data['titulo'] ="Agente de Bale llama 'ridículo' el posible traspaso al Man Utd";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Bale_ManU');
		$this->load->view('futbol/footer');
	}

	public function Neymar_Traidor(){
		$data['titulo'] ="Letrero a las afueras del Camp Nou llama traidor a Neymar";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Neymar_Traidor');
		$this->load->view('futbol/footer');
	}

	public function Sustitutos_Neymar(){
		$data['titulo'] ="Cinco candidatos que sustituirían a Neymar en el Barcelona";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Sustitutos_Neymar');
		$this->load->view('futbol/footer');
	}

	public function PSG_Neymar(){
		$data['titulo'] ="PSG haría oficial el fichaje de Neymar la próxima semana";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/PSG_Neymar');
		$this->load->view('futbol/footer');
	}

	public function Contratacion(){
		$data['titulo'] ="PSG hace oficial la contratación de Neymar Jr.";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Contratacion');
		$this->load->view('futbol/footer');
	}

	public function NumeroNeymar(){
		$data['titulo'] ="Neymar vestirá la número 10 en el PSG";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/NumeroNeymar');
		$this->load->view('futbol/footer');
	}

	public function AdiosNeymar(){
		$data['titulo'] ="Neymar se despide del Barça con video que enchina la piel";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/AdiosNeymar');
		$this->load->view('futbol/footer');
	}

	public function Neymar_retos(){
		$data['titulo'] ="Neymar asegura que nuevos retos lo llevaron al PSG, no el dinero";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Neymar_retos');
		$this->load->view('futbol/footer');
	}

	public function Neymar_afionados(){
		$data['titulo'] ="Los seguidores del PSG corrieron a las tiendas a comprar la camiseta del brasileño.";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Neymar_afionados');
		$this->load->view('futbol/footer');
	}

	public function Ochometro(){
		$data['titulo'] ="Standard de Lieja lleva cuenta de atajadas con el 'Ochoaometro'";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Ochoaometro');
		$this->load->view('futbol/footer');
	}

	public function Sobrevivientes(){
		$data['titulo'] ="Camp Nou se rinde ante los sobrevivientes del Chapecoense";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Sobrevivientes');
		$this->load->view('futbol/footer');
	}

	public function Barca_chape(){
		$data['titulo'] ="Barcelona golea al Chape y se adjudica el Trofeo Joan Gamper";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Barca_chape');
		$this->load->view('futbol/footer');
	}

	public function Coutinho_condiciona(){
		$data['titulo'] ="Coutinho condiciona al Barça para abandonar Liverpool";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Coutinho_condiciona');
		$this->load->view('futbol/footer');
	}

	public function Dybala_Neymar(){
		$data['titulo'] ="Dybala, 'plan b' del Barça para reemplazar a Neymar";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/Dybala_Neymar');
		$this->load->view('futbol/footer');
	}

		public function RealSociedad_Reyes(){
		$data['titulo'] ="Real Sociedad buscaría reunir a Reyes con Vela";
		$this->load->view('futbol/header',$data);
		$this->load->view('futbol/RealSociedad_Reyes');
		$this->load->view('futbol/footer');
	}

    public function FC(){
        $data['titulo'] ="LA FC, nuevo club de Carlos Vela";
        $this->load->view('futbol/header',$data);
        $this->load->view('futbol/FC');
        $this->load->view('futbol/footer');
    }

    public function Supercopa(){
        $data['titulo'] ="Real Madrid olvida mala pretemporada y se lleva Supercopa de Europa";
        $this->load->view('futbol/header',$data);
        $this->load->view('futbol/Supercopa');
        $this->load->view('futbol/footer');
    }

    public function Regalo(){
        $data['titulo'] ="Mou regala su medalla de subcampeón a fan del Man Utd";
        $this->load->view('futbol/header',$data);
        $this->load->view('futbol/Regalo');
        $this->load->view('futbol/footer');
    }

    public function Ney_Barca(){
        $data['titulo'] ="Neymar demandaría al Barça por no pagarle prima de renovación";
        $this->load->view('futbol/header',$data);
        $this->load->view('futbol/Ney_Barca');
        $this->load->view('futbol/footer');
    }

    public function Messi_Neymar(){
        $data['titulo'] ="Messi habría ofrecido a Neymar 'hacerlo' Balón de Oro";
        $this->load->view('futbol/header',$data);
        $this->load->view('futbol/Messi_Neymar');
        $this->load->view('futbol/footer');
    }















}

?>