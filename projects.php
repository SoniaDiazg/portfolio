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

    <!-- CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/projects.css">

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
		include_once 'includes/navMobile.inc.php';
	?>

    <main id="mainProjects">
        <div id="containerTittle">
            <div id="divTittle">
                <span>echo &#60;h1></span><h2 class="tittle">Proyectos</h2><span>&#60;/h1>;</span>
            </div>
            <span>echo &#60;section></span>
        </div>
        <div id="tittleText">
            <p>Qué mejor manera de crecer que hacer pequeños proyectos personales para no dejar de aprender y desarrollar nuevas ideas.</p>
            <p>En esta sección puedes ver los proyectos que he llevado a cabo desde que comencé a estudiar programación.</p>
        </div>
        <span>&#60;?php</span>

        <div id="containerProjects">
            <div class="cardProject">
                <div class="tittleCardProyect">
                    <h4>Intranet gestión - SDTech Admin</h4>
                </div>
                <div class="imgCardProject">
                    <img src="assets/rsc/img/sdtechAdmin.png" alt="Intranet SDTech">
                </div>
                <div class="descriptionCardProject">
                    <p>Proyecto final del máster de <strong>Desarrollo Web Backend</strong> en Codeku. Intranet de gestión para una supuesta empresa teconológica donde se pueden <strong> crear y gestionar clientes, presupuestos, facturas, proyectos y tareas asociadas a ese proyecto.</strong> </p>
                    <p>El front se ha desarrollado mendiante plantilla, ajustandole estilos propios para hacerla mas personal.</p>
                    <a href="https://sdtech.es/sdtech/admin/index.php" target="_blank"><strong>https://sdtech.es/sdtech/admin/index.php</strong></a>
                    <p>
                        <strong>Credenciales:</strong><br>
                        Usuario: admin@sdtech.com <br>
                        Clave: 1234
                    </p>
                    <div class="SkillsCardProject">
                        <p><strong>Herramientas utilizadas:</strong></p>
                        <div>
                            <img class="iconHeight" src="assets/rsc/img/icono_sublime.svg" alt="">
                            <img src="assets/rsc/img/icono_php.svg" alt="">
                            <img src="assets/rsc/img/icono_phpmyadmin.svg" alt="">
                            <img src="assets/rsc/img/icono_sql.svg" alt="">
                            <img src="assets/rsc/img/icono_myslq.svg" alt="">
                            <img src="assets/rsc/img/icono_html.svg" alt="">
                            <img src="assets/rsc/img/icono_css.svg" alt="">
                            <img src="assets/rsc/img/icono_js.svg" alt="">
                            <img class="iconHeight" src="assets/rsc/img/icono_jquery.svg" alt="">
                            <img src="assets/rsc/img/icono_boostrap.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="cardProject">
                <div class="tittleCardProyect">
                    <h4>Landing - Quieromasajista VDG</h4>
                </div>
                
                <div class="imgCardProject">
                    <img src="assets/rsc/img/landing.png" alt="Landing page">
                </div>
                
                <div class="descriptionCardProject">
                    <p>Proyecto final del curso de <strong>Desarrollo Web Frontend </strong>en Coderhouse.</p>
                    <p>Quise realizar este proyecto para un familiar, ya que se encuentra en pleno crecimiento y decidí apoyar su emprendimiento.</p>
                    <p>Quise optimizar al máximo el <strong>responsive para móvil,</strong> ya que la mayoria de sus pacientes cogen cita a través de él.</p>
                    <p>El siguiente paso para este proyecto es crear un portal para que los usuarios puedan coger cita online a través de la web.</p>
                    <a href="https://vdgquiromasaje.netlify.app/" target="_blank"><strong>https://vdgquiromasaje.netlify.app/</strong></a>
                    <div class="SkillsCardProject">
                        <p><strong>Herramientas utilizadas:</strong></p>
                        <div>
                            <img src="assets/rsc/img/icono_vscode.svg" alt="">
                            <img src="assets/rsc/img/icono_html.svg" alt="">
                            <img src="assets/rsc/img/icono_css.svg" alt="">
                            <img src="assets/rsc/img/icono_sass.svg" alt="">
                            <img src="assets/rsc/img/icono_boostrap.svg" alt="">
                            <img src="assets/rsc/img/icono_git.svg" alt="">
                            <img src="assets/rsc/img/icono_github_negro.svg" alt="">
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="cardProject">
                <div class="tittleCardProyect">
                    <h4>Portfolio</h4>
                </div>
                
                <div class="imgCardProject">
                    <img src="assets/rsc/img/portfolio.png" alt="imagen portfolio">
                </div>
                
                <div class="descriptionCardProject">
                    <p>Este mismo portfolio podria considerarse tambien uno de los proyectos que he llevado a cabo tras finalizar mi última formación.</p>
                    <p>Necesitaba poner en orden todo lo que he aprendido durante este ultimo año y que mejor manera de darse a conocer que a través de un portfolio.</p>
                    <p>Actualmente estoy desarrollando otros proyectos personales, que espero poder subir dentro de poco.</p>
                    <p id="thanksText"><strong>¡Gracias por pasarte por aquí!</strong></p>
                    <div class="SkillsCardProject">
                        <p><strong>Herramientas utilizadas:</strong></p>
                        <div>
                            <img src="assets/rsc/img/icono_vscode.svg" alt="">
                            <img src="assets/rsc/img/icono_html.svg" alt="">
                            <img src="assets/rsc/img/icono_css.svg" alt="">
                            <img src="assets/rsc/img/icono_js.svg" alt="">
                            <img src="assets/rsc/img/icono_git.svg" alt="">
                            <img src="assets/rsc/img/icono_github_negro.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <span>echo &#60;/section></span>
        <span>?></span>
    </main>
	
	<!-- SCRIPTS -->
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>