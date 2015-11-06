<?php require_once 'app/init.php'; ?>
<?php echo View::make('header')->render() ?>
<div class="jumbotron" style="text-align: center; background: none;">
	<h1>Facturen</h1>
<div class="row">
	<div class="col-md-6">
			<ul class="box-wrap">
				<h3>Houder</h3>
				<div class="bw">
					<li>Naam: <?php echo Auth::user()->display_name ?><li>
					<li>E-mail: </li>
					<li>
						<?php
						{
							return isset($this->usermeta['url']) ? $this->usermeta['url'] : '';
						}
						?>
					</li>

					<li>Woonplaats 1234 XX</li>
				</div>
			</ul>
	</div>
	<div class="col-md-6">
			<ul class="box-wrap">
				<h3>Facturen</h3>
				<div class="bw">
					<li>Bedrijfsnaam</li>
					<li>Laatste factuur: onbetaald</li>
				</div>
			</ul>
	</div>
		<!-- <?php echo ajax_comments('1', 'My page'); ?>
		<!-- Embeded version with iframe -->
		<!--
		<div id="embed_comments"></div>
		<script src="<?php echo asset_url('js/embed-comments.js') ?>"></script>
		<script> embedComments('#embed_comments', '1', 'My Page'); </script>
		-->
	</div>
</div>
</div>
<?php echo View::make('footer')->render() ?>
