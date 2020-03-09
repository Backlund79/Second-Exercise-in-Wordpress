<section class="slideshow" data-autoplay="2000" data-singleitem="false" data-items="3">

<?php
	if(have_rows('slideshow_bilder')){
		while(have_rows('slideshow_bilder')){
			the_row(); ?>
			<div class="slide" style="background-image: url('<?php the_sub_field('bild') ?>');">
			</div>
			<?php 
			}
		} ?>
</section>