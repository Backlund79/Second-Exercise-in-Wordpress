<?php /* Template Name: Kontakt */ ?>

<?php get_header();?>
    <!-- denna sidan visar undersida 3 -->
<main>
<section class="hero small" style="background-image: url('<?php the_post_thumbnail_url() ?>');">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 column">
							<div class="text">
								<h1><?php the_title();?></h1>
							</div>
						</div>
					</div>
				</div>
</section>
 
    <section class="standard">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
							<h2><?php the_field('formular_titel') ?></h2>
                    
                    <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post();
                            the_content();
                        }
                    }
                    ?>
                </div>
                <div class="col-xs-6">
                    <?php 
                    if(have_rows('kontakt_info')){
                        while(have_rows('kontakt_info')){
                            the_row();?>
                            <h2><?php the_sub_field('titel') ?></h2>
                            
							<p>
                            <?php the_sub_field('namn') ?><br />
                            <?php the_sub_field('adress') ?><br />
							<?php the_sub_field('postnr_och_ort') ?>
							</p>
							<p>
								Tel: <?php the_sub_field('tel') ?><br />
								E-post: <a href="<?php the_sub_field('email') ?>"><?php the_sub_field('email') ?></a>
							</p>
                      <?php  }
                    }
                    ?>

						</div>
					</div>
				</div>
			</section>
</main>

<?php get_footer();?>

