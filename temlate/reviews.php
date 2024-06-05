<?php
/*
Template Name: Отзывы 
*/
get_header();
?>
<main>
    <h1 class="visually-hidden">Отзывы</h1>

    <div class="container">
        <div class="breadcrumbs flex">
            <a href="/index.html"><span>Главная</span></a>
            <!-- <a href="#"><span>Специалисты</span></a> -->
            <span>Отзывы</span>
        </div>
    </div>

    <section class="reviews">
        <div class="container">
            <div class="flex flex-wrap items-center justify-between gap-1 sm:gap-5">
                <h2 class="title title--reviews"><span>Отзывы </span>наших клиентов</h2>
                <div class="button-wrapper w-[230px]">
                    <a href="#popup-reviews" class="button popup-link reviews-link">
                        <span>Оставить отзыв</span>
                        <img src="<?php echo get_template_directory_uri() ?>/src//img/icons/arrow-right.svg" width="18"
                            height="10" alt="кнопка заказать услугу">
                    </a>
                </div>
            </div>

            <?php echo show_reviews(); ?>

            <!-- <ul class="reviews reviews-list justify-items-stretch">
                <li class="rewiew flex flex-col">
                    <div class="head flex justify-between mb-7">
                        <p class="name">Сергей Витальевич</p>

                        <div class="flex items-center gap-1">
                            <div class="grade">5.0</div>
                            <img src="<?php echo get_template_directory_uri() ?>/src//img/star.svg" width="25"
                                height="25" alt="star">
                        </div>
                    </div>

                    <div class="comment">
                        Надежная организация. В это непростое время пандемии вируса КОВИД-19 нашей организации
                        потребовалось проводить регулярную обработку офисов с целью профилактики и борьбы с инфекциями.
                        После неудачного опыта сотрудничества с другой компанией, работать с КГБУЗ одно удовольствие.
                        Лицензии и договор есть, работы производятся четко по обозначенному графику
                    </div>

                    <ul class="gallery flex gap-5">
                        <li class="photo">
                            <a href="src/img/review_1_1.png"><img src="src/img/review_1_1.png" /></a>
                        </li>

                        <li class="photo">
                            <a href="src/img/review_1_2.png"><img src="src/img/review_1_2.png" /></a>
                        </li>
                    </ul>
                </li>
                <li class="rewiew flex flex-col">
                    <div class="head flex justify-between mb-7">
                        <p class="name">Сергей Витальевич</p>

                        <div class="flex items-center gap-1">
                            <div class="grade">5.0</div>
                            <img src="<?php echo get_template_directory_uri() ?>/src//img/star.svg" width="25"
                                height="25" alt="star">
                        </div>
                    </div>

                    <div class="comment">
                        Надежная организация. В это непростое время пандемии вируса КОВИД-19 нашей организации
                        потребовалось проводить регулярную обработку офисов с целью профилактики и борьбы с инфекциями.
                        После неудачного опыта сотрудничества с другой компанией, работать с КГБУЗ одно удовольствие.
                        Лицензии и договор есть, работы производятся четко по обозначенному графику
                    </div>

                    <ul class="gallery flex gap-5">
                        <li class="photo">
                            <a href="src/img/review_1_1.png"><img src="src/img/review_1_1.png" /></a>
                        </li>

                        <li class="photo">
                            <a href="src/img/review_1_2.png"><img src="src/img/review_1_2.png" /></a>
                        </li>
                    </ul>
                </li>
                <li class="rewiew flex flex-col">
                    <div class="head flex justify-between mb-7">
                        <p class="name">Сергей Витальевич</p>

                        <div class="flex items-center gap-1">
                            <div class="grade">5.0</div>
                            <img src="<?php echo get_template_directory_uri() ?>/src//img/star.svg" width="25"
                                height="25" alt="star">
                        </div>
                    </div>

                    <div class="comment">
                        Надежная организация. В это непростое время пандемии вируса КОВИД-19 нашей организации
                        потребовалось проводить регулярную обработку офисов с целью профилактики и борьбы с инфекциями.
                        После неудачного опыта сотрудничества с другой компанией, работать с КГБУЗ одно удовольствие.
                        Лицензии и договор есть, работы производятся четко по обозначенному графику
                    </div>

                    <ul class="gallery flex gap-5">
                        <li class="photo">
                            <a href="src/img/review_1_1.png"><img src="src/img/review_1_1.png" /></a>
                        </li>

                        <li class="photo">
                            <a href="src/img/review_1_2.png"><img src="src/img/review_1_2.png" /></a>
                        </li>
                    </ul>
                </li>
            </ul> -->

        </div>
    </section>

</main>
<section id="popup-reviews" class="popup">
    <div class="popup__body">
        <div class="popup__content">
            <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                    <path d="M4 1.45508L19.9099 17.365" stroke="#ffffff" />
                    <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#ffffff" />
                </svg>
            </button>
            <h2 class="">Оцените качество услуг</h2>
            <?php echo do_shortcode('[testimonial_view id="1"]'); ?>
        </div>
    </div>
</section>

<? get_footer(); ?>