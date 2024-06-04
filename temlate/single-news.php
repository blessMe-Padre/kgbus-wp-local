<?php
/*
Template Name: Шаблон отдельной новости
Template Post Type: post
*/
get_header();
?>

<main>
    <div class="container">
        <div class="breadcrumbs flex">
            <a href="/index.html"><span>Главная</span></a>
            <!-- <a href="#"><span>Специалисты</span></a> -->
            <span>Каких запахов боятся тараканы?</span>
        </div>
    </div>

    <section class="news-content">
        <div class="container-min">
            <h1 class="title">Каких запахов боятся тараканы?</h1>

            <div class="image-wrapper mb-7">
                <?php the_post_thumbnail(''); ?>
            </div>

            <?php the_content(); ?>

        </div>
    </section>

    <section id="news_box" data-scroll>
        <div class="container">
            <div class="h-wrapper">
                <h2>Последние <span>новости учреждения</span></h2>
                <a class="show_all" href="/news/">Посмотреть все</a>
            </div>

            <div class="w-0 min-w-full relative">
                <div class="news-swiper swiper">
                    <ul class="news swiper-wrapper justify-items-stretch">
                        <?php
                        $args = array(
                            'cat' => 5, // ID рубрики
                            'posts_per_page' => 6, // Количество постов на странице
                        );

                        $query = new WP_Query($args);

                        if ($query->have_posts()):
                            while ($query->have_posts()):
                                $query->the_post(); ?>
                                <li class="news_once swiper-slide">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="image">
                                            <?php the_post_thumbnail(''); ?>
                                        </div>

                                        <div class="info flex flex-col gap-5">
                                            <h3 class="title"><?php the_title(); ?></h3>

                                            <div class="description"><?php the_excerpt(); ?></div>

                                            <div class="date"><?php echo get_the_date(); ?></div>
                                        </div>
                                    </a>
                                </li>
                            <?php endwhile;
                        else:
                            echo 'Новостей нет';
                        endif;
                        wp_reset_postdata();
                        ?>
                    </ul>
                </div>

                <div class="swiper-buttons">
                    <div class="swiper-button-prev swiper-button-prev--category"></div>
                    <div class="swiper-button-next swiper-button-next--category"></div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>