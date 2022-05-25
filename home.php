<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<div class="banner">
    <div class="container">
        <div class="banner__row">
            <div class="banner__content">
                <div class="banner__content-text">
                    <?php the_field('banner_text'); ?>
                </div>
                <div class="banner__content-title">
                    <h1><?php the_field('banner_title'); ?></h1>
                </div>
            </div>
        </div>

        <div class="banner__bottom">
                <div class="banner__bottom-row">
                    <div class="banner__bottom-left">
                        <div class="banner__bottom-btn">
                            <a class="banner__bottom-link" href="#">Learn More</a>
                    </div>
                </div>

                    <div class="banner__bottom-right">
                        <div class="banner__bottom-left-wrap">
                            <div class="banner__bottom-img">
                                <img src="<?php the_field('banner_right_img');?>" alt="">
                            </div>
                            <div class="banner__bottom-img-body">
                                <a class="banner__bottom-img-link" href="#">
                                    <div class="banner__bottom-img-content">
                                         Classes
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
</div>
<?php get_footer(); ?>