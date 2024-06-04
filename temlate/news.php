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
                <li>
                    <a href="#">
                        <div class="news__img image-wrapper">
                            <img src="<?php echo get_template_directory_uri() ?>/src//img/news/img-2.png" alt="">
                        </div>
                        <div class="news__description">
                            <h3>Каких запахов боятся тараканы?</h3>
                            <p>Куда сложнее не допустить их повторного появления. Избавиться от вредителей навсегда
                                поможет эффективный защитный барьер и организация профилактических мероприятий от
                                нашествия прусаков. Чтобы их разработать, можно воспользоваться информацией о том, чего
                                боятся тараканы. При обнаружении перечисленных факторов...</p>
                            <p class="news__date">12.02.2023</p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="news__img image-wrapper">
                            <img src="<?php echo get_template_directory_uri() ?>/src//img/news/img-1.png" alt="">
                        </div>
                        <div class="news__description">
                            <h3>Каких запахов боятся тараканы?</h3>
                            <p>Порой кажется, что избавиться от тараканов попросту невозможно...Порой кажется, что
                                избавиться от тараканов попросту невозможно..</p>
                            <p class="news__date">12.02.2023</p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="news__img image-wrapper">
                            <img src="<?php echo get_template_directory_uri() ?>/src//img/news/img-1.png" alt="">
                        </div>
                        <div class="news__description">
                            <h3>Каких запахов боятся тараканы?</h3>
                            <p>Порой кажется, что избавиться от тараканов попросту невозможно...</p>
                            <p class="news__date">12.02.2023</p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="news__img image-wrapper">
                            <img src="<?php echo get_template_directory_uri() ?>/src//img/news/img-1.png" alt="">
                        </div>
                        <div class="news__description">
                            <h3>Каких запахов боятся тараканы?</h3>
                            <p>Порой кажется, что избавиться от тараканов попросту невозможно...</p>
                            <p class="news__date">12.02.2023</p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="news__img image-wrapper">
                            <img src="<?php echo get_template_directory_uri() ?>/src//img/news/img-1.png" alt="">
                        </div>
                        <div class="news__description">
                            <h3>Каких запахов боятся тараканы?</h3>
                            <p>Порой кажется, что избавиться от тараканов попросту невозможно...</p>
                            <p class="news__date">12.02.2023</p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="news__img image-wrapper">
                            <img src="<?php echo get_template_directory_uri() ?>/src//img/news/img-2.png" alt="">
                        </div>
                        <div class="news__description">
                            <h3>Каких запахов боятся тараканы?</h3>
                            <p>Куда сложнее не допустить их повторного появления. Избавиться от вредителей навсегда
                                поможет эффективный защитный барьер и организация профилактических мероприятий от
                                нашествия прусаков. Чтобы их разработать, можно воспользоваться информацией о том, чего
                                боятся тараканы. При обнаружении перечисленных факторов...</p>
                            <p class="news__date">12.02.2023</p>
                        </div>
                        <a href="#">
                </li>
            </ul>
        </div>
    </section>

</main>

<?php get_footer(); ?>