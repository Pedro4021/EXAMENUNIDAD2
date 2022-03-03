<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>blog de lesly y uriel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>MODELOS CLIENTE / SERVIDOR SEGÚN EL REPARTO DE FUNCIONES ENTRE CLIENTE Y SERVIDOR</h1>
						
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<span class="image main"><img src="images/software-developer-g7ea01e4cc_1280.jpg" alt="" /></span>
								
								<p>     Según cómo se distribuyan las funciones correspondientes a estas tres lógicas o funciones de un sistema entre cliente, middleware y servidor (los principales componentes de un sistema con arquitectura distribuída) nos podemos encontrar con los siguientes tipos de arquitectura cliente / servidor (conforme a la célebre clasificación hecha por el Gartner Group):
								</p>
								
								 
								<h2>PRESENTACION DISTRIBUIDA: </h2>
								<p><span class="image left">
									<img src="images/Opera Captura de pantalla_2022-02-20_201326_slideplayer.es.png" alt="" />
								</span>
								El cliente asume parte de las funciones de la presentación de la aplicación,
								 ya que siguen existiendo programas en el servidor dedicados a esta tarea. 
								El resto de funciones de la aplicación y residen en el servidor.
								<p>
									Esta arquitectura sirve para construir emuladores de terminal, 
									aplicaciones de control remoto, front ends gráficos de aplicaciones que residen en un host, etc
									Algunos ejemplos de productos que siguen esta filosofía son VLC, Microsoft Terminal Server, Cytrix Metaframe,
								<br> La gran ventaja de esta arquitectura es que permite volver a utilizar sistemas y aplicaciones antiguas que funcionen en entornos host.

								</p>
							
								
								<h2>PRESENTACION REMOTA: </h2>
								<p><span class="image right">
									<img src="images/Opera Captura de pantalla_2022-02-20_201244_slideplayer.es.png" alt="" />
								</span>
								Toda la lógica de negocio y acceso a datos se ejecuta en el servidor,Todas las funciones de presentación son ejecutadas en el cliente. 
								Un ejemplo de este tipo de aplicaciones son las aplicaciones web, las de los terminales de cajeros automáticos, etc.


								<p>
									La principal ventaja es que la interfaz de usuario se adapta bien a las capacidades del entorno cliente
 								La principal desventaja es que toda la información necesaria para la presentación tiene que circular por la red desde el servidor al cliente.
								
								</p>
								<h2>LOGICA O PROCESO DISTRIBUIDO: </h2>
								<p><span class="image left">
									<img src="images/Opera Captura de pantalla_2022-02-20_202115_slideplayer.es.png" alt="" />
								</span>
								La lógica de los procesos se divide entre los distintos componentes del cliente y del servidor. El diseñador de la aplicación debe definir los servicios y las interfaces del sistema de información de forma que los papeles de cliente y servidor sean intercambiables, excepto en el control de los datos que es responsabilidad exclusiva del servidor. En este tipo de situaciones se dice que hay un proceso distribuido o cooperativo.

								
								<p>
									La principal ventaja de esta arquitectura es que cada uno de los servidores puede especializarse en un área determinada, 
								de forma que cada proceso se ejecutará en el servidor más apropiado.
								
								</p>
								<h2>ACCESO A DATOS REMOTOS: </h2>
								<p><span class="image right">
									<img src="images/Opera Captura de pantalla_2022-02-20_202913_slideplayer.es.png" alt="" />
								</span>
								El cliente realiza tanto las funciones de presentación como los procesos. Por su parte, el servidor almacena y gestiona los datos que permanecen en una base de datos centralizada. 

								<p>
									La principal ventaja de esta arquitectura radica en su sencillez de uso, y su proliferación al ser adaptada por lenguajes de cuarta generación . 
									La desventaja es la latencia de red introducida. Al descargarse toda la lógica de proceso en los aplicativos clientes, estos necesitan descargar los datos necesarios que circulan por la red.
								</p>

								<h2>BASE DE DATOS DISTRIBUIDAS:  </h2>
								<p><span class="image left">
									<img src="images/Opera Captura de pantalla_2022-02-20_202115_slideplayer.es.png" alt="" />
								</span>
								Este modelo es similar al de Acceso a Datos Remoto, 
								pero además el gestor de base de datos divide sus componentes entre el cliente y el servidor. 
								Las interfaces entre ambos están dentro de las funciones del gestor de datos y, 
								por lo tanto, no tienen impacto en el desarrollo de las aplicaciones.
								 En este nivel se da lo que se conoce como bases de datos distribuidas.
								<p>
									La principal ventaja de este modelo es que facilita el acceso a los datos desde entornos heterogéneos. Los componentes de acceso a datos ubicados en el cliente permiten independizar la base de datos del entorno en el que corren las aplicaciones cliente. Además, permite implementar la "transparencia de ubicación". Este sistema presenta dos importantes inconvenientes:
									Las bases de datos distribuídas son más difíciles de implementar, y son dependientes del gestor de base de datos 
									La integridad de los datos puede verse comprometida.
								</p>
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<h2>inicio</h2>
							<ul class="actions">
								<li><a href="unidad2.html" class="button">Volver</a></li>
							</ul>
						</section>
						<section>
							<h2>CONTACTO</h2>
							<dl class="alt">
								<dt></dt>
								
								
								
								<dt>pedro_1320114012@uptecamac.edu.mx</dt>
								<dt>lesly_1320114006@uptecamac.edu.mx
								</dt>
							</dl>
							<ul class="icons">
								<li><a href="#" class="icon brands fa-twitter alt"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-instagram alt"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands fa-github alt"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands fa-dribbble alt"><span class="label">Dribbble</span></a></li>
							</ul>
						</section>
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html><?php /**PATH C:\Users\Toshiba\Desktop\ur\Nueva carpeta\blog\resources\views/blog/modelos.blade.php ENDPATH**/ ?>