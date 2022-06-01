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
                            <a class="banner__bottom-link link" href="#">Learn More</a>
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
<section class="about-us-in-numbers section-indent">
    <div class="container">
        <div class="about-us-in-numbers__row">
            <div class="about-us-in-numbers__column">
                <div class="about-us-in-numbers__column-icon">
                    <img src="<?php the_field('about_us_in_numbers_icon_1'); ?>" alt="">
                </div>
                <div class="about-us-in-numbers__column-number">
                <p class="about-us-in-numbers__column-numeric" data-n="<?php the_field('about_us_in_numbers_number_1'); ?>"></p>
                </div>
                <div class="about-us-in-numbers__column-text">
                    <p><?php the_field('about_us_in_numbers_text_1'); ?></p>
                </div>
            </div>
            <div class="about-us-in-numbers__column">
                <div class="about-us-in-numbers__column-icon">
                    <img src="<?php the_field('about_us_in_numbers_icon_2'); ?>" alt="">
                </div>
                <div class="about-us-in-numbers__column-number">
                    <p class="about-us-in-numbers__column-numeric" data-n="<?php the_field('about_us_in_numbers_number_2'); ?>"></p>
                </div>
                <div class="about-us-in-numbers__column-text">
                    <p><?php the_field('about_us_in_numbers_text_2'); ?></p>
                </div>
            </div>
            <div class="about-us-in-numbers__column">
                <div class="about-us-in-numbers__column-icon">
                    <img src="<?php the_field('about_us_in_numbers_icon_3'); ?>" alt="">
                </div>
                <div class="about-us-in-numbers__column-number">
                <p class="about-us-in-numbers__column-numeric" data-n="<?php the_field('about_us_in_numbers_number_3'); ?>"></p>
                </div>
                <div class="about-us-in-numbers__column-text">
                    <p><?php the_field('about_us_in_numbers_text_3'); ?></p>
                </div>
            </div>
            <div class="about-us-in-numbers__column">
                <div class="about-us-in-numbers__column-icon">
                    <img src="<?php the_field('about_us_in_numbers_icon_4'); ?>" alt="">
                </div>
                <div class="about-us-in-numbers__column-number">
                    <p class="about-us-in-numbers__column-numeric" data-n="<?php the_field('about_us_in_numbers_number_4'); ?>"></p>
                </div>
                <div class="about-us-in-numbers__column-text">
                    <p><?php the_field('about_us_in_numbers_text_4'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="popular-classes section-indent">
    <div class="container">
        <div class="popular-classes__row-top">
            <div class="popular-classes__title title-h2">
                <h2>Popular Classes</h2>
            </div>
            <div class="popular-classes__btn">
                <a class="banner__bottom-link link" href="#">View All Open Classes</a>
            </div>
        </div>
        <div class="popular-classes__row-bottom">
            <div class="popular-classes__row-bottom-column">
                <div class="popular-classes__row-bottom-img">
                    <img src="<?php the_field('popular_classes_img_1'); ?>" alt="">
                </div>
                <div class="popular-classes__row-bottom-title">
                    <h3><?php the_field('popular_classes_title_1'); ?></h3>
                </div>
                <div class="popular-classes__row-bottom-text">
                    <p><?php the_field('popular_classes_text_1'); ?></p>
                </div>
                <div class="popular-classes__row-bottom-time">
                    <p><?php the_field('popular_classes_time_1'); ?></p>
                </div>
            </div>
            <div class="popular-classes__row-bottom-column">
                <div class="popular-classes__row-bottom-img">
                    <img src="<?php the_field('popular_classes_img_2'); ?>" alt="">
                </div>
                <div class="popular-classes__row-bottom-title">
                    <h3><?php the_field('popular_classes_title_2'); ?></h3>
                </div>
                <div class="popular-classes__row-bottom-text">
                    <p><?php the_field('popular_classes_text_2'); ?></p>
                </div>
                <div class="popular-classes__row-bottom-time">
                    <p><?php the_field('popular_classes_time_2'); ?></p>
                </div>
            </div>
            <div class="popular-classes__row-bottom-column">
                <div class="popular-classes__row-bottom-img">
                    <img src="<?php the_field('popular_classes_img_3'); ?>" alt="">
                </div>
                <div class="popular-classes__row-bottom-title">
                    <h3><?php the_field('popular_classes_title_3'); ?></h3>
                </div>
                <div class="popular-classes__row-bottom-text">
                    <p><?php the_field('popular_classes_text_3'); ?></p>
                </div>
                <div class="popular-classes__row-bottom-time">
                    <p><?php the_field('popular_classes_time_3'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="reviews">
    <div class="container">
        <div class="reviews__inner swiper">
            <div class="reviews__wrapper swiper-wrapper">
                <div class="reviews__slide swiper-slide">
                    <p><?php the_field('review_1'); ?></p>
                </div>
                <div class="reviews__slide swiper-slide">
                    <p><?php the_field('review_2'); ?></p>
                </div>
                <div class="reviews__slide swiper-slide">
                    <p><?php the_field('review_3'); ?></p>
                </div>
            </div>
            <div class="reviews__button swiper-button-next"></div>
            <div class="reviews__button swiper-button-prev"></div>
        </div>
    </div>
</section>
<section class="our-partners">
    <div class="container">
        <div class="our-partners__row">
            <div class="our-partners__img">
                <img src="<?php the_field('our_partners_img_1'); ?>" alt="">
            </div>
            <div class="our-partners__img">
                <img src="<?php the_field('our_partners_img_2'); ?>" alt="">
            </div>
            <div class="our-partners__img">
                <img src="<?php the_field('our_partners_img_3'); ?>" alt="">
            </div>
            <div class="our-partners__img">
                <img src="<?php the_field('our_partners_img_4'); ?>" alt="">
            </div>
            <div class="our-partners__img">
                <img src="<?php the_field('our_partners_img_5'); ?>" alt="">
            </div>
            <div class="our-partners__img">
                <img src="<?php the_field('our_partners_img_6'); ?>" alt="">
            </div>
        </div>
    </div>
</section>
<section class="let-is-cook">
    <div class="container">
        <div class="let-is-cook__row">
            <div class="let-is-cook__title title-h2">
                <h2>Let’s Cook Together!</h2>
            </div>
            <div class="let-is-cook__btn">
                <a class="let-is-cook__link link" href="#">Sign Up</a>
            </div>
        </div>
    </div>
</section>
<section class="contacts">
    <div class="container">
        <div class="contacts__row">
            <div class="contacts__content">
                <div class="contacts__content-wrap">
                    <div class="contacts__content-column contacts__content-column--address">
                        <h6>Address</h6>
                        <p><?php the_field('home_address'); ?></p>
                    </div>
                    <div class="contacts__content-column contacts__content-column--phone">
                        <h6>Phone</h6>
                        <p><?php the_field('home_phone'); ?></p>
                    </div>
                    <div class="contacts__content-column contacts__content-column--social">
                        <h6>Follow Us</h6>
                        <ul>
                            <li><a href="<?php the_field('home_link_facebook'); ?>"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="<?php the_field('home_link_twiter'); ?>"><i class='bx bxl-twitter' ></i></a></li>
                            <li><a href="<?php the_field('home_link_youtube'); ?>"><i class='bx bxl-youtube' ></i></a></li>
                        </ul>
                    </div>
                    <div class="contacts__content-column contacts__content-column--email">
                        <h6>Email</h6>
                        <p><?php the_field('home_email'); ?></p>
                    </div>
                </div>
            </div>
            <div class="contacts__form">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact Form Home"]'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>