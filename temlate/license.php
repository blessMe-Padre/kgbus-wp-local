<?php
/*
Template Name: Лицензии 
*/
get_header();
?>
<main>
    <h1 class="visually-hidden">Наше учреждение имеет все необходимые документы и лицензии</h1>

    <div class="container">
        <div class="breadcrumbs flex">
            <a href="/index.html"><span>Главная</span></a>
            <!-- <a href="#"><span>Специалисты</span></a> -->
            <span>Лицензии</span>
        </div>
    </div>

    <section id="sertificates_box" data-scroll>
        <div class="container">
            <h2>Наше учреждение имеет все <span>необходимые документы и лицензии</span></h2>

            <ul class="sertificates">
                <li>
                    <a class="sertificate block w-full rounded-[20px]"
                        href="<?php echo get_template_directory_uri() ?>/src/img/sertificate_1.png">
                        <span class="image">
                            <img class="max-w-full max-h-full object-contain rounded-[20px]"
                                src="<?php echo get_template_directory_uri() ?>/src/img/sertificate_1.png" />
                        </span>

                        <span class="show_file">
                            Посмотреть файл
                        </span>
                    </a>
                </li>

                <li>
                    <a class="sertificate block w-full rounded-[20px]"
                        href="<?php echo get_template_directory_uri() ?>/src/img/sertificate_2.png">
                        <span class="image">
                            <img class="max-w-full max-h-full object-contain rounded-[20px]"
                                src="<?php echo get_template_directory_uri() ?>/src/img/sertificate_2.png" />
                        </span>

                        <span class="show_file">
                            Посмотреть файл
                        </span>
                    </a>
                </li>

                <li>
                    <a class="sertificate block w-full rounded-[20px]"
                        href="<?php echo get_template_directory_uri() ?>/src/img/sertificate_3.png">
                        <span class="image">
                            <img class="max-w-full max-h-full object-contain rounded-[20px]"
                                src="<?php echo get_template_directory_uri() ?>/src/img/sertificate_3.png" />
                        </span>

                        <span class="show_file">
                            Посмотреть файл
                        </span>
                    </a>
                </li>
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
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/arrow-right.svg"
                                    width="18" height="10" alt="кнопка заказать услугу">
                            </button>
                        </form>
                    </div>
                    <p class="text-xs w-full">Нажимая кнопку «Получить бесплатную консультацию», даю согласие
                        на обработку персональных данных</p>
                </div>

                <img class="main-form__spray"
                    src="<?php echo get_template_directory_uri() ?>/src/img/main-form/spray.png" alt="спрей">
                <img class="main-form__bag" src="<?php echo get_template_directory_uri() ?>/src/img/main-form/bag.png"
                    alt="таракан">
                <img class="main-form__bag2" src="<?php echo get_template_directory_uri() ?>/src/img/main-form/bag2.png"
                    alt="таракан2">
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

</main>

<?php get_footer(); ?>