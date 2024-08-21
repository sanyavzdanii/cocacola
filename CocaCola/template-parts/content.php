<article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
    <div class="card-body p-3 p-xl-4">
        <h2 class="card-title mb-2">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <div class="card-meta mb-2 mb-xl-3">
            <span class="text-muted"><?php echo get_the_date(); ?></span>
            <span class="text-muted"> | </span>
            <span class="text-muted"><?php the_author(); ?></span>
        </div>
        <div class="card-text">
            <?php if ( is_singular() ) : ?>
                <?php the_content(); ?>
            <?php else : ?>
                <?php the_excerpt(); ?>
            <?php endif; ?>
        </div>
    </div>
</article>
