<?php
/*
Template Name: Home Page Template
*/
get_header();
?>

<swiper-container class="mySwiper" direction="vertical" space-between="30" mousewheel="true">
    <swiper-slide>
        <div class="container px-4 px-md-0">
            <div class="mySwiper-stars" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Slide1/Stars.svg')"></div>
            <h1 class="pb-2 mb-1 pb-xl-3 text-start"><?php the_title(); ?></h1>
            <p class="pb-4 mb-3 pb-xl-3 mb-xl-2 text-start">Lorem ipsum descripsum</p>
            <div class="d-flex justify-content-center align-items-center justify-content-xl-start pt-1"><a href="#"><a class="btn1" href="#">Call to action</div></a></div>
        </div>
    </swiper-slide>
    <swiper-slide>Slide 2</swiper-slide>
    <swiper-slide>Slide 3</swiper-slide>
</swiper-container>

<script src="<?php echo get_template_directory_uri(); ?>/assets/swiper-element-bundle.min.js"></script>
<?php get_footer(); ?>