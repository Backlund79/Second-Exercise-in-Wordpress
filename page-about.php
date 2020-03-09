<?php /* Template Name: about page */ ?>

<?php get_header();?> <!--funktion för att hämta header.php -->


                            
        <main>
			
			<?php
			if(have_rows('sektion')){
				while(have_rows('sektion')){
					the_row();
					if(get_row_layout() == 'hero'){
						get_template_part('template-parts/about/hero');
                    }
                    if(get_row_layout() == 'standard'){
                        get_template_part('template-parts/about/standard');
                    }
					if(get_row_layout() == 'testemonial_black'){
						get_template_part('template-parts/about/testemonials');
                    }
                    if(get_row_layout() == 'testemonial_white'){
						get_template_part('template-parts/about/testemonials_white');
					}
					if(get_row_layout() == 'skills'){
						get_template_part('template-parts/about/skills');
					}
					if(get_row_layout() == 'slideshow'){
                        get_template_part('template-parts/about/slideshow');
                    }
                    if(get_row_layout() == 'slideshow2'){
                        get_template_part('template-parts/about/slideshow2');
                    }
					if(get_row_layout() == 'likes'){
						get_template_part('template-parts/about/likes');
					}
					if(get_row_layout() == 'reviews'){
						get_template_part('template-parts/about/reviews');
					}
				}
			}
			?>

		</main>



<?php get_footer();?> <!--funktion för att hämta footer.php -->