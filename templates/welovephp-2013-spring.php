<div class="page-header">
	<h1>Próximo evento: 13 apr 2013</h1>
	<a class="btn btn-large disabled" href="#">Apúntate</a>
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
						<div class="thumbnail"><img width="160" height="160" src="<?=$assets_path?>img/speakers/unknown.png"
													alt="Unknown"></div>
					</div>
					<div class="span10">
						<h3>(Charla) ¿Debería migrar a HipHop?</h3>
						<p>Por Daniel Pañeda</p>
						<p>HipHop es uno de los proyectos liberados por Facebook más conocidos.
							Hablaremos del estado actual del proyecto, y aprovecharé mi experiencia migrando de PHP a
							HipHop para describir los mayores problemas que supone la migración, así como los resultados obtenidos,
							con la idea de que los asistentes puedan valorar si la migración merece la pena en su caso.</p>
					</div>
				</div>
                <hr/>

				<div class="row">
					<div class="span2">
						<div class="thumbnail"><img width="160" height="160" src="<?=$assets_path?>img/speakers/sasuke.jpeg"
													alt="Sasuke"></div>
					</div>
					<div class="span10">
						<h3>(Charla) Próximamente.</h3>
						<p>Por un vengador</p>
						<p>Fuerte pero malo malo (<a href="http://es.wikipedia.org/wiki/Sasuke_Uchiha" rel="nofollow" target="_blank">Wikipedia</a>).</p>
						<p>La principal motivación de <strong>Sasuke</strong> a lo largo de la serie es la de vengar la destrucción de todo su clan por
							parte de su hermano mayor, Itachi Uchiha. Por ello, desde el principio Sasuke actúa como una persona fría e impulsada por
							el odio y la venganza. Sin embargo, logra desarrollar una actitud más simpática a medida que sus relaciones con los otros
							personajes avanza, especialmente con Naruto, a quien llega a considerar su rival.</p>
					</div>
				</div>
                <hr/>

                <div class="row">
					<div class="span2">
						<div class="thumbnail"><img width="160" height="160" src="<?=$assets_path?>img/speakers/ronny.lopez.jpg"
													alt="Ronny López"></div>
					</div>
					<div class="span10">
						<h3>(Workshop) Redis: Introducción e integración en entornos PHP</h3>
						<p>Por <strong>Ronny López</strong></p>
						<p>
							Redis es un servidor avanzado de estructuras de datos. El proyecto se
							inició en 2009 y  rápidamente creció su popularidad debido a su
							sencillez, versatilidad y excepcional rendimiento, llegando a ser hoy
							una de las piezas claves en la arquitectura de aplicaciones y sitios
							webs que requieran un alto rendimiento.
						</p>
						<p>
							En el workshop veremos cómo podemos comenzar a beneficiarnos de las
							características de Redis al instalarlo e integrarlo en un entorno PHP
							existente.
						</p>
						<p>
							Analizaremos cómo puede usarse Redis para implementar de forma simple
							casos de usos típicos del desarrollo web, así como para resolver
							ciertas clases de problemas sin que Redis llegue a ser su base de
							datos primaria.
						</p>
						<p><span class="label label-important">Requerimientos</span></p>
						<ul>
							<li>Entorno LAMP</li>
							<li>PHP  version >= 5.3.4</li>
						</ul>
					</div>
				</div>
                <hr/>

				<div class="row">
					<div class="span2">
						<div class="thumbnail"><img width="160" height="160" src="<?=$assets_path?>img/speakers/choji.jpg"
													alt="Choji"></div>
					</div>
					<div class="span10">
						<h3>(Workshop) Próximamente.</h3>
						<p>Por un guerrero</p>
						<p>¡No me digas gordo, solo estoy llenito! (<a href="http://es.wikipedia.org/wiki/Shikamaru_Nara" rel="nofollow" target="_blank">Wikipedia</a>).</p>
						<p><strong>Chōji</strong> se caracteriza por su amor a la comida, sus favoritas vendrían siendo la Barbacoa Koreana,
							dulces o golosinas y básicamente todo lo que es comestible. Su hambre casi constante es muchas
							veces una molestia para sus compañeros de equipo. A pesar de sus hábitos alimenticios Chōji es
							muy sensible acerca de su peso y se molesta mucho cuando alguien lo llama "gordo" </p>
					</div>
				</div>


			</div>
			<div class="tab-pane" id="horario">

				<table class="table table-bordered">
					<tbody>
					<tr>
						<th><i class="icon-time"></i> 10:30 - 11:00</th>
						<td>APERTURA - RECEPCIÓN</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 11:00 - 12:00</th>
						<td>(Charla) ¿Debería migrar a HipHop?</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 12:00 - 12:30</th>
						<td><em>Networking</em></td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 12:30 - 13:30</th>
						<td>(Charla) Próximamente</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 13:30 - 15:00</th>
						<td><em>Comida (Pizzas cortesía de Softonic!)</em></td>
					</tr>
					<tr>
						<th rowspan="2"><i class="icon-time"></i> 15:00 - 18:00</th>
						<td>(Workshop) Redis: Introducción e integración en entornos PHP</td>
					</tr>
					<tr>
						<td>(Workshop) Próximamente</td>
					</tr>
					</tbody>
				</table>
				<div class="alert alert-info"><i class="icon-warning-sign"></i> Importante: Los workshops son en paralelo</div>
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
