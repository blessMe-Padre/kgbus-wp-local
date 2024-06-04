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
                <a class="show_all" href="#">Посмотреть все</a>
            </div>

            <div class="w-0 min-w-full relative">
                <div class="news-swiper swiper">
                    <ul class="news swiper-wrapper justify-items-stretch">
                        <li class="news_once swiper-slide">
                            <a href="#">
                                <div class="image">
                                    <img src="src/img/news_once_image.png" />
                                </div>

                                <div class="info flex flex-col gap-5">
                                    <div class="title">Каких запахов боятся тараканы?</div>

                                    <div class="description">Порой кажется, что избавиться от тараканов попросту
                                        невозможно...</div>

                                    <div class="date">12.02.2023</div>
                                </div>
                            </a>
                        </li>

                        <li class="news_once swiper-slide">
                            <a href="#">
                                <div class="image">
                                    <img src="src/img/news_once_image.png" />
                                </div>

                                <div class="info flex flex-col gap-5">
                                    <div class="title">Каких запахов боятся тараканы?</div>

                                    <div class="description">Порой кажется, что избавиться от тараканов попросту
                                        невозможно...</div>

                                    <div class="date">12.02.2023</div>
                                </div>
                            </a>
                        </li>

                        <li class="news_once swiper-slide">
                            <a href="#">
                                <div class="image">
                                    <img src="src/img/news_once_image.png" />
                                </div>

                                <div class="info flex flex-col gap-5">
                                    <div class="title">Каких запахов боятся тараканы?</div>

                                    <div class="description">Порой кажется, что избавиться от тараканов попросту
                                        невозможно...</div>

                                    <div class="date">12.02.2023</div>
                                </div>
                            </a>
                        </li>

                        <li class="news_once swiper-slide">
                            <a href="#">
                                <div class="image">
                                    <img src="src/img/news_once_image.png" />
                                </div>

                                <div class="info flex flex-col gap-5">
                                    <div class="title">Каких запахов боятся тараканы?</div>

                                    <div class="description">Порой кажется, что избавиться от тараканов попросту
                                        невозможно...</div>

                                    <div class="date">12.02.2023</div>
                                </div>
                            </a>
                        </li>

                        <li class="news_once swiper-slide">
                            <a href="#">
                                <div class="image">
                                    <img src="src/img/news_once_image.png" />
                                </div>

                                <div class="info flex flex-col gap-5">
                                    <div class="title">Каких запахов боятся тараканы?</div>

                                    <div class="description">Порой кажется, что избавиться от тараканов попросту
                                        невозможно...</div>

                                    <div class="date">12.02.2023</div>
                                </div>
                            </a>
                        </li>

                        <li class="news_once swiper-slide">
                            <a href="#">
                                <div class="image">
                                    <img src="src/img/news_once_image.png" />
                                </div>

                                <div class="info flex flex-col gap-5">
                                    <div class="title">Каких запахов боятся тараканы?</div>

                                    <div class="description">Порой кажется, что избавиться от тараканов попросту
                                        невозможно...</div>

                                    <div class="date">12.02.2023</div>
                                </div>
                            </a>
                        </li>

                        <li class="news_once swiper-slide">
                            <a href="#">
                                <div class="image">
                                    <img src="src/img/news_once_image.png" />
                                </div>

                                <div class="info flex flex-col gap-5">
                                    <div class="title">Каких запахов боятся тараканы?</div>

                                    <div class="description">Порой кажется, что избавиться от тараканов попросту
                                        невозможно...</div>

                                    <div class="date">12.02.2023</div>
                                </div>
                            </a>
                        </li>

                        <li class="news_once swiper-slide">
                            <a href="#">
                                <div class="image">
                                    <img src="src/img/news_once_image.png" />
                                </div>

                                <div class="info flex flex-col gap-5">
                                    <div class="title">Каких запахов боятся тараканы?</div>

                                    <div class="description">Порой кажется, что избавиться от тараканов попросту
                                        невозможно...</div>

                                    <div class="date">12.02.2023</div>
                                </div>
                            </a>
                        </li>
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