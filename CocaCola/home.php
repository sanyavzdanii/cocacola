<?php
/*
Template Name: Home Page Template
*/
get_header();
?>
<div id="snow" data-count="130"></div>
<div class="mySwiper-sneginka" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Slide1/sneginka.webp')"></div>

<swiper-container class="mySwiper" direction="vertical" space-between="30" mousewheel="true">
    <swiper-slide>
        <div class="container px-4 px-md-0">
            <div class="mySwiper-stars" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Slide1/Stars.svg')"></div>
            <div class="mySwiper-ded-moroz" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Slide1/dedmoroz.webp')"></div>
            <div class="mySwiper-cloud d-flex justify-content-center align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Slide1/Cloud.svg')">
                <div class="mySwiper-cloud__inner text-start me-4 mb-3">
                    How how how !!!</br>
                    Like it?</br>
                    Scroll down for more !
                </div>
            </div>
            <h1 class="pb-2 mb-1 pb-xl-3 text-start"><?php the_title(); ?></h1>
            <p class="pb-4 mb-3 pb-xl-3 mb-xl-2 text-start">Lorem ipsum descripsum</p>
            <div class="d-flex justify-content-center align-items-center justify-content-xl-start pt-1"><a href="#"><a class="btn1" href="#">Call to action</div></a></div>
        </div>
    </swiper-slide>
    <swiper-slide>
        <div class="bg1 w-100 h-100" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Slide2/bg.webp"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <h2 class="text-start mb-4 pb-xl-1">At least somewhere you can feel new year atmosphere</h2>
                    <p class="text-start mb-4 pb-xl-1">Choose your present:</p>
                </div>
                <div class="col-xl-5">2</div>
            </div>
        </div>
    </swiper-slide>
    <swiper-slide>Slide 3</swiper-slide>
</swiper-container>

<script src="<?php echo get_template_directory_uri(); ?>/assets/swiper-element-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/snow/pure-snow.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/sneginka.js" defer></script>

<?php get_footer(); ?>