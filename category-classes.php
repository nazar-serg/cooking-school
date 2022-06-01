<?php get_header(); ?>
<div class="page-classes-top">
    <div class="container">
        <div class="page-classes-top__row">
            <div class="page-classes-top__column-left">
                <h1>Classes</h1>
            </div>
            <div class="page-classes-top__column-right">
                <h3>Looking for a custom experience?</h3>
                <div class="page-classes-top__column-right-btn">
                    <a class="page-classes-top__column-right-btn-link" href="#">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="page-classes-bottom section-indent">
    <div class="container">
        <div class="page-classes-bottom__row">
            <div class="page-classes-bottom__inner-btn">
                <a class="page-classes-bottom__btn-link" href="#">
                    <div class="page-classes-bottom__btn-text">
                        Pricing
                    </div>
                </a>
            </div>
            <div class="page-classes-bottom__img">
                <img src="<?php echo get_template_directory_uri(); ?>/app/img/cooking-09.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<section class="output-of-posts-classes">
    <div class="container">
        <div class="output-of-posts-classes__row">
            <?php if (have_posts()) { while (have_posts()) { the_post(); ?>
                <div class="output-of-posts-classes__column">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'output_of_posts_classes' ); ?>
                    </a>
                    <h3 class="output-of-posts-classes__column-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <?php the_excerpt(); ?>
                </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>
<section class="join-us">
    <div class="container">
        <div class="join-us__row-top">
            <div class="join-us__row-top-column-left">
                <div class="join-us__row-top-column-left-title">
                    <h2>Join Online from Anywhere in the World!</h2>
                </div>
                <div class="join-us__row-top-column-left-text">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                </div>
                <div class="join-us__row-top-btn-left">
                    <a class="join-us__row-top-btn-left-link link" href="#">Learn How it Works</a>
                </div>
            </div>
            <div class="join-us__row-top-column-right">
                <div class="join-us__row-top-column-right-inner">
                    <div class="join-us__row-top-column-right-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/cooking-10.jpg" alt="">
                    </div>
                    <div class="join-us__row-top-column-right-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/cooking-09.jpg" alt="">
                    </div>
                    <div class="join-us__row-top-column-right-btn">
                        <a href="#" class="join-us__row-top-column-right-btn-link">
                            <div class="join-us__row-top-column-right-btn-text">
                                Sign Up
                            </div>
                        </a>
                    </div>
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