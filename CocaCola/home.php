<?php
/*
Template Name: Home Page Template
*/
get_header();
?>
<div id="snow" data-count="130"></div>
<div class="mySwiper-sneginka" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Slide1/sneginka.webp')"></div>

<swiper-container class="mySwiper" direction="vertical" space-between="0" mousewheel="true">
    <swiper-slide>
        <div class="container px-4 px-md-0 pt-3 pt-md-0">
            <div class="mySwiper-stars" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Slide1/Stars.svg')"></div>
            <div class="mySwiper-ded-moroz" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Slide1/dedmoroz.webp')"></div>
            <div class="mySwiper-cloud d-none d-md-flex justify-content-center align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Slide1/Cloud.svg')">
                <div class="mySwiper-cloud__inner text-start me-4 mb-3">
                    How how how !!!</br>
                    Like it?</br>
                    Scroll down for more !
                </div>
            </div>
            <h1 class="h-flex pb-2 mb-1 pb-xl-3 text-start mt-5 pt-5 mt-md-0 pt-xl-0"><?php the_title(); ?></h1>
            <p class="p-flex pb-4 mb-3 pb-xl-3 mb-xl-2 text-start">Lorem ipsum descripsum</p>
            <div class="d-flex justify-content-center align-items-center justify-content-xl-start pt-1"><a href="#"><a class="btn1" href="#">Call to action</div></a></div>
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="bg1 w-100 h-100" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Slide2/bg.webp"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <h2 class="h-flex text-start mb-4 pb-xl-1">At least somewhere you can feel new year atmosphere</h2>
                    <p class="p-flex text-start mb-4 pb-xl-1">Choose your present:</p>
                    <div class="d-flex align-items-center justify-content-center justify-content-xl-start mb-5 pb-3 pb-xl-0 mb-xl-0">
                        <div class="prize-button active d-flex justify-content-center align-items-center me-1 me-xl-4" data-id="1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Slide2/new-year-sock 1.webp" width="70" height="121" alt="sock">
                        </div>
                        <div class="prize-button d-flex justify-content-center align-items-center me-1 me-xl-4" data-id="2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Slide2/caps-2.webp" width="124" height="94" alt="caps">
                        </div>
                        <div class="prize-button d-flex justify-content-center align-items-center me-1 me-xl-4" data-id="3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Slide2/new-year-bag 1.webp" width="95" height="100" alt="new year bag">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="prize-box active flex-wrap flex-xl-nowrap align-items-center justify-content-center">
                        <div>
                            <h3 class="prize-box__h">Best sock ever</h3>
                            <h3 class="prize-box__h">Write us for real presents</h3>
                            <p class="prize-box__p">Reuglar sock have no present inside Lorem Ipsum is simply dumm  y text of the printing and types etting industry. Lorem </p>
                        </div>
                        <div class="prize-box__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Slide2/new-year-sock 1.webp" width="70" height="121" alt="sock">
                        </div>

                    </div>
                    <div class="prize-box flex-wrap flex-xl-nowrap align-items-center">
                        <div>
                            <h3 class="prize-box__h">Best caps ever</h3>
                            <p class="prize-box__p">Reuglar sock have no present inside Lorem Ipsum is simply dumm  y text of the printing and types etting industry. Lorem </p>
                        </div>
                        <div class="prize-box__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Slide2/caps-2.webp" width="124" height="94" alt="caps">
                        </div>

                    </div>
                    <div class="prize-box flex-wrap flex-xl-nowrap align-items-center">
                        <div>
                            <h3 class="prize-box__h">Best new year bag ever</h3>
                            <p class="prize-box__p">Reuglar sock have no present inside Lorem Ipsum is simply dumm  y text of the printing and types etting industry. Lorem </p>
                        </div>
                        <div class="prize-box__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Slide2/new-year-bag 1.webp" width="95" height="100" alt="new year bag">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="bg1 w-100 h-100" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Slide2/merry-christmas-xmas-night-christmas-reindeer-artwork-happy-new-year 1.webp"></div>
            <div class="container contacts-wrapper pt-4 pt-xl-0">
                <?php echo do_shortcode( '[contact-form-7 id="747998f" title="Contact form 1"]' ); ?>
            </div>
        </div>
    </swiper-slide>
</swiper-container>

<script src="<?php echo get_template_directory_uri(); ?>/assets/swiper-element-bundle.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/snow/pure-snow.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/home.js" defer></script>

<?php get_footer(); ?>