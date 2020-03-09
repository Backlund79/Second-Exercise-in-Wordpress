<section class="columns text-center">
	<div class="container">
		<div class="row top">
			<div class="col-xs-12">
				<h2><?php the_sub_field('likes_titel') ?></h2>
			</div>
		</div>
		<div class="row bottom">
			<?php	if(have_rows('likes_rep')){
		while(have_rows('likes_rep')){
			the_row(); ?>
			<div class="col-xs-6">

				<i class="fa <?php the_sub_field('logo') ?>"></i>
				<h3><?php the_sub_field('titel') ?></h3>
				<p><?php the_sub_field('text') ?></p>
			</div>
			<?php }
				} ?>






		</div>
	</div>
</section>