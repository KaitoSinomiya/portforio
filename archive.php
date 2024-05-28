<?php get_header(); ?>
<section class="Works_wrap fadeUpTrigger Mincho font_white" id="Works_jp">
    <?php get_template_part('breadcrumb'); ?>
    <h2 class="Works_title">Works</h2>
    <div class="Works">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('Work') ?>>
                    <div class="Works_meta">
                        <?php the_category(); ?>
                    </div>
                    <div class="Work_img fadeUpTrigger">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('mediam') ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage_600x400.png" alt="noimage">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="Work_text fadeUpTrigger">
                    </div>
                    </article>
                </div>
                <?php get_template_part('template-parts/loop', 'work'); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    </div>
</section>
</main>
<?php get_footer(); ?>
