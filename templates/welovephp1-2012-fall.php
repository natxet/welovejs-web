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
						<div class="thumbnail"><img src="<?=$assets_path?>img/speakers/default.jpg"
													alt="Super Teemo"></div>
					</div>
					<div class="span10">
						<h3>(Charla) Próximamente.</h3>
						<p>Por <strong>Un Crack</strong></p>
						<p>Mientras no se haga público este <em>speaker</em>, te dejamos con el patrón de diseño Factory Method de <a href="http://es.wikipedia.org/wiki/Factory_Method_(patr%C3%B3n_de_dise%C3%B1o)" rel="nofollow" target="_blank">Wikipedia</a>.</p>
						<p><blockquote>Factory Method consiste en utilizar una clase constructora (al estilo del Abstract Factory) abstracta con unos cuantos
							métodos definidos y otro(s) abstracto(s): el dedicado a la construcción de objetos de un subtipo de un tipo determinado.
							Es una simplificación del Abstract Factory, en la que la clase abstracta tiene métodos concretos que usan algunos de los
							abstractos; según usemos una u otra hija de esta clase abstracta, tendremos uno u otro comportamiento.</blockquote></p>
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
                        <div class="thumbnail"><img src="<?=$assets_path?>img/speakers/default.jpg"
                                                    alt="Sauron"></div>
                    </div>
                    <div class="span10">
                        <h3>(Workshop) Próximamente.</h3>
                        <p>Por <strong>Una Leyenda</strong></p>
                        <p>Y para acabar el patrón de diseño State (obviously de <a href="http://es.wikipedia.org/wiki/State_(patr%C3%B3n_de_dise%C3%B1o)" rel="nofollow" target="_blank">Wikipedia</a>).</p>
                        <p><blockquote>El patrón de diseño State se utiliza cuando el comportamiento de un objeto cambia dependiendo del estado del
						mismo. Por ejemplo: una alarma puede tener diferentes estados, como desactivada, activada, en configuración. Definimos
						una interfaz Estado_Alarma, y luego definimos los diferentes estados.</blockquote></p>
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
						<td>Charla sobre "Resultados de búsqueda rápidos, relevantes y útiles con Apache Solr".</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 12:00 - 12:30</th>
						<td><em>Networking</em></td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 12:30 - 13:30</th>
						<td>(Charla) Próximamente.</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 13:30 - 15:00</th>
						<td><em>Comida (Pizzas cortesía de Softonic!)</em></td>
					</tr>
					<tr>
						<th rowspan="2"><i class="icon-time"></i> 15:00 - 18:00</th>
						<td>Workshop "BDD con Behat y Mockery".</td>
					</tr>
					<tr>
						<td>(Workshop) Próximamente.</td>
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
