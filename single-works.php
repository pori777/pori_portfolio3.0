<?php get_header() ;?>
    <main>
        <section class="p-mainVisual"></section>
        <section id="blog" class="p-section--single">
            <h2 class="c-section-ttlset"><img src="<?php echo get_template_directory_uri();?>/img/title-bs/title-bs-works.png" alt="works"></h2>
            <div class="p-section--single__wrapper">
                <nav class="breadCrumbs">
                    <li class="breadCrumbs__item"><a href="https://poriporipori.com">HOME</a></li>
                    <li class="breadCrumbs__item"><i class="fas fa-angle-right"></i></li>
                    <li class="breadCrumbs__item"><a href="https://poriporipori.com/works">WORKS</a></li>
                </nav>

                <div class="p-section--single__content">
                    <time class="p-section--single__time"><?php echo get_the_date('Y.m.d')?></time>
                    <p class="p-section--single__title"><?php echo CFS()->get('title') ;?></p>
                    <img src="<?php echo CFS()->get('thumbnail') ;?>" alt="記事詳細の画像"  class="p-section--single__img">
                    <div class="p-section--single__description"><?php the_content(); ?></div>
                    <div class="p-section--single__gitHubLink"><a href="<?php echo CFS()->get('github_link');?>"><?php echo CFS()->get('github_link');?></a></div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer() ;?>