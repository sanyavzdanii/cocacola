<article id="post-<?php the_ID(); ?>" <?php post_class('single-post mb-4 mb-xl-5'); ?>>
    <div class="post-header mb-3 mb-xl-4">
        <h1 class="post-title mb-3 mb-xl-4"><?php the_title(); ?></h1>
        <div class="post-meta text-muted">
            <span class="post-date"><?php echo get_the_date(); ?></span>
            <span class="mx-2">|</span>
            <span class="post-author"><?php the_author(); ?></span>
        </div>
    </div>
    <div class="post-content mb-3 mb-xl-4">
        <?php the_content(); ?>
    </div>
    <div class="post-footer border-top pt-3 pt-xl-4 mt-3 mt-xl-4">
        <div class="post-categories mb-2">
            <strong><?php _e('Categories:', 'text-domain'); ?></strong> <?php the_category(', '); ?>
        </div>
        <div class="post-tags">
            <?php the_tags('<strong>' . __('Tags:', 'text-domain') . '</strong> ', ', '); ?>
        </div>
    </div>
</article>
