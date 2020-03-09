<!-- templagte som styr sladewshow i frontpage.php -->

<section class="slideshow" data-autoplay="3000" data-singleitem="true">
	<div class="slide red no-image">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 text-center">
					<i class="fa <?php the_sub_field('ikon_sida_1') ?>"></i>
				</div>
				<div class="col-xs-6">
					<h2><?php the_sub_field('titel_sida_1') ?></h2>
					<p><?php the_sub_field('text_sida_1') ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="slide black no-image">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<h2><?php the_sub_field('titel_sida_2') ?></h2>
					<p><?php the_sub_field('text_sida_2') ?></p>
				</div>
				<div class="col-xs-6 text-center">
					<img src="<?php the_sub_field('bild_sida_2') ?>" />
				</div>
			</div>
		</div>
	</div>
</section>