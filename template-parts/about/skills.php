
<section class="columns red text-center">
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
							<img src="<?php the_sub_field('fa_bild') ?>" />
							<h3><?php the_sub_field('kort_titel') ?></h3>
							<p><?php the_sub_field('kort_text') ?></p>
							<a href="<?php the_sub_field('button_link') ?>" class="btn btn-default"><?php the_sub_field('button') ?></a>
							</div>
					
			<?php }
				} ?>
				
		</div>
	</div>
</section>



