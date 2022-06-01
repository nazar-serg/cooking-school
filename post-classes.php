<?php
/*
Template Name: Sample Classes
Template Post Type: post
*/
?>
<?php get_header(); ?>
<section class="article-classes">
    <div class="container">
        <div class="article-classes__row-top">
            <div class="article-classes__row-top-column-left">
                <div class="article-classes__row-top-column-left-title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="article-classes__row-top-btn">
                <a class="article-classes__row-top-link link modal-toggle" href="#">Book This Course</a>
            </div>
            </div>
            <div class="article-classes__row-top-column-right">
                <div class="article-classes__row-top-column-right-top">
                    <div class="article-classes__row-top-column-right-video">
                        <a class="article-classes__row-top-column-right-video-link" href="<?php the_field('page_classes_video'); ?>" data-fancybox="gallery">
                            <div class="article-classes__row-top-column-right-video-play">
                                <i class='bx bx-play-circle bx-flip-vertical' style='color:#ffffff' ></i>
                            </div>
                            <img class="article-classes__row-top-column-right-img" src="<?php the_field('page_classes_overlay_img'); ?>" alt ="">
                        </a>
                    </div>
                </div>
                <div class="article-classes__row-top-column-right-bottom">
                    <div class="article-classes__row-top-column-right-text-offer">
                        <?php the_field('course_information_page_classes'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="article-classes__content">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<section class="price">
    <div class="container">
    <div class="price__row">
        <div class="price__column price__column--bg-grey">
            <div class="price__column-title">
                Sigle Seat
            </div>
            <div class="price__column-cost">
                <span class="price__column-cost-number">$50</span><span class="price__column-cost-text">/person</span>
            </div>
            <div class="price__column-text">
                <ul>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                </ul>
            </div>
            <div class="price__column-btn">
                <a class="modal-toggle" href="#">Sign Up</a>
            </div>
        </div>
        <div class="price__column price__column--bg-blue">
            <div class="price__column-title price__column--color-white">
                Couples Class
            </div>
            <div class="price__column-cost">
                <span class="price__column-cost-number price__column--color-white">$40</span><span class="price__column-cost-text">/person</span>
            </div>
            <div class="price__column-text price__column--color-white">
                <ul>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                </ul>
            </div>
            <div class="price__column-btn">
                <a class="price__column--color-white modal-toggle" href="#">Sign Up</a>
            </div>
        </div>
        <div class="price__column price__column--bg-peach">
            <div class="price__column-title">
                Group Event
            </div>
            <div class="price__column-cost">
                <span class="price__column-cost-number">$30</span><span class="price__column-cost-text">/person</span>
            </div>
            <div class="price__column-text">
                <ul>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                </ul>
            </div>
            <div class="price__column-btn">
                <a class="modal-toggle" href="#">Sign Up</a>
            </div>
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
                <a class="let-is-cook__link link modal-toggle" href="#">Sign Up</a>
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
                        <p>1234 Divi St. #1000 San Francisco, CA 33945</p>
                    </div>
                    <div class="contacts__content-column contacts__content-column--phone">
                        <h6>Phone</h6>
                        <p>(255) 352-6258</p>
                    </div>
                    <div class="contacts__content-column contacts__content-column--social">
                        <h6>Follow Us</h6>
                        <ul>
                            <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#"><i class='bx bxl-twitter' ></i></a></li>
                            <li><a href="#"><i class='bx bxl-youtube' ></i></a></li>
                        </ul>
                    </div>
                    <div class="contacts__content-column contacts__content-column--email">
                        <h6>Email</h6>
                        <p>info@divicooking.com</p>
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