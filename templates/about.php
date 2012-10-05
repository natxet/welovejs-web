<div class="page-header">
	<h1>Quiénes somos</h1>
</div>
<div class="row">
	<div class="span4">
		<h2>Organizadores</h2>
		<p>Los organizadores de este follón son:</p>
		<ul class="thumbnails">
			<?php foreach($config['organizers'] as $org): ?>
			<li class="span2">
				<div class="thumbnail">
					<?php if( isset($org['foto']) && file_exists("img/organizers/{$org['foto']}")): ?>
					<img src="<?=$assets_path?>img/organizers/<?=$org['foto']?>" alt="<?=$org['name']?>">
					<?php endif ?>
					<h5><?=$org['name']?></h5>
					<ul class="unstyled inline">
						<?php if(isset($org['email'])): ?>
						<li><a href="mailto:<?=$org['email']?>" class="sb small email">e-mail</a></li>
						<?php endif ?>
						<?php if(isset($org['linkedin'])): ?>
						<li><a href="<?=$org['linkedin']?>" class="sb small linkedin">Linkedin</a></li>
						<?php endif ?>
						<?php if(isset($org['twitter'])): ?>
						<li><a href="https://twitter.com/#!/<?=$org['twitter']?>" class="sb small
				twitter">Twitter</a></li>
						<?php endif ?>
					</ul>

				</div>
			</li>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="span4">
		<h2>Colaboradores</h2>
		<p>Agradecemos la colaboración de las personas que han difundido, asistido,
			impartido workshops o charlas en nuestros eventos</p>
	</div>
	<div class="span4">
		<h2>Sponsor</h2>
		<p>Agradecemos a Softonic, que nos cede las oficinas y nos invita a comer:</p>
		<ul class="thumbnails">
			<li class="span2">
				<div class="thumbnail">
					<a href="http://www.softonic.com/" title="Softonic"><img src="<?=$assets_path?>img/softonic_logo.png" alt="Softonic Logo"></a>
				</div>
			</li>
		</ul>
	</div>
</div>