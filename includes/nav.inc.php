<?php 
	$year = date("Y");
?>

<nav class="navDesktop">
	<button id="button-menu" class="button-menu"><a href="index.php"><img class="letraS" src="assets/rsc/img/S.svg" alt="letra s"></a></button>
	<br><br>
	<div id="menu">
		<a href="aboutMe.php">Sobre mi</a>
		<hr>
		<a href="projects.php">Proyectos</a>
		<hr>
		<a>Contacto</a>
	</div>
	<div id="socialMedia">
		<a href="https://www.linkedin.com/in/sonia-díaz-garzon" target="_blank"><img src="assets/rsc/img/icono_linkedin.svg" alt="icono Linkedin"></a>
		<a href="mailto:soniadiazgarzonsdg@gmail.com" target="_blank"><img src="assets/rsc/img/icono_email.svg" alt="icono Email"></a>
		<a href="https://github.com/SoniaDiazg" target="_blank"><img src="assets/rsc/img/icono_gitHub.svg" alt="icono gitHub"></a>
	</div>
	<div id="copyright">
		<p> &copy; Sonia Diaz Garzon <?php echo $year; ?> </p>
	</div>
</nav>