<div class="page-header">
	<h1>Próximo evento: 29 sep 2012
		<a class="btn btn-large btn-primary disabled" href="http://welovejs3.eventbrite.com/"
		   target="_blank">Entradas agotadas!</a></h1>
</div>
<div class="row">
	<div class="span12">
		<ul class="nav nav-tabs" id="eventContents">
			<li><a href="#talks">Charlas</a></li>
			<li><a href="#horario">Horario</a></li>
		</ul>

		<div class="tab-content">
			<div class="tab-pane" id="talks">

				<div class="row">
					<div class="span2">
						<div class="thumbnail"><img src="<?=$assets_path?>img/speakers/marc.rubino.jpg"
													alt="Marc Rubiño"></div>
					</div>
					<div class="span10">
						<h3>Charla sobre Windows 8 para desarrolladores web</h3>
						<p>Por <strong>Marc Rubiño</strong></p>
						<p>Con la llegada del nuevo sistema operativo Windows 8 se abre un abanico de posibilidades para los
							desarrolladores web impresionante ya que el sistema operativo corre las aplicaciones html5 y  JavaScript de forma nativa.
							Es hora de que nos pongamos manos a la obre y utilicemos nuestros conocimientos como desarrolladores web para realizar aplicaciones de escritorio realmente ricas y usables.
							Veremos de forma prática como realizar una aplicación sencilla para windows 8 con HTML y JavaScript.</p>

					</div>
				</div>
				<hr/>
				<div class="row">
					<div class="span2">
						<div class="thumbnail"><img src="<?=$assets_path?>img/speakers/carlos.villuendas.jpg"
													alt="Carlos Villuendas"></div>
					</div>
					<div class="span10">
						<h3>Charla sobre Hydra.js modula tu código</h3>
						<p>Por <strong>Carlos Villuendas</strong></p>
						<p>Hydra.js es un framework que le facilita las herramientas para escribir su aplicación utilizando módulos o
							widgets y hace fácil el trabajar con ellos. Hydra.js utiliza una arquitectura desacoplada que:</p>
						<ul>
							<li>Permite cambiar you framework base sin tener que cambiar el código de tus módulos o widgets</li>
							<li>Permite a los módulos comunicarse con el resto sin conocer que módulos han sido cargados.</li>
							<li>Puede extenderse fácilmente con nuevas funcionalidades.</li>
						</ul></p>
					</div>
				</div>
				<hr/>
				<div class="row">
					<div class="span2">
						<div class="thumbnail"><img src="<?=$assets_path?>img/speakers/javier.martin.jpg"
													alt="Javi Martín"></div>
					</div>
					<div class="span10">
						<h3>Workshop Backbone.js Avanzado</h3>
						<p>Por <strong>Javi Martín</strong></p>
						<p><a href="https://docs.google.com/document/d/1Xv_unkLWL9fElj_vTgjrgxTRrVAc8tUo81XsrUJedFA/edit?pli=1"
							  target="_blank"
							  class="label label-important">Requerimientos</a></p>
						<p>¿Qué es Backbone.js? Backbone.js nos va a ayudar a estructurar nuestro código en el cliente de forma
							eficiente. y evitando todo ese engorroso código espagueti que tan a menudo acaba siendo nuestro JS.
							De la mano del mismo creador de CoffeeScript vamos a realizar un pequeño ejercicio introductorio de esta
							tenología.</p>
						<p>En este workshop se tocará Backbone.js dandole una vuelta de tuerca para hacer una aplicación donde se veran
							todos aquellos puntos que normalmente no vemos en otros tutoriales.</p>
					</div>
				</div>
				<hr/>
				<div class="row">
					<div class="span2">
						<div class="thumbnail"><img src="<?=$assets_path?>img/speakers/carlos.buenosvinos.jpg"
													alt="Carlos Buenosvinos"></div>
					</div>
					<div class="span10">
						<h3>Workshop Titanium Mobile Development Platform</h3>
						<p>Por <strong>Carlos Buenosvinos</strong></p>
						<p><a href="https://docs.google.com/document/d/1xRRJ6ZpICHkDlY2OVE-JRbYZGapEXQsEWUY_tjQHX2c/edit?pli=1"
							  target="_blank"
							  class="label label-important">Requerimientos</a></p>
						<p>¿Qué es Titanium? Appcelerator Titanium es una plataforma para desarrollar aplicaciones móviles y de
							escritorio utilizando tecnologías web.</p>
						<p>En este workshop se mostrarán los conceptos necesarios para desarrollar aplicaciones móviles usando
							Titanium y los asistentes crearan una aplicación que podrán probar en sus dispositivos al salir del mismo.</p>
					</div>
				</div>

			</div>
			<div class="tab-pane" id="horario">

				<table class="table table-bordered">
					<tbody>
					<tr>
						<th><i class="icon-time"></i> 10:00 - 11:00</th>
						<td>APERTURA - RECEPCIÓN</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 11:00 - 12:00</th>
						<td>Charla sobre Windows 8 para desarrolladores Web</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 12:00 - 12:30</th>
						<td><i>Networking</i></td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 12:30 - 13:30</th>
						<td>Charla sobre Hydra.js modula tu código</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 13:30 - 15:0</th>
						<td><i>Comida (Pizzas cortesía de Softonic!)</i></td>
					</tr>
					<tr>
						<th rowspan="2"><i class="icon-time"></i> 15:00 - 18:00</th>
						<td>Workshop Backbone.js Avanzado</td>
					</tr>
					<tr>
						<td>Workshop Titanium Mobile Development Platform</td>
					</tr>
					</tbody>
				</table>
				<div class="alert alert-info">Importante: Los workshops son en paralelo</div>
			</div>
		</div>

		<script>
			$('.nav-tabs a').click(function (e) {
				e.preventDefault();
				$(this).tab('show');
			});
			$(function () {
				$('#eventContents a:first').tab('show');
			});
		</script>
	</div>
</div>
