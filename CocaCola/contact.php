<?php
/**
 * Template Name: Contact
 */
get_header(); ?>

<main>
    <article>
        <header>
            <h1><?php the_title(); ?></h1>
        </header>
        <section>
            <?php get_template_part('template-parts/content', 'contact-form'); ?>
        </section>
    </article>
</main>

<?php get_footer(); ?>