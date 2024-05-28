<!-- パンくずリスト -->
<?php $cat = get_the_category(); ?>
<nav aria-label="breadcrumb" class="pan_list mt30">
    <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="<?php echo esc_url(home_url()); ?>" itemprop="item"><span itemprop="name">HOME</span></a>
            <meta itemprop="position" content="1">
        </li>
        <?php $item_position = 1; ?>
        <?php if (!empty($cat) && !empty($cat[0]->parent)) { ?>
            <?php $item_position++; ?>
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="<?php echo get_category_link($cat[0]->parent); ?>" itemprop="item"><span itemprop="name"><?php echo get_cat_name($cat[0]->parent); ?></span></a>
                <meta itemprop="position" content="<?php echo $item_position; ?>">
            </li>
        <?php } ?>
        <?php if (!empty($cat) && !empty($cat[0]->term_id)) { ?>
            <?php $item_position++; ?>
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="<?php echo get_category_link($cat[0]->term_id); ?>" itemprop="item"><span itemprop="name"><?php echo get_cat_name($cat[0]->term_id); ?></span></a>
                <meta itemprop="position" content="<?php echo $item_position; ?>">
            </li>
        <?php } ?>
        <?php $item_position++; ?>
        <li class="breadcrumb-item active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" aria-current="page"><a title="<?php the_title(); ?>" itemprop="item"><span itemprop="name"><?php the_title(); ?></span></a>
            <meta itemprop="position" content="<?php echo $item_position; ?>">
        </li>
    </ul>
</nav>
