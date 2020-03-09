
<section class="columns black text-center">
	<div class="container">
		<div class="row top">
			<div class="col-xs-12">
				<h2><?php the_sub_field('skills_titel') ?></h2>
			</div>
		</div>
		<div class="row bottom">
		
		<?php
	if(have_rows('skills_kort')){
		while(have_rows('skills_kort')){
			the_row(); ?>
				<div class="col-xs-3">
			
				<i class="fa <?php the_sub_field('fa_bild') ?>"></i>
				<h3><?php the_sub_field('kort_titel') ?></h3>
				<p><?php the_sub_field('kort_text') ?></p>
				</div>
			<?php }
				} ?>
				
		</div>
	</div>
</section>