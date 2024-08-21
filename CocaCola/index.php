<?php get_header(); ?>

<main>
    <section class="content py-5">
        <div class="container">
            <?php if ( is_home() && !is_front_page() ) : ?>
                <h1 class="mb-4"><?php single_post_title(); ?></h1>
            <?php endif; ?>

            <?php if ( have_posts() ) : ?>
                <div class="row">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <?php get_template_part('template-parts/content'); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="pagination mt-3 mt-xl-4 pt-1">
                    <?php the_posts_pagination(); ?>
                </div>
            <?php else : ?>
                <p><?php esc_html_e('No posts found.', 'text-domain'); ?></p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
