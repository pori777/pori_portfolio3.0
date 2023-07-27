<?php get_header() ;?>
    <main>
        <section id="about" class="p-section--about">
            <h2 class="c-section-ttlset"><img src="<?php echo get_template_directory_uri();?>/img/" alt="about"></h2>
                <div class="p-section--about__content">
                    <div class="p-section--about__img">
                        <img src="<?php echo get_template_directory_uri();?>/img/" alt="">
                    </div>
                    <dl class="p-section--about__list">
                        <div class="p-section--about__item">
                            <dt>生年月日</dt>
                            <dd>2002.7.29</>
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
                    <ul class="p-section--post__wrapper">
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
                    <ul class="p-section--post__wrapper">
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
        <?php get_footer() ;?>
