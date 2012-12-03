<div class="page-header">
	<h1>Próximo evento: 15 dic 2012</h1>
	<h2>Inscripción abierta a partir del 3 de diciembre</h2>
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
						<div class="thumbnail"><img src="<?=$assets_path?>img/speakers/santiago.lizardo.jpg"
													alt="Santiago Lizardo"></div>
					</div>
					<div class="span10">
						<h3>(Charla) "Resultados de búsqueda rápidos, relevantes y útiles con Apache Solr".</h3>
						<p>Por <strong>Santiago Lizardo</strong></p>
						<p>Apache Solr es uno de los proyectos más populares cuando hablamos de indexación y búsquedas. Actualmente lo están usando
							muchas de las compañías más exitosas de internet, por numerosas razones. ¿Tienes curiosidad por saber qué razones? Ven a
							la charla y lo sabrás, independientemente de cual sea la tecnología que utilices para desarrollar tu aplicación.</p>
						<p>Cierto, aprovecharé para realizar una comparación entre Apache Solr y Sphinx. Ya te puedes imaginar quién sale vencedor.</p>
					</div>
				</div>
                <hr/>

                <div class="row">
                    <div class="span2">
                        <div class="thumbnail"><img src="<?=$assets_path?>img/speakers/javier.linares.jpg"
                                                    alt="Javier Linares"></div>
                    </div>
                    <div class="span10">
                        <h3>(Charla) "Debugging/profiling con xhprof y xdebug"</h3>
                        <p>Por <strong>Javier Linares</strong> y <strong>Javier Carranza Abadía</strong></p>
                        <p>En 1995 el reto era tener web. Hoy el reto está en servirla con el menor
                            coste y la mayor velocidad para el usuario. Esta sesión introduce el
                            profiling con xhprof y cómo entender los números que se pueden extraer.
                            Una vez identificados los problemas, veremos cómo entrar a solucionarlos
                            usando xdebug
                        </p>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="span2">
                        <div class="thumbnail"><img src="<?=$assets_path?>img/speakers/marcos.quesada.jpg"
                                                    alt="Marcos Quesada"></div>
                    </div>
                    <div class="span10">
                        <h3>(Workshop) "BDD con Behat y Mockery"</h3>
                        <p>Por <strong>Marcos Quesada</strong></p>
                        <p>En el mundo del testing cada vez es más apreciado el testing funcional como forma de asegurar las expectativas de negocio.
							El BDD surge como un gran complemento al TDD en los ciclos de integración continua al garantizar el servicio de las
							funcionalidades desarrolladas, el mayor exponente en php es el framework 'ágil' Behat.
                            El workshop se centrará en Behat , y todos sus componentes , incluyendo la librería Mockery como alternativa a los Mocks tradicionales de PHPUnit.
                        </p>
                        <p><span class="label label-important">Requerimientos</span></p>
                        <ul>
                            <li>Entorno LAMP (PHP >= 5.3)</li>
                            <li>Git</li>
                        </ul>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="span2">
                        <div class="thumbnail"><img src="<?=$assets_path?>img/speakers/zoltan.tothczifra.jpg"
                                                    alt="Zoltan Tothczifra"></div>
                    </div>
                    <div class="span10">
                        <h3>(Workshop) "Introduction to Hadoop: What if Google was written in PHP"</h3>
                        <p>Por <strong>Zoltán Tóth-Czifra</strong></p>
                        <p>Have you ever heard of Hadoop? and Google's BigData? Hadoop is a massively parallel processing system which has been
							inspired by Google's BigData platform, the technology that allows them to implement their famous search algorithm on the
							scale of the World Wide Web. In this workshop we will learn the basics of Hadoop and the MapReduce framework and see that
							we can write our own MapReduce programs without any Java knowledge. We are going to try to implement Google's famous
							PageRank algorithm with PHP which then would be able to run on any Hadoop cluster.
						</p>
                        <p><span class="label label-important">Requerimientos</span></p>
                        <ul>
                            <li>The workshop will be in English.</li>
                            <li>More to be defined.</li>
                        </ul>
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
						<td>(Charla) "Resultados de búsqueda rápidos, relevantes y útiles con Apache Solr".</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 12:00 - 12:30</th>
						<td><em>Networking</em></td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 12:30 - 13:30</th>
						<td>(Charla)"Debugging/profiling con xhprof y xdebug"</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 13:30 - 15:00</th>
						<td><em>Comida (Pizzas cortesía de Softonic!)</em></td>
					</tr>
					<tr>
						<th rowspan="2"><i class="icon-time"></i> 15:00 - 18:00</th>
						<td>(Workshop) "BDD con Behat y Mockery".</td>
					</tr>
					<tr>
						<td>(Workshop) "Introduction to Hadoop: What if Google was written in PHP"</td>
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
