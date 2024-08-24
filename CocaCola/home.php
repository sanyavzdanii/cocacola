<?php
/*
Template Name: Home Page Template
*/
get_header();
?>

<swiper-container class="mySwiper" pagination="false" pagination-clickable="true" direction="vertical" space-between="30" mousewheel="true">
    <swiper-slide>
        <div class="container px-4 px-md-0">
            <h1 class="pb-2 mb-1 pb-xl-3 text-start"><?php the_title(); ?></h1>
            <p class="pb-4 mb-3 pb-xl-3 mb-xl-2 text-start">Lorem ipsum descripsum</p>
            <div class="pt-1"><a href="#"><div class="btn">Call to action</div></a></div>
        </div>
    </swiper-slide>
    <swiper-slide>Slide 2</swiper-slide>
    <swiper-slide>Slide 3</swiper-slide>
</swiper-container>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<?php get_footer(); ?>