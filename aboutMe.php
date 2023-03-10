<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Sonia Díaz Garzon">
	<meta name="copyright" content="Sonia Díaz Garzon">
	<meta name="contact" content="soniadiazgarzonsdg@gmail.com">
	<meta name="description" content="resumen 200-300 letras sobre la pagina">
	<meta name="keywords" content="palabras clave 12 - 15 palabras">
	<meta name="robots" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/aboutMe.css">
	<!-- Fuentes -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&family=Courier+Prime&family=Montserrat:wght@400&display=swap" rel="stylesheet">
	<!-- Fontawesome -->
	<script src="https://kit.fontawesome.com/75aacee435.js" crossorigin="anonymous"></script>
	<!-- Favicon -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">

	<title>Sonia Díaz | Portfolio</title>

</head>
<body>
	<?php 
		include_once 'includes/nav.inc.php';
		include_once 'includes/navMobileAboutme.inc.php';
	?>
	
	<main id="mainAboutme">
		<span>&#60;?php</span>
		<div id="divTittle"><span>echo &#60;h1> </span><h2 class="tittleAboutme">¡Hola, soy <h2 id="name">Sonia</h2>!</h2><span>&#60;/h1>;</span></div>
		<span>echo &#60;section></span>
		
		<div id="textAboutMe">
			<span>echo &#60;div></span>
			<p>
				He sido Agente de viajes durante 6 años y ¡me encuentro en pleno cambio de sector!. El año pasado decidí cambiar mi vida profesional por completo y comencé a indagar en la programación.
			</p>
			<br>
			<p>Siempre me ha gustado la tecnológia y las cosas que podemos desarrollar, mejorar y seguir aprendiendo con ella.</p>
			<br>
			<div id="cardAboutme">
				<p>
					Aquí podrás conocerme un poco mejor.
				</p>
				<br>
				<ul><li><img  class="icon" src="assets/rsc/img/maletin.gif" alt="maletin"> <strong> BACKEND DEVELOPER</strong><br></li></ul>
				<br>
				<div id="textCardAboutme">
					<div id="textSkills">
						<div>
							<div class="tittle">
								<img src="assets/rsc/img/sensible.gif" alt="" class="icon">
								<h4>SKILLS</h4>
							</div>
							
							<div class="skillsCoder">
								<p>Backend</p>
								<div class="containerSkillsCoder">
									<img src="assets/rsc/img/icono_php.svg" alt="PHP">
									<img src="assets/rsc/img/icono_sql.svg" alt="SQL">
									<img src="assets/rsc/img/icono_myslq.svg" alt="Mysql">
									<img src="assets/rsc/img/icono_phpmyadmin.svg" alt="PHPmyAdmin">
								</div>
							</div>

							<div class="skillsCoder">
								<p>Frontend</p>
								<div class="containerSkillsCoder">
									<img src="assets/rsc/img/icono_html.svg" alt="HTML">
									<img src="assets/rsc/img/icono_css.svg" alt="CSS">
									<img src="assets/rsc/img/icono_js.svg" alt="Javascript">
									<img src="assets/rsc/img/icono_jquery.svg" alt="Jquery">
								</div>
							</div>

							<div class="skillsCoder">
								<p>Otras Herramientas</p>
								<div class="containerSkillsCoder">
									<img src="assets/rsc/img/icono_git.svg" alt="GIT">
									<img src="assets/rsc/img/icono_github_negro.svg" alt="Github">
									<img src="assets/rsc/img/icono_sublime.svg" alt="SublimeText">
									<img src="assets/rsc/img/icono_vscode.svg" alt="VSCode">
									<img src="assets/rsc/img/icono_figma.svg" alt="Figma">
									<img src="assets/rsc/img/icono_slack.svg" alt="Slack">
								</div>
							</div>
						</div>

						<div class="skillsCoder">
							<div class="tittle">
								<img src="assets/rsc/img/crecimiento.gif" alt="libro" class="icon">
								<h4>FORMACIÓN</h4>
							</div>
							
							<div class="skillsTitulations">
								
								<div class="containerTittle">
									<div class="educationTittle">
										<p><strong>Máster Desarrollo Web Backend</strong> <br>Sep - Dic 2022 <br> Codeku (Sevilla)</p>
										<button id="abrirModal" onclick="openModal('Comming soon', 'assets/rsc/img/backend.jpg', 'Titulo Backend')"><img src="assets/rsc/img/icono_descargar.svg" alt="Descargar"></button>
									</div>
								</div>
								
								<div class="containerTittle">
									<div class="educationTittle">
										<p><strong>Curso Desarrollo Web Frontend (Javascript)</strong> <br>Jul 2022 <br> Codeku (Sevilla)</p>
									</div>
								</div>
								
								<div class="containerTittle">
									<div class="educationTittle">
										<p><strong>Curso Desarrollo Web Frontend (HTML - CSS)</strong></p>
										<button id="abrirModal" onclick="openModal('Desarrollo web Frontend (HTML + CSS)', 'assets/rsc/img/titulo Desarrollo Web_HTML_CSS_coderhouse.png', 'Titulo Coderhouse')"><img src="assets/rsc/img/icono_descargar.svg" alt="Descargar"></button>
									</div>
									<p>Ene - Mar 2022</p>
									<p>Coderhouse</p>
								</div>
							</div>
						</div>
					</div>
					<hr class="verticalLine">
					
					<div id="textPersonality">
						<div>
							<h4>Me considero una persona...</h4>
							<br>
							<ul>
								<li>
									<img class="icon" src="assets/rsc/img/ocurrencia.gif" alt="bombilla"> 
									<p>Resolutiva</p>
								</li>

								<li>
									<img class="icon" src="assets/rsc/img/conexion.gif" alt="conexion"> 
									<p> Empática</p>
								</li>

								<li>
									<img class="icon" src="assets/rsc/img/camaleon.gif" alt="camaleon"> 
									<p>Con gran capacidad adaptativa</p>
								</li>

								<li>
									<img class="icon" src="assets/rsc/img/estrella-fugaz.gif" alt="estrella-fugaz"> 
									<p>Perfeccionista</p>
								</li>

								<li>
									<img class="icon" src="assets/rsc/img/pulpo.gif" alt="pulpo"> 
									<p>Multitarea</p>
								</li>

							</ul>
						</div>
						<br>
						<div>
							<h4>Me gusta...</h4>
							<br>
							<ul>
								<li>
									<img  class="icon" src="assets/rsc/img/auricular.gif" alt="auricular"> 
									<p>Música (desde Lori Meyers hasta Scorpions pasando por la electrónica, pop, rock, clásica...)</p>
								</li>

								<li>
									<img  class="icon" src="assets/rsc/img/cocinando.gif" alt="cocinar">
									<p>Cocinar (sobre todo postres)</p>
								
								</li>

								<li>
									<img class="icon" src="assets/rsc/img/pastel.gif" alt="pastel"> 
									<p>Tarta de queso</p>
								</li>

								<li>
									<img class="icon" src="assets/rsc/img/huella.gif" alt="huella"> 
									<p> Animales (excepto los bichos)</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<br>
				<p style="font-style: italic; font-size: 16px">*Valoro el <strong>compañerismo</strong> y me gusta trabajar con un <strong>buen equipo.</strong></p>
				<br>
				<a id="finalCardAboutMe" class="heartbeat" href="projects.php">
					<img src="assets/rsc/img/icono_proyectos.svg" alt="icono proyectos">
					<p>Proyectos</p>
				</a>
			</div>
			<br>
			<span>&#60;/div>;</span>
			
		</div>
		<br>
		<span>&#60;/section>;</span>
		<br>
		<span>&#60;?></span>
		<div id="personalPhoto">
			<img src="assets/rsc/img/fotoPersonal.png" alt="foto personal">
		</div>
	</main>

	<!--=================
		Modales 
	==================-->

	<div id="ventanaModal" class="modal">
		<div class="contenido-modal">
			<header class="headerModal">
				<h4></h4>
				<span class="cerrar">&times;</span>
			</header>
			<img src="" alt="">
		</div>
	  </div>
	<!-- SCRIPTS -->
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>