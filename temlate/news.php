<?php
/*
Template Name: Новости
*/
get_header();
?>

<main>
    <h1 class="visually-hidden">Новости</h1>

    <div class="container">
        <div class="breadcrumbs flex">
            <a href="/index.html"><span>Главная</span></a>
            <!-- <a href="#"><span>Специалисты</span></a> -->
            <span>Новости</span>
        </div>
    </div>

    <section class="news">
        <div class="container">
            <h2 class="title"><span>Новости </span>учреждения</h2>

            <ul class="news__list">
                <?php

                // Настраиваем запрос
                $args = array(
                    'cat' => 5, // ID рубрики
                    'posts_per_page' => 6, // Количество постов на странице
                );

                $query = new WP_Query($args);

                if ($query->have_posts()):
                    while ($query->have_posts()):
                        $query->the_post(); ?>

                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <div class="news__img image-wrapper">
                                    <?php the_post_thumbnail(''); ?>
                                </div>
                                <div class="news__description">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_excerpt(); ?></p>
                                    <p class="news__date"><?php echo get_the_date(); ?></p>
                                </div>
                            </a>
                        </li>
                    <?php endwhile;
                else:
                    echo 'Нет постов в этой рубрике.';
                endif;
                wp_reset_postdata();
                ?>
            </ul>

            <?php
            // Пагинация
            $big = 999999999; // Уникальное число для замены
            ?>
            <div class="pagination-wrapper">
                <?php echo paginate_links(
                    array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $query->max_num_pages,
                        'prev_text' => __('&#8592;'),
                        'next_text' => __('&#8594;'),
                        'end_size' => 1,
                        'mid_size' => 2,
                    )
                );
                ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>