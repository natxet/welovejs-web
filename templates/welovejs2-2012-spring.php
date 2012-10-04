<div class="page-header">
	<h1>Evento primavera 2012 <button class="btn btn-large btn-primary disabled">Tickets agotados
	</button></h1>
</div>
<div class="row">
	<div class="span12">
		<ul class="nav nav-tabs" id="eventContents">
			<li><a href="#speakers">Speakers</a></li>
			<li><a href="#horario">Horario</a></li>
			<li><a href="#material">Material</a></li>
		</ul>

		<div class="tab-content">
			<div class="tab-pane" id="speakers">
				<ul class="thumbnails">
					<li class="span2">
						<div class="thumbnail">
							<img src="<?=$assets_path?>img/speakers/carlos.villuendas.png" alt="Carlos Villuendas">
							<br/>
							<p>Carlos Villuendas</p>
							<ul class="unstyled inline">
								<li><a href="mailto:carlosvillu@gmail.com" class="sb small email">e-mail</a></li>
								<li><a href="https://twitter.com/#!/cvillu" class="sb small twitter">Twitter</a></li>
								<li><a href="https://www.facebook.com/carlos.villu" class="sb small facebook">Facebook</a></li>
								<li><a href="http://es.linkedin
						.com/pub/carlos-villuendas/22/441/449" class="sb small linkedin">Linkedin</a></li>
							</ul>
						</div>
					</li>
					<li class="span2">
						<div class="thumbnail">
							<img src="<?=$assets_path?>img/speakers/pere.monfort.png" alt="Pere Monfort">
							<br/>
							<p>Pere Monfort</p>
							<ul class="unstyled inline">
								<li><a href="mailto:peremonfort@gmail.com" class="sb small email">e-mail</a></li>
								<li><a href="https://twitter.com/#!/peremonfort" class="sb small twitter">Twitter</a></li>
								<li><a href="http://es.linkedin.com/pub/pere-monfort-p%C3%A0mies/21/757/602" class="sb small linkedin">Linkedin</a></li>
							</ul>
						</div>

					</li>
					<li class="span2">
						<div class="thumbnail">
							<img src="<?=$assets_path?>img/speakers/oscar.anton.png" alt="Oscar Anton">
							<br/>
							<p>Oscar Anton</p>
							<ul class="unstyled inline">
								<li><a href="mailto:oscar@molecularts.com" class="sb small email">e-mail</a></li>
								<li><a href="https://twitter.com/#!/oscaranton" class="sb small twitter">Twitter</a></li>
								<li><a href="https://www.facebook.com/oscar.memento" class="sb small facebook">Facebook</a></li>
								<li><a href="http://es.linkedin.com/pub/%C3%B3scar-ant%C3%B3n-mingorance/25/748/b10" class="sb small linkedin">Linkedin</a></li>
							</ul>
						</div>
					</li>
					<li class="span2">
						<div class="thumbnail">
							<img src="<?=$assets_path?>img/speakers/pablo.villalba.png" alt="Pablo Villalba">
							<br/>
							<p>Pablo Villalba</p>
							<ul class="unstyled inline">
								<li><a href="https://twitter.com/#!/micho" class="sb small twitter">Twitter</a></li>
								<li><a href="https://www.facebook.com/michokest" class="sb small facebook">Facebook</a></li>
								<li><a href="http://www.linkedin.com/in/micho" class="sb small linkedin">Linkedin</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
			<div class="tab-pane" id="horario">
				<table class="table table-bordered">
					<tbody>
					<tr>
						<td><i class="icon-time"></i> 10:00 - 11:00</td>
						<th>Recepción</th>
					</tr>
					<tr>
						<td><i class="icon-time"></i> 11:00 - 12:00</td>
						<th>CofeeScript</th>
					</tr>
					<tr>
						<td><i class="icon-time"></i> 12:00 - 12:30</td>
						<th>Networking</th>
					</tr>
					<tr>
						<td><i class="icon-time"></i> 12:30 - 13:30</td>
						<th>Desarrollo Juegos</th>
					</tr>
					<tr>
						<td><i class="icon-time"></i> 13:30 - 15:00</td>
						<th>Comida</th>
					</tr>
					<tr>
						<td rowspan="2"><i class="icon-time"></i> 15:00 - 18:00</td>
						<th>Workshop: Backbone.js</th>
					</tr>
					<tr>
						<th>Workshop: Phonegap.js</th>
					</tr>
					</tbody>
				</table>
			</div>
			<div class="tab-pane" id="material">
				<table class="table table-bordered">
					<tbody>


					<tr>
						<td>Carlos Villuendas: <strong>Cofeescript</strong></td>
						<td>
							<iframe width="360" height="228" src="http://www.ustream.tv/embed/recorded/22184701" scrolling="no" frameborder="0" style="border: 0px none transparent;">    </iframe>
							<br/>
							<a class="btn btn-small" href="https://speakerdeck.com/u/carlosvillu/p/coffeescript-improving-js-since-2010"><i
								class="icon-picture"></i> Slides</a>
						</td>
					</tr>
					<tr>
						<td>Pere Monfort: <strong>Project Cyan</strong></td>
						<td>
							<iframe width="360" height="228" src="http://www.ustream.tv/embed/recorded/22185822" scrolling="no" frameborder="0" style="border: 0px none transparent;">    </iframe>
							<br/>
							<a class="btn btn-small" href="<?=$assets_path?>material/project-cyan.zip"><i
								class="icon-picture"></i> Slides</a>
						</td>
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
