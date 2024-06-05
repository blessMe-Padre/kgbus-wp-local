<?php
/*
Template Name: Шаблон отдельной услуги
*/
get_header();
?>

<main>
    <h1 class="visually-hidden"><?php the_title(); ?></h1>

    <div class="container">
        <section id="service-hero" class="service-hero mb-5" data-scroll>
            <div class="breadcrumbs flex">
                <a href="/index.html"><span>Главная</span></a>
                <!-- <a href="#"><span>Услуги</span></a> -->
                <span><?php the_title(); ?></span>
            </div>
            <div class="service-hero__wrapper">
                <div>
                    <h2 class="title font-bold mb-5"><?php the_title(); ?></h2>

                    <img class="service-hero__img service-hero__img--dez"
                        src="<?php echo get_template_directory_uri() ?>/src//img/one-service/one-service-bg.webp"
                        alt="">
                </div>
                <div>
                    <div class="form-wrapper relative">

                        <div class="sticker">
                            <img class="sticker__icon"
                                src="<?php echo get_template_directory_uri() ?>/src//img/one-service/crown.svg"
                                width="38" height="28" alt="icon">
                            <span class="price">2 790 ₽</span>
                            <span class="sale">3000 ₽</span>
                        </div>

                        <h3 class="form-section__title">Закажите услугу прямо сейчас и <span>получите скидку
                                10%</span></h3>
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
                                <span>Заказать услугу</span>
                                <img src="<?php echo get_template_directory_uri() ?>/src//img/icons/arrow-right.svg"
                                    width="18" height="10" alt="кнопка заказать услугу">
                            </button>

                            <p class="form-section__descriptions w-full">Нажимая кнопку «Заказать услуги»,
                                даю согласие на обработку персональных данных</p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="services-content" data-scroll>
        <div class="container">
            <?php the_content(); ?>
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
</main>

<?php get_footer(); ?>