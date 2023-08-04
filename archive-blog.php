<?php get_header() ;?>
    <main>
        <section class="p-mainVisual"></section>
        <section id="blog" class="p-section--archive">
            <h2 class="c-section-ttlset"><img src="<?php echo get_template_directory_uri();?>/img/title-bs/title-bs-blog.png" alt="blog"></h2>
            <div class="p-section--archive__content">
                <?php
                $args = array(
                    'post_type' => 'blog',
                    'posts_per_page' => 6,
                    'orderby'=>'post_date', // 投稿日順に並べる
                    'order'=>'DESC' // 新着順に並べる
                );
                    $the_query = new WP_Query($args); if($the_query->have_posts()):
                ?>
                <ul class="p-section--archive__contentWrapper">
                    <?php while ($the_query->have_posts()):$the_query->the_post(); ?>
                    <li class="c-card--postCard">
                        <a href="<?php the_permalink(); ?>"  class="c-card--postCard__link">
                            <div class="c-card--postCard__imgWrapper">
                                <img src="<?php echo CFS()->get('thumbnail') ;?>" alt="サンプル画像"  class="p-section--post__img">
                            </div>
                            <div class="c-card--postCard__sentence">
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
            </div>
        </section>
    </main>
<?php get_footer() ;?>
