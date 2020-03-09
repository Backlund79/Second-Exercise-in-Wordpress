<!DOCTYPE html>
<html>
<head>
	
    <?php wp_head(); ?> <!--  Alltid innan slut på head elementet -->
</head>
<body <?php body_class(); ?>>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="#home">
							<img src="<?php echo get_template_directory_uri().'/img/logo.png';?>" />
						</a>
					</div>
					<div class="col-sm-6 hidden-xs">
                    <?php wp_nav_menu (
                            array(
                                'theme_location' => 'top-menu',
                            )
                            );?>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-8">
                    <?php breadcrumbs(); ?>
					</div>
					<div class="col-xs-4">
						<ul class="social">
							<li>
								<a href="<?php the_field('socialmedia_facebook', 'option');?>">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="<?php the_field('socialmedia_twitter', 'option');?>">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="<?php the_field('socialmedia_instagram', 'option');?>">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="<?php the_field('socialmedia_linkedin', 'option');?>">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>