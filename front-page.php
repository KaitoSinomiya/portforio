<?php
get_header();
?>
<main>
    <?php if (is_home()) : ?>
        <div class="kv_wrap fadeUpTrigger" id="kv_jp">
            <img class="kv" src="<?php echo get_template_directory_uri(); ?>/assets/images/kv.jpg" alt="moonlight">
            <div class="logo Mysoul">Portfolio of Kaito Shinomiya</div>
        </div>
    <?php endif; ?>
    <section class="About_flex fadeUpTrigger" id="About_jp">
        <div class="About fadeUpTrigger Mincho">
            <h2 class="About_title fadeUpTrigger">About</h2>
            <p class="About_text fadeUpTrigger Mincho">
                こんにちは!Kaitoと申します。<br>ポートフォリオを見に来てくださりありがとうございます。<br>これまでは製造業で職業経験を積んできたのですが、独学から関心があったWEB分野へのキャリアチェンジを考えて求職者支援訓練である、Qlipプログラミングスクールの「Webプログラマー養成科」に入校し、より強くこの業界で働きたいと思うようになりました。<br>元々ゲームやアニメが好きでこういうプログラミングというカッコいい職業に憧れてました。技術的にはまだ初歩の初歩ですがこれから沢山の経験を積んでLevelUpできたらなと考えています。
            </p>
            <h3>自分の強み</h3>
            <p class="About_text fadeUpTrigger Mincho">
                物事を素直に受け取ることや人と接することが得意なところです。<br>以前の職場でもよく親しみやすい性格だと言われたこともあり自信になっています。<br>仕事やこれまでの人生を振り返り人とのコミュニケーションはとても大切だと思っていますので今後仕事をしていく中で人との繋がりを大事にしていきたいです。
            </p>
        </div>
        <img class="hakumen fadeUpTrigger" src="<?php echo get_template_directory_uri(); ?>/assets/images/hakumen.png" alt="hakumen">
    </section>
    <section id="Skills_jp">
        <div class="Skills fadeUpTrigger Mincho">
            <h2 class="Skills_title fadeUpTrigger">Skills</h2>
            <div class="Skill_box">
                <dl class="Skill fadeUpTrigger">
                    <dt>WORDPRESS</dt>
                    <dd><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg_icon/wp.svg" alt="wp"></dd>
                    <dd>オリジナルカスタムテーマを調べながら作れます。</dd>
                </dl>
                <dl class="Skill fadeUpTrigger">
                    <dt>HTML&CSS</dt>
                    <dd>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg_icon/html.svg" alt="html">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg_icon/css.svg" alt="css">
                    </dd>
                    <dd>現在勉強段階ですが、簡単なマークアップができます。<br>アニメーションやメディアクエリなど制作で使用した記述が可能です。
                    </dd>
                </dl>
                <dl class="Skill fadeUpTrigger">
                    <dt>JAVASCRIPT</dt>
                    <dd><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg_icon/js.svg" alt="js"></dd>
                    <dd>現在勉強段階ですが、簡単なロジックであれば記述可能です。<br>jqueryは、ハンバーガーメニューやスライドショーなど、制作で使用したプラグインを扱えます。</dd>
                </dl>
                <dl class="Skill fadeUpTrigger">
                    <dt>PHP</dt>
                    <dd>現在勉強段階ですが、簡単なロジックが組めます。<br>データベースに接続し簡単なフォームが作れます。</dd>
                </dl>
                <dl class="Skill fadeUpTrigger">
                    <dt>ILLUSTRATOR&<br>PHOTOSHOP</dt>
                    <dd>制作や授業で習った簡単なデザインなら制作可能です。
                    </dd>
                </dl>
                <dl class="Skill fadeUpTrigger">
                    <dt>DATABASE</dt>
                    <dd>現在勉強段階ですが、簡単なテーブルが作れます。</dd>
                </dl>
            </div>
        </div>
        </div>
    </section>
    <section class="Works_wrap fadeUpTrigger Mincho" id="Works_jp">
        <h2 class="Works_title">Works</h2>
        <div class="Works">
            <?php if (have_posts()) : ?>
                <?php
                while (have_posts()) : the_post();
                ?>
                    <ul id="post-<?php the_ID(); ?>" <?php post_class('Work Work_hidden') ?>>
                        <li class="Works_meta">
                            <?php the_category(); ?>
                        </li>
                        <li class="Work_img fadeUpTrigger">
                            <a href=" <?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?> <?php the_post_thumbnail('mediam') ?> <?php else : ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage_600x400.png" alt="noimage">
                                <?php endif; ?>
                            </a>
                        </li>
                    </ul>
                    <?php get_template_part('template-parts/loop', 'work'); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="button_wrap fadeUpTrigger Mincho">
            <a class="button" href="<?php echo home_url() ?>/works/">More</a>
        </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
