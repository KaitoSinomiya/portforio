<?php get_header(); ?>
<div class="contact fadeUpTrigger">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>ˇ
</div>
<?php get_footer(); ?>
