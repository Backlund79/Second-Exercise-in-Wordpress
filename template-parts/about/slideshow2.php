<section class="slideshow" data-autoplay="3000" data-singleitem="true">
    <div class="slide" style="background-image: url('<?php the_sub_field('slide_1') ?>')">
    </div>


    <?php
        if(have_rows('slide_2')){
            while(have_rows('slide_2')){
                the_row();?>

    <div class="slide red no-image">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 text-center">
                    <i class="fa <?php the_sub_field('fa_logo_left') ?>"></i>
                </div>
                <div class="col-xs-6">
                    <h2><?php the_sub_field('titel') ?></h2>
                    <p><?php the_sub_field('text') ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php 
        }
    } 
    ?>



    <?php
        if(have_rows('slide_3')){
            while(have_rows('slide_3')){
                the_row();?>

    <div class="slide no-image" style="background-image: url('<?php the_sub_field('bild') ?>');">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2><?php the_sub_field('titel') ?></h2>
                    <p><?php the_sub_field('text_1') ?></p>
                    <p><?php the_sub_field('text_2') ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php 
        }
    } 
    ?>

<?php
        if(have_rows('slide_4')){
            while(have_rows('slide_4')){
                the_row();?>
    <div class="slide black no-image">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h2><?php the_sub_field('titel') ?></h2>
                    <p><?php the_sub_field('text') ?></p>
                </div>
                <div class="col-xs-6 text-center">
                    <i class="fa <?php the_sub_field('fa_logo_right') ?>"></i>
                </div>
            </div>
        </div>
    </div>

    <?php 
        }
    } 
    ?>

    <div class="slide" style="background-image: url('<?php the_sub_field('slide_5') ?>');">
    </div>
</section>