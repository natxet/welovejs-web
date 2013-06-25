<div class="page-header">
	<h1>Próximo evento: 13 jul 2013</h1><br />
	<a class="btn btn-large" disabled="disabled">Apúntate</a>
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
						<div class="thumbnail"><img width="160" height="160" src="<?=$assets_path?>img/speakers/christof.damian.jpg"
													alt="Christof Damian"></div>
					</div>
					<div class="span10">
						<h3>Methodologies and tools used in the development team</h3>
						<p>Por un <a rel="nofollow" href="https://twitter.com/cdamian" target="_blank">Christof Damian</a></p>
						<p>Christof is the Platform Architect at Splendia and will explain in
							this talk the methodologies and tools used in the development team.
							Splendia uses various technologies to make it as easy and fast as
							possible for developers to release changes while at the same time
							allowing as many freedoms on their work as possible.
							<i>Talk will be in English</i>.
						</p>
					</div>
				</div>
                <hr/>

				<div class="row">
					<div class="span2">
						<div class="thumbnail"><img width="160" height="160" src="<?=$assets_path?>img/speakers/default.jpg"
													alt="Sasuke"></div>
					</div>
					<div class="span10">
						<h3>Workshop</h3>
						<p>Por un genio</p>
						<p><strong><a target="_blank" rel="nofollow" href="http://es.wikipedia.org/wiki/Memento_(patr%C3%B3n_de_dise%C3%B1o)">Memento</a></strong> Memento, es un patrón de diseño, cuya finalidad es almacenar el estado de un objeto (o del sistema completo) en un momento dado de manera que se pueda restaurar en ese punto de manera sencilla.</p>
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
						<td>Methodologies and tools used in the development team</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 11:00 - 14:00</th>
						<td>Workshop</td>
					</tr>
					<tr>
						<th><i class="icon-time"></i> 14:00 - 16:00</th>
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
