<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">

<head>
    <meta charset="UTF-8">
    <!-- keyword設定 -->
    <meta name="keywords" content="wolfram8410, wolfram, 8410,Wolfram," />
    <meta name="viewport" content="width=device-width">
    <!-- 構造化データ -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "website",
            "name": "Portfolio of Kaito Shinomiya",
            "author": {
                "@type": "Person",
                "name": "Kaito Shinomiya"
            },
            "datePublished": "2023-11-21",
            "description": "<?php if (is_home() || is_front_page()) : ?> <
            meta name = "description"
            content = "<?php bloginfo('description'); ?>" >
        <?php elseif (is_category()) : ?> <
            meta name = "description"
            content = "<?php echo category_description(); ?>" >
        <?php elseif (is_tag()) : ?> <
            meta name = "description"
            content = "<?php echo tag_description(); ?>" >
        <?php elseif (is_singular()) : ?> <
            meta name = "description"
            content = "<?php echo get_the_excerpt(); ?>" >
        <?php endif; ?> ",
        "url": "https://wolfram8410.com/",
        "image": "<?php echo get_template_directory_uri(); ?>/assets/images/hakumen_meta.png" > ",
        }
    </script>
    <!-- icon設定 -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/hakumen_meta.png">
    <?php
    // 独自のcssファイルを読み込む
    wp_enqueue_style(
        'reset',
        get_template_directory_uri() . '/assets/css/reset.css',
        '',
        '',
        'all'
    );
    wp_enqueue_style(
        'styles',
        get_template_directory_uri() . '/assets/css/style.css',
        'reset',
        '',
        'all'
    );
    wp_enqueue_style(
        'contact',
        get_template_directory_uri() . '/assets/css/contact.css',
        'reset',
        '',
        'all'
    );
    wp_enqueue_style(
        'breadcrumb',
        get_template_directory_uri() . '/assets/css/breadcrumb.css',
        'reset',
        '',
        'all'
    );
    wp_enqueue_style(
        'font',
        'https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=My+Soul&display=swap',
        '',
        '',
        'all'
    );
    wp_enqueue_style(
        'font',
        'https://fonts.googleapis.com/css2?family=Zen+Old+Mincho&display=swap',
        '',
        '',
        'all'
    );
    wp_head(); ?>
</head>

<body>
    <div class="wrap">
        <header class="header Mincho">
            <?php
            $homeUrl = '';
            if (!is_home()) {
                $homeUrl = home_url();
            }
            ?>
            <div class="hamburger" id="js_hamburger">
                <button class="menuOpener">
                    <span class="menuOpener_line"></span>
                    <span class="menuOpener_line"></span>
                </button>
            </div>
            <a class="top_nav" href="<?php echo $homeUrl; ?>#kv_jp">Portfolio</a>
            <nav class="nav">
                <ul class="globalnavi_list">
                    <li class="globalnavi"><a href="<?php echo $homeUrl; ?>#About_jp">About</a></li>
                    <li class="globalnavi"><a href="<?php echo $homeUrl; ?>#Skills_jp">Skill</a></li>
                    <li class="globalnavi"><a href="<?php echo home_url() ?>/works/">Works</a></li>
                    <li class="globalnavi"><a href="<?php echo home_url(); ?>/contact/">Contact</a></li>
                </ul>
            </nav>
        </header>
