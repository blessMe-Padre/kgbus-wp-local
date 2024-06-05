<?php
/*
Template Name: Специалисты
*/
get_header();
?>
<main>
    <h1 class="visually-hidden">Отдел очаговой и профилактической дезинфекции</h1>

    <div class="container">
        <div class="breadcrumbs flex">
            <a href="/index.html"><span>Главная</span></a>
            <a href="#"><span>Специалисты</span></a>
            <span>СП "Уссурийск"</span>
        </div>
    </div>

    <div class="container">
        <section class="job-vacancy" data-scroll>
            <h2 class="visually-hidden">Открыта новая вакансия «Начальник структурного подразделения»</h2>
            <p>Открыта вакансия «Начальник структурного подразделения»</p>

            <div class="button-wrapper">
                <a href="#popup" class="button popup-link">
                    <span>Подать заявку</span>
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-right.svg" width="18"
                        height="10" alt="Подать заявку">
                </a>
            </div>

        </section>
    </div>

    <section class="spec-section mt-8" data-scroll>
        <div class="container">
            <h2 class="title font-semibold">Отдел очаговой и профилактической дезинфекции</h2>
            <ul class="spec-section-list">

                <?php
                $my_posts = get_posts(
                    array(
                        'numberposts' => -1,
                        'category' => '7',
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'post_type' => 'testimonial2',
                        'suppress_filters' => true,
                    )
                );

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                    ?>

                    <li class="spec-item">
                        <div class="image-wrapper">
                            <img src="<?= get_field("изображение_специалиста"); ?>" width="190" height="276" alt="avatar">
                        </div>
                        <div class="spec-item__description">
                            <h3><?= get_field("фио_специалиста"); ?></h3>
                            <p class="spec-item__job"><?= get_field("должность"); ?></p>
                            <p class="spec-item__text">
                                Образование: <?= get_field("образование"); ?>
                            </p>
                            <p class="spec-item__text">
                                Специальность: <?= get_field("специальность"); ?>
                            </p>
                            <a class="link"
                                href="tel:<?= get_field("телефон_для_роботов"); ?>"><?= get_field("телефон"); ?></a>
                        </div>
                    </li>
                    <!-- 
                    <li>
                        <div class="products__img image-wrapper">
                            <img src="<?= get_field("изображение_товара"); ?>" width="197" height="186" alt="product">
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <input class="hidden-product" type="hidden" value="<?php the_title(); ?>">
                        <p class="price"><?= get_field("цена_товара"); ?></p>

                        <div class="button-wrapper button-wrapper--width">
                            <a href="#popup-product" class="button popup-link">
                                <span>Заказать услуги</span>
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-right.svg"
                                    width="18" height="10" alt="кнопка заказать услугу">
                            </a>
                        </div>
                    </li> -->
                    <?php
                }
                wp_reset_postdata();
                ?>

            </ul>
        </div>
    </section>

    <section class="main-form" data-scroll>
        <div class="container">
            <div class="main-form__wrapper">
                <div>
                    <h2 class="title"><span>Получите бесплатную консультацию</span> специалиста
                        прямо сейчас</h2>
                    <p class="main-form__text">Оставьте контакты и наш специалист свяжется с вами в течение 15 минут</p>
                </div>
                <div class="main-form__form-wrapper">
                    <div class="form-wrapper">
                        <form action="#" id="form" class="form validate-form flex-col">
                            <div class="form__item">
                                <label for="formName">Введите имя</label>
                                <input id="formName" type="text" name="name">
                            </div>

                            <div class="form__item">
                                <label for="formName">Введите номер</label>
                                <input id="formPhone" type="tel" name="phone">
                            </div>

                            <button type="submit" class="button">
                                <span>Получить <span class="display-none">бесплатную</span> консультацию</span>
                                <img src="<?php echo get_template_directory_uri() ?>/src//img/icons/arrow-right.svg"
                                    width="18" height="10" alt="кнопка заказать услугу">
                            </button>
                        </form>
                    </div>
                    <p class="text-xs w-full">Нажимая кнопку «Получить бесплатную консультацию», даю согласие
                        на обработку персональных данных</p>
                </div>

                <img class="main-form__spray"
                    src="<?php echo get_template_directory_uri() ?>/src//img/main-form/spray.png" alt="спрей">
                <img class="main-form__bag" src="<?php echo get_template_directory_uri() ?>/src//img/main-form/bag.png"
                    alt="таракан">
                <img class="main-form__bag2"
                    src="<?php echo get_template_directory_uri() ?>/src//img/main-form/bag2.png" alt="таракан2">
            </div>
        </div>
    </section>

    <section id="map_box">
        <div class="container">
            <h2><span>Мы в Уссурийске</span></h2>

            <ul class="points-list">
                <li class="point">
                    <div class="phone_number flex justify-between items-center">
                        <a class="link" href="tel:+74234338229">8 (4234) 33 - 82 - 29</a>
                    </div>

                    <div class="text">Отдел очаговой и профилактической дезинфекции</div>
                </li>

                <li class="point">
                    <div class="phone_number flex justify-between items-center">
                        <a class="link" href="tel:+74234338102">8 (4234) 33 - 81 - 02</a>
                    </div>

                    <div class="text">Главный врач</div>
                </li>

                <li class="point">
                    <div class="phone_number flex justify-between items-center">
                        <a class="link" href="tel:+74234338100">8 (4234) 33 - 81 - 00</a>
                    </div>

                    <div class="text">Отдел бухгалтерии</div>
                </li>

                <li class="point">
                    <div class="phone_number flex justify-between items-center">
                        <a class="link" href="tel:+74234338102">8 (4234) 33 - 81 - 00</a>
                    </div>

                    <div class="text">Специалист по персоналу</div>
                </li>
            </ul>

            <div class="map">
                <iframe
                    src="https://yandex.ru/map-widget/v1/org/kgbuz_dezinfektsionnaya_stantsiya_g_ussuriysk_primorskiy_kray/1069931199/?ll=131.951744%2C43.799856&z=16"
                    width="100%" height="100%" frameborder="1" allowfullscreen="true"
                    style="position:relative;"></iframe>
            </div>
        </div>
    </section>

    <section id="popup" class="popup mt-[0]">
        <div class="popup__body">
            <div class="popup__content">
                <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                        <path d="M4 1.45508L19.9099 17.365" stroke="#ffffff" />
                        <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#ffffff" />
                    </svg>
                </button>
                <h2 class="text-start text-main-black z-10 font-normal md:text-4xl text-xl uppercase pb-10 ">
                    Закажите звонок</h2>
                <div>
                    <p class="font-semibold text-lg max-w-xs">Оставьте контакты и менеджер свяжется с вами в
                        ближайшее время</p>
                </div>
                <div class="form-wrapper">
                    <form action="#" id="form" class="form validate-form flex-col">
                        <div class="form__item">
                            <label for="formName">Введите имя</label>
                            <input id="formName" type="text" name="name">
                        </div>

                        <div class="form__item">
                            <label for="formName">Введите номер</label>
                            <input id="formPhone" type="tel" name="phone">
                        </div>


                        <button type="submit">Заказать звонок</button>

                    </form>
                </div>
                <p class="form-section__descriptions w-full">Нажимая кнопку “отправить заявку” вы даёте
                    согласие на <a class="underline" href="#" target="_blank" rel="noopener noreferrer">обработку
                        персональных
                        данных</a></p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>