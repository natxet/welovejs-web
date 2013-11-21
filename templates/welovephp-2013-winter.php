<div class="page-header">
	<h1>Próximo evento: 30 Nov 2013</h1><br />
	<a rel="nofollow" href="http://welovephp4.eventbrite.es/" target="_blank" class="btn btn-success btn-large">Apúntate</a>
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
						<div class="thumbnail"><img width="160" height="160" src="<?=$assets_path?>img/speakers/adan.lobato.jpeg"
													alt="Adan Lobato"></div>
					</div>
					<div class="span10">
						<h3>Mastering Composer</h3>
						<p>Por <a rel="nofollow" href="https://twitter.com/adanlobato" target="_blank">Adan Lobato</a> <span class="label label">En Español</span></p>
						<p>
							In less than 2 years since it came out, Composer has become an important part of our day to day work, revolutionizing the PHP community allowing better interoperability between projects.
						</p>
						<p>
							But Composer is not the easiest and more intuitive tool out there, so we constantly run into problems that are not easy to solve.
						</p>
						<p>
							If you want answers to problems like learning how to use and trust in semantic versioning, create and configure your own private repositories (Satis/Packagist), using installers or embedded Composer... and more advanced tips and tricks, this talk is for you!
						</p>
					</div>
				</div>
                <hr/>

				<div class="row">
					<div class="span2">
						<div class="thumbnail"><img width="160" height="160" src="<?=$assets_path?>img/speakers/jorge.tarrero.jpg"
													alt="Jorge Tarrero"></div>
					</div>
					<div class="span10">
						<h3>Advanced use of Sphinx search</h3>
						<p>Por <a href="https://twitter.com/dae" rel="nofollow" target="_blank">Jorge Tarrero</a> <span class="label label">En Español</span></p>
						<p>Sphinx is a really popular full-text search engine, currently being used by big websites like Craiglist, Tumblr, Softonic, etc. In this workshop, we'll see real life examples about how to get the most out of this tool, like geolocalize features, lists, rankings, tag clouds, etc. </p>
						
						<p><span class="label label-important">Requisitos</span></p>
						<ul>
							<li>A LAMP environment (MySQL included)</li>
							<li>You need to bring your own laptop with the last version of Sphinx (with MySQL support) already installed. If you don't have it, you can follow <a href="http://www.sphinxdev.com/empecemos-instalando-sphinx-linux-2280430" target="_blank">this tutorial written by Jorge himself</a>.</li>
						</ul>
					</div>
				</div>
                <hr/>



			</div>
			<div class="tab-pane" id="horario">

				<table class="table table-bordered">
					<tbody>
					<tr>
						<th><i class="icon-time"></i> 9:45 - 10:00</th>
						<td>APERTURA - RECEPCIÓN</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 10:00 - 11:00</th>
						<td>Advanced Composer</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 11:00 - 14:00</th>
						<td>Sphinx search for real life applications</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 14:00 - 15:00</th>
						<td><em>Comida (Pizzas cortesía de Softonic!)</em></td>
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
