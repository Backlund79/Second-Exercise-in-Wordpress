<?php /* Template Name: Front Page */ ?>

<?php get_header();?> <!--funktion för att hämta header.php -->


                            
        <main>
			<!-- nedan kod kollar efter layouts i ACF's egna fält kopplat till olika templates -->
			<?php
			if(have_rows('sektion')){
				while(have_rows('sektion')){
					the_row();
					if(get_row_layout() == 'hero'){
						get_template_part('template-parts/hero');
					}
					if(get_row_layout() == 'testemonial_black'){
						get_template_part('template-parts/testemonials');
					}
					if(get_row_layout() == 'skills'){
						get_template_part('template-parts/skills');
					}
					if(get_row_layout() == 'slideshow'){
						get_template_part('template-parts/slideshow');
					}
					if(get_row_layout() == 'reviews'){
						get_template_part('template-parts/reviews');
					}
				}
			}
			?>

		</main>



<?php get_footer();?> <!--funktion för att hämta footer.php -->