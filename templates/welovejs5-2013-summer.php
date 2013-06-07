<div class="page-header">
	<h1>Pr&oacute;ximo evento: 15 de junio de 2013
		<a class="btn btn-large btn-success" href="http://welovejs5.eventbrite.com/"
		   target="_blank">¡Consigue tu entrada!</a>
        </h1>
</div>
<div class="row">
	<div class="span12">
		<nav>
			<ul class="nav nav-tabs" id="eventContents">
				<li><a href="#talks">Charlas</a></li>
				<li><a href="#horario">Horario</a></li>
			</ul>
		</nav>

		<div class="tab-content">
            <div class="tab-pane" id="talks">
            	<h2>Charlas</h2>
				<div class="row">
                    <div class="span2">
                        <div class="thumbnail">
                        	<img src="<?=$assets_path?>img/speakers/jose.deblas.png" alt="Jose de Blas" />
						</div>
                    </div>
                    <div class="span10">
                        <h3>Charla: SEO for Single Page Webapps / Websites</h3>
                        <p>Por <strong><a href="https://twitter.com/#!/wecanbuygoogle">Jose de Blas</a></strong></p>
						<h4>BIO</h4>
						<p>	Especialista SEO en Softonic con más de 10 años de experiencia en el sector internet.
							Ha trabajado como programador, CTO y analista web, pero su pasión la encontramos
							en el posicionamiento web. Es un convencido de que el SEO OnPage no está reñido
							ni con las buenas prácticas, ni con las nuevas tecnologías. Por ello busca siempre
							el perfeccionamiento desde un punto de vista técnico.
						</p>
						<h4>Sobre la charla</h4>
                        <p>Hoy en día es difícil encontrarse con webs que no utilicen JS, pero demasiado
							a menudo las tecnologías más avanzadas chocan con la visibilidad en buscadores.
							Tendremos la oportunidad de hablar sobre:
							<ul>
								<li>¿Qué código pueden seguir los robots?</li>
								<li>Cómo utilizar javascript en beneficio SEO</li>
								<li>Cómo hacer visible aplicaciones web single page o webs basadas en AJAX.</li>
							</ul>
						 </p>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="span2">
                        <div class="thumbnail"><img src="<?=$assets_path?>img/speakers/jorge.delcasar.jpeg"
                                                    alt="Jorge del Casar">
						</div>
                    </div>
                    <div class="span10">
                        <h3>Workshop: HTML5 Webworks SDK for Blackberry 10</h3>
                        <p>Por <strong><a href="https://twitter.com/#!/jorgecasar">Jorge del Casar</a></strong></p>
                        <h4>BIO</h4>
                        <p>Tras 10 años en el desarrollo web, trabajando en empresas como Softonic.com,
                            me he cambiado de bando al desarrollo de aplicaciones
                            móviles sin dejar de lado las tecnologías web,
                            sigo desarrollando usando los standards HTML5 y por supuesto Javascript.
                            Actualmente soy BlackBerry Developer Evangelist, por lo que enseño
                            y promuevo el desarrollo en la nueva plataforma BlackBerry 10.</p>
                        <h4>Sobre la charla</h4>
                        <p>BlackBerry 10 dispone del navegador con mejor soporte a HTML5
                            del mercado actual. Y por ello damos la oportunidad de desarrollar
                            aplicaciones utilizando tus conocimientos de HTML, CSS y Javascript
                            que correrán como aplicación local. Veremos cómo emplear dichos
                            conocimientos en el desarrollo de aplicaciones móviles y algunas
                            de las APIs que pone WebWorks a tu disposición para acceder a
                            información específica de BlackBerry.</p>
                        <h4 class="label label-important">Requerimientos (cada punto es necesario)</h4>
                        <ul>
                            <li><a href="https://developer.blackberry.com/html5/download/">BlackBerry 10 WebWorks SDK</a></li>
                            <li><a href="<https://developer.blackberry.com/html5/download/">BlackBerry 10 Simulator</a>:
                             Requiere <a href="http://www.vmware.com/products/player/">Vmware Player for Windows</a> (free) or
                             <a href="http://www.vmware.com/products/fusion/overview.html">VMware Fusion for Mac</a>
                             (43,07€ - oferta Mayo: 34,45€).</li>
                             <li>Navegador <a href="https://chrome.google.com">Google Chrome</a></li>
                             <li>
            <a href="https://chrome.google.com/webstore/detail/ripple-emulator-beta/geelfhphabnejjhdalkjhgipohgpdnoc">Plugin Ripple Emulator</a>
             (<a href="http://ripple.incubator.apache.org/">Apache Ripple Open Source Project</a>)</li>
                             <li>Pregunta por <em>SignedKeys</em> at the <a href="https://www.blackberry.com/SignedKeys">Blackberry Homepage</a>
                              para acelerar el proceso de la configuración (en menos de 2 horas se recibe los ficheros)</li>
                        </ul>
                    </div>
                </div>
                <hr/>
            </div>
			<div class="tab-pane" id="horario">
				<h2>Horario</h2>
				<table class="table table-bordered">
					<tbody>
					<tr>
						<th><i class="icon-time"></i> 9:00 - 09:30</th>
						<td>APERTURA - RECEPCI&Oacute;N</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 09:30 - 10:30</th>
						<td>Charla: SEO for Single Page Webapps / Websites</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 10:45 - 13:45</th>
						<td>Workshop: Blackberry SDK</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 14:00 - 16:00</th>
						<td><i>Comida (Pizzas cortes&iacute;a de Softonic!)</i></td>
					</tr>
					</tbody>
				</table>
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
