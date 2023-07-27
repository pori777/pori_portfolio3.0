<!DOCTYPE html>
<html lang="ja">
<head>
    <!--html*5の初期設定-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--seo対策の類-->
    <meta name="description" content="poriのポートフォリオサイトです。主にWeb制作を中心に制作しています。制作実績やブログを発信しております。">
    <meta name="keywords" content="">
    <!--リンクを貼ったときの設定(pc)-->
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
    <meta property="og:title" content="pori_portfolio">
    <meta property="og:url" content="http://poriporipori.com">
    <meta property="og:description" content="poriのポートフォリオサイトです。主にWeb制作を中心に制作しています。制作実績やブログを発信しております。">
    <meta property="og:site_name" content="poriのポートフォリオサイトです。主にWeb制作を中心に制作しています。制作実績やブログを発信しております。">
    <meta property="og:image" content="./img/meta/ogp.jpg">
    <!--リンクを貼ったときの設定(twitter)-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@pori072">
    <meta name="twitter:title" content="poriのポートフォリオサイトです。主にWeb制作を中心に制作しています。制作実績やブログを発信しております。">
    <!--ファビコンの設定-->
    <link rel="shortcut icon" href="./img/meta/favicon.ico" type="image/x-icon">
    <!--googleFonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Sans+JP:wght@400;700&family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <!--stylesheet-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ;?>/css/style.css">
    <title>pori_portfolio</title>
    <?php wp_head(); ?>
</head>
<body>
    <header role="banner" class="l-header">
        <h1 class="l-header__title"><img src="<?php echo get_template_directory_uri();?>/img/pori-logo.php" alt="pori"></h1>
        <nav class="p-gnavi .js-hamburger">
            <ul class="p-gnavi__list">
                <li class="p-gnavi__item"><a href="https://poriporipori.com/#about"></a></li>
                <li class="p-gnavi__item"><a href="https://poriporipori.com/works"></a></li>
                <li class="p-gnavi__item"><a href="https://poriporipori.com/blog"></a></li>
                <li class="p-gnavi__item"><a href="https://poriporipori.com/#contact"></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="p-section--mainVisual"></section>
        <section id="about" class="p-section--about">
            <h2 class="c-section-ttlset"><img src="<?php echo get_template_directory_uri();?>/img/" alt="about"></h2>
            <div class="p-section--about__content">
                <div class="p-section--about__img">
                    <img src="<?php echo get_template_directory_uri();?>/img/" alt="">
                </div>
                <dl class="p-section--about__list">
                    <div class="p-section--about__item">
                        <dt>生年月日</dt>
                        <dd>2002.7.29</dd>
                    </div>
                    <div class="p-section--about__item">
                        <dt>名前</dt>
                        <dd>Koichi&nbsp;Saito</dd>
                    </div>
                    <div class="p-section--about__item">
                        <dt>業務内容</dt>
                        <dd>LP,HP制作&nbsp;WordPress導入</>
                    </div>
                    <div class="p-section--about__item">
                        <dt>使用スキル</dt>
                        <dd>HTML&nbsp;CSS/SASS,&nbsp;JavaScript/jQuery&nbsp;WordPress</>
                    </div>
                    <div class="p-section--about__item">
                        <i class="fab fa-github c-icon--github"></i>
                    </div>
                </dl>
            </div>
        </section>
        <section id="works" class="p-section--post">
            <h2 class="c-section-ttlset"><img src="<?php echo get_template_directory_uri();?>/img/" alt="works"></h2>
            <div class="p-section--post__content">
                <?php
                $args = array(
                    'post_type' => 'works',
                    'posts_per_page' => 6,
                    'orderby'=>'post_date', // 投稿日順に並べる
                    'order'=>'DESC' // 新着順に並べる
                );
                    $the_query = new WP_Query($args); if($the_query->have_posts()):
                ?>
                <ul class="p-section--post__contentWrapper">
                    <?php while ($the_query->have_posts()):$the_query->the_post(); ?>
                    <li class="p-section--post__item">
                        <a href="<?php the_permalink(); ?>"  class="p-section--post__link">
                            <div class="p-section--post__imgWrapper">
                                <img src="<?php echo CFS()->get('thumbnail') ;?>" alt="サンプル画像"  class="p-section--post__img">
                            </div>
                            <div class="p-section--post__sentence">
                                <time><?php echo get_the_date('Y.m.d')?></time>
                                <p><?php echo CFS()->get('title') ;?></p>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
                <?php else : ?>
                <?php endif ;?>
                <div class="c-button--post">
                    <a href="https://poriporipori.com/works">
                        <p>一覧ページを見る<i class="fas fa-angle-right"></i></p>
                    </a>
                </div>
            </div>
        </section>
        <section id="blog" class="p-section--post">
            <h2 class="c-section-ttlset"><img src="<?php echo get_template_directory_uri();?>/img/" alt="blog"></h2>
            <div class="p-section--post__content">
                <?php
                $args = array(
                    'post_type' => 'blog',
                    'posts_per_page' => 6,
                    'orderby'=>'post_date', // 投稿日順に並べる
                    'order'=>'DESC' // 新着順に並べる
                );
                    $the_query = new WP_Query($args); if($the_query->have_posts()):
                ?>
                <ul class="p-section--post__contentWrapper">
                    <?php while ($the_query->have_posts()):$the_query->the_post(); ?>
                    <li class="p-section--post__item">
                        <a href="<?php the_permalink(); ?>"  class="p-section--post__link">
                            <div class="p-section--post__imgWrapper">
                                <img src="<?php echo CFS()->get('thumbnail') ;?>" alt="サンプル画像"  class="p-section--post__img">
                            </div>
                            <div class="p-section--post__sentence">
                                <time><?php echo get_the_date('Y.m.d')?></time>
                                <p><?php echo CFS()->get('title') ;?></p>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
                <?php else : ?>
                <?php endif ;?>
                <div class="c-button--post">
                    <a href="https://poriporipori.com/blog">
                        <p>一覧ページを見る<i class="fas fa-angle-right"></i></p>
                    </a>
                </div>
            </div>
        </section>
        <section id="contact" class="p-section--contact">
            <h2 class="c-section-ttlset"><img src="<?php echo get_template_directory_uri();?>/img/" alt="contact"></h2>
            <?php echo do_shortCode('[contact-form-7 id="44" title="コンタクトフォーム"]')?>
        </section>
    </main>
    <footer class="l-footer">
        <nav class="l-footer__nav">
            <ul class="l-footer__list">
                <li class="l-footer__item"><a href="https://poriporipori.com/#about">ABOUT</a></li>
                <li class="l-footer__item"><a href="https://poriporipori.com/works>">WORKS</a></li>
                <li class="l-footer__item"><a href="https://poriporipori.com/blog">BLOG</a></li>
                <li class="l-footer__item"><a href="https://poriporipori.com/#contact">CONTACT</a></li>
            </ul>
        </nav>
        <small class="l-footer__title">&copy;pori</small>
    </footer>
    <script src="https://kit.fontawesome.com/8e9a187939.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/hamburger.js"></script>
    <?php wp_footer(); ?>
</body>
</html>
