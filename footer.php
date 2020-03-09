<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<h4><?php the_field('om_oss_titel', 'option');?></h4>
						<p><?php the_field('om_oss_text', 'option');?></p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4><?php the_field('footer_contact_title', 'option');?></h4>
			

						<!-- informationen nedan hämtas ur gruppen footer_contact_info vilket är skapat med ACF och editeras i tema inställningar -->
						<p>
						<?php the_field('kontakt_info_titel', 'option');?><br />
						<?php the_field('kontakt_info_namn', 'option');?><br />
						<?php the_field('kontakt_info_postnr_och_ort', 'option');?> 
						</p>
						<p>
						Tel: <?php the_field('kontakt_info_tel', 'option');?><br />
							
							
						
						E-post: <a href="<?php the_field('kontakt_info_email', 'option');?>"><?php the_field('kontakt_info_email', 'option');?></a>
						</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Social media</h4>
						<ul class="social">
							<li>
								<i class="fa fa-facebook"></i> <a href="<?php the_field('socialmedia_facebook', 'option');?>">Facebook</a>
							</li>
							<li>
								<i class="fa fa-twitter"></i> <a href="<?php the_field('socialmedia_twitter', 'option');?>">Twitter</a>
							</li>
							<li>
								<i class="fa fa-instagram"></i> <a href="<?php the_field('socialmedia_instagram', 'option');?>">Instagram</a>
							</li>
							<li>
								<i class="fa fa-linkedin"></i> <a href="<?php the_field('socialmedia_linkedin', 'option');?>">LinkedIn</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2016</p>
					</div>
				</div>
			</div>
		</footer>

	</div>

     <?php wp_footer(); ?> <!--  Alltid ha med i slutet av varje dokument   -->
</body>
</html>