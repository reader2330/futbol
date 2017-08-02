<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>


<head>

	<link rel="stylesheet" type="text/css" href="<? base_url() ?>assets/css/botones5.css">
	<link rel="stylesheet" type="text/css" href="<? base_url() ?>assets/css/estilos6.css">
	<link rel="stylesheet" type="text/css" href="<? base_url() ?>assets/css/inicior5.css">




</head>
<body>
	<div class="container">

		

		<br>
		<br>
		<br>
		


		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img class="d-block img-fluid" src="<?= base_url();?>img/Editadas/Bale1-1.jpg" alt="First slide" >

					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="<?= base_url();?>img/Editadas/cecilio1-1.jpg" alt="Second slide">

					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="<?= base_url();?>img/Editadas/chicharito_rechaza.jpg" alt="Third slide">
						
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="<?= base_url();?>img/Editadas/lozano.jpg" alt="Third slide">
						
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

			<br>
			<br>
			<br>




			<div class="resultados">


				<div class="texto">
					<h2 align="center">Liga MX</h2>
					<br>
					<br>
					<center class="centrar">
						<a href="<? base_url(); ?>Categorias/LigaMX" class="btn btn-primary" id="inicio" style="margin-left:15px">Leer más</a>
					</center>
				</div>
				<div class="resultado">


					<div class="card">

						<div class="card-block">
							<div class="izq">
								<br>
								<p align="center"> <?= $Nombres[11] ?> </p>
								<img src=<?= $Imagenes[11]?> alt=<?= $Nombres[11] ?> width="80">
								<br>
								<br>
								<p align="center"> 1</p>
							</div>
							<strong>VS</strong>
							<div class="der"> 
								<br>
								<p align="center"> <?= $Nombres[8] ?> </p>
								<img src=<?= $Imagenes[8]?>  width="100" alt=<?= $Nombres[8] ?> > 
								<br>
								
								<p align="center">1</p>
							</div>  

							<br>
							<br>

						</div>
					</div>

				</div>
				<div class="resultado">
					<div class="card">

						<div class="card-block">
							<div class="izq">
								<br>
								<p align="center"> <?= $Nombres[2] ?> </p>
								<img src=<?= $Imagenes[2]?> alt=<?= $Nombres[2] ?> width="80" >
								<br>
								<br>
								<p align="center">2</p>
							</div>
							<strong>VS</strong>
							<div class="der"> 
								<br>
								<p align="center"> <?= $Nombres[12] ?> </p>
								<img src=<?= $Imagenes[12]?> alt=<?= $Nombres[12] ?>  width="80">
								<br>
								<br>
								<p align="center"> 1 </p>
							</div>  

							<br>
							<br>

						</div>
					</div>
				</div>
				<div class="resultado">
					<div class="card">

						<div class="card-block">
							<div class="izq">
								<br>
								<p align="center"> <?= $Nombres[13] ?> </p>
								<img src=<?= $Imagenes[13]?> alt=<?= $Nombres[13] ?> width="80" >
								<br>
								<br>
								<p align="center"> 0</p>
							</div>
							<strong>VS</strong>
							<div class="der"> 
								<br>
								<p align="center"> <?= $Nombres[6] ?> </p>
								<img src=<?= $Imagenes[6]?> alt=<?= $Nombres[6] ?> width="80" >
								<br>
								<br>
								<p align="center"> 4 </p>
							</div>  

							<br>
							<br>

						</div>
					</div>
				</div>
				<div class="resultado">
					<div class="card">

						<div class="card-block">
							<div class="izq">

								<p align="center"> <?= $Nombres[3] ?> </p>
								<img src=<?= $Imagenes[3]?> alt=<?= $Nombres[3] ?> width="80" >


								<p align="center"> 1</p>
							</div>
							<strong>VS</strong>
							<div class="der"> 

								<p align="center"> <?= $Nombres[4] ?> </p>
								<img src=<?= $Imagenes[4]?> alt=<?= $Nombres[4] ?> width="80" >
								<br>
								
								<p align="center"> 1</p>
							</div>  

							<br>
							<br>

						</div>
					</div>
				</div>
				<div class="resultado">
					<div class="card">

						<div class="card-block">
							<div class="izq">
								<br>
								<p align="center"> <?= $Nombres[7] ?> </p>
								<img src=<?= $Imagenes[7]?> alt=<?= $Nombres[7] ?> width="80">
								<br>
								<br>

								<p align="center">1</p>
							</div>
							<strong>VS</strong>
							<div class="der"> 
								<br>
								<p align="center"> <?= $Nombres[18] ?> </p>
								<img src=<?= $Imagenes[18]?> alt=<?= $Nombres[18] ?> width="80" >
								<br>
								<br>
								<p align="center">0</p>
							</div>  

							<br>
							<br>

						</div>
					</div>
				</div>
				<div class="resultado">
					<div class="card">

						<div class="card-block">
							<div class="izq">

								<p align="center"> <?= $Nombres[10] ?> </p>
								<img src=<?= $Imagenes[10]?> alt=<?= $Nombres[10] ?> width="80" >
								<br>
								<br>
								<p align="center">0</p>
							</div>
							<strong>VS</strong>
							<div class="der"> 

								<p align="center"> <?= $Nombres[1] ?> </p>
								<img src=<?= $Imagenes[1]?> alt=<?= $Nombres[1] ?> width="80" > 
								<br>
								<br>

								<p align="center">2</p>
							</div>  

							<br>
							<br>

						</div>
					</div>
				</div>

				<div class="resultado">
					<div class="card">

						<div class="card-block">
							<div class="izq">

								<p align="center"> <?= $Nombres[9] ?> </p>
								<img src=<?= $Imagenes[9]?> alt=<?= $Nombres[9] ?> width="80" >
								<br>
								<br>
								<p align="center">1</p>
							</div>
							<strong>VS</strong>
							<div class="der"> 

								<p align="center"> <?= $Nombres[15] ?> </p>
								<img src=<?= $Imagenes[15]?> alt=<?= $Nombres[15] ?> width="80"> 
								<br>
								<br>

								<p align="center">0</p>
							</div>  

							<br>
							<br>

						</div>
					</div>
				</div>

				<div class="resultado">
					<div class="card">

						<div class="card-block">
							<div class="izq">

								<p align="center"> <?= $Nombres[16] ?> </p>
								<img src=<?= $Imagenes[16]?> alt=<?= $Nombres[16] ?> width="80" >
								<br>
								<br>
								<p align="center">3</p>
							</div>
							<strong>VS</strong>
							<div class="der"> 

								<p align="center"> <?= $Nombres[5] ?> </p>
								<img src=<?= $Imagenes[5]?> alt=<?= $Nombres[5] ?> width="80" >
								<br>
								<br>

								<p align="center">1</p>
							</div>  

							<br>
							<br>

						</div>
					</div>
				</div>

				<div class="resultado">
					<div class="card">

						<div class="card-block">
							<div class="izq">

								<p align="center"> <?= $Nombres[14] ?> </p>
								<img src=<?= $Imagenes[14]?> alt=<?= $Nombres[14] ?> width="80" >
								<br>
								<br>
								<p align="center">1</p>
							</div>
							<strong>VS</strong>
							<div class="der"> 

								<p align="center"> <?= $Nombres[17] ?> </p>
								<img src=<?= $Imagenes[17]?> alt=<?= $Nombres[17] ?> width="80" >
								<br>
								<br>

								<p align="center">1</p>
							</div>  

							<br>
							<br>

						</div>
					</div>
				</div>


			</div>

			<br>
			<br>
			<br>

			<br>
			<h1 align="center">Ultimos Articulos</h1>
			<br>
			<br>
			<br>





			<div class="noticias">

				<div class="noticia">
					<div class="card" id="card">
						<div class="card-block">
							<a href="<? base_url(); ?>Articulo/tecatito_rompe" style="text-decoration: none;"><h3>Rompe el silencio el tecatito Corona</h3></a>
						</div>
						<br>
						<a href="<? base_url(); ?>Articulo/tecatito_rompe" style="text-decoration: none;"><img src="<? base_url(); ?>img/Tecatito/tecatito.jpg" alt="Tecatito" width=100% ></a>
						<br>
						<div class="card-block">
							<p class="card-text">
								Tecatito: "Estoy listo, no es nada con México"</p>
							</div>
						</div>
					</div>


					<div class="noticia" >
						<div class="card" id="card">
							<div class="card-block">
							<a href="<? base_url(); ?>Articulo/juventus_cancela" style="text-decoration: none;"><h3>Juventus cancela partido frente a Monterrey y Tigres.</h3></a>
							</div>
							
							<a href="<? base_url(); ?>Articulo/juventus_cancela" style="text-decoration: none;"><img src="img/Juventus/juve.jpg" alt="Jueventus" width="100%"></a>
							<br>
							
						
							<div class="card-block">
								<p class="card-text"> El equipo Campeón de la Serie A anunció la cancelación de los compromisos de pretemporada en México </p>
							</div>
						</div>
					</div>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					

					<div class="noticia">
						<div class="card" id="card">
						<br>
							<div class="card-block">
								<br>
								<a href="<? base_url(); ?>Articulo/chivas_playera" style="text-decoration: none;"><h3>Chivas presume la 12 en flamante jersey para Apertura 2017</h3></a>
							</div>
							<br>
							<a href="<? base_url(); ?>Articulo/chivas_playera" style="text-decoration: none;"><img src="img/chivas_playera/chivas1.png" alt="chivas" width="100%"></a>
							<div class="card-block">
								<p class="card-text">El Guadalajara presentó el uniforme de local que portará para la próxima temporada</p>
							</div>
						</div>
					</div>

			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

				<h2 align="center">Nuestras publicaciones en las Redes Sociales</h2>

				<div class="time">

					<div class="fb">

						<div class="fb-page" data-href="https://www.facebook.com/Patada-Inicial-480148992324550/?ref=aymt_homepage_panel" data-tabs="timeline" data-width="500" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Patada-Inicial-480148992324550/?ref=aymt_homepage_panel" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Patada-Inicial-480148992324550/?ref=aymt_homepage_panel">Patada Inicial</a></blockquote></div>


					</div>
					<div class="tw">
						<a class="twitter-timeline" href="https://twitter.com/patadainicialof">Tweets by patadainicialof</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

					</div>



				</div>















			<div id="fb-root"></div>
			<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>

			</div>



