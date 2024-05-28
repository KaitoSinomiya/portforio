<?php
get_header();
$artifact_url = get_field('works_url');
$artifact_file = get_field('works_file');
?>
<section class="Works_wrap fadeUpTrigger Mincho font_white" id="Works_jp">
    <?php get_template_part('breadcrumb'); ?>
    <h2 class="Works_title">Works</h2>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('Work') ?>>
                <div class="Works_meta">
                    <?php the_category(); ?>
                </div>
            </div>
            <div class="Work_single fadeUpTrigger">
                <h3 class="Work_title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <div>
                    <?php the_content(); ?>
                    <!-- url偏移の記述 -->
                    <?php if ($artifact_url) : ?>
                        <div class="button_wrap fadeUpTrigger Mincho">
                            <a class="button" href="<?php echo $artifact_url; ?>" target="_blank" rel="noopener">artifact</a>
                        </div>
                        <?php get_template_part('template-parts/loop', 'work'); ?>
                        <div class="button_wrap fadeUpTrigger Mincho">
                            <a class="button" href="<?php echo home_url() ?>/works/">archive</a>
                        </div>
                        <!-- file偏移の記述 -->
                    <?php elseif ($artifact_file) : ?>
                        <div class="button_wrap fadeUpTrigger Mincho">
                            <a class="button" href="<?php echo $artifact_file; ?>" target="_blank" rel="noopener">artifact</a>
                        </div>
                        <?php get_template_part('template-parts/loop', 'work'); ?>
                        <div class="button_wrap fadeUpTrigger Mincho">
                            <a class="button" href="<?php echo home_url() ?>/works/">archive</a>
                        </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
</div>
</section>
</main>
<?php get_footer(); ?>
