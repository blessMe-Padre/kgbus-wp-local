<?php
/*
Template Name: Дератизация
*/
get_header();
?>
<main>
    <h1 class="visually-hidden">Дератизация</h1>

    <div class="section_group">
        <div class="container">

            <section id="service-hero" class="service-hero" data-scroll>
                <div class="breadcrumbs flex">
                    <a href="/index.html"><span>Главная</span></a>
                    <a href="#"><span>Услуги</span></a>
                    <span>Дератизация</span>
                </div>
                <div class="service-hero__wrapper">
                    <div>
                        <h2 class="title font-bold mb-5">Дератизация</h2>
                        <p class="service-hero__wrapper-text service-hero__wrapper-text--dez font-medium">Комплексные
                            мероприятия по уничтожению грызунов

                            <img src="<?php echo get_template_directory_uri() ?>/src//img/creatures/mouse.svg"
                                width="25" height="25" alt="">
                        </p>

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

            <section class="rats">
                <div class="rats__wrapper">
                    <div class="rats__item bg-light-gray">
                        <h2 class="title">Борьба <span>с крысами</span></h2>
                        <p class="mb-7">
                            <strong>Крыса</strong> - подвижный и осторожный грызун. Хорошо бегает, прыгает до 70 см.,
                            плавает и ныряет. Для поиска пищи крыса способна перемещаться на расстояние до 3 км. Обитает
                            повсеместно, всеядна. Является переносчиком множества болезней (Псевдотуберкулез,
                            сальмонеллез, клещевой энцефалит, туляремия, бешенство, кишечный иерсиниоз и т.д.).
                        </p>
                        <p>
                            Длина тела серой крысы без хвоста колеблется от 15 до 25 см., длина хвоста короче тела и
                            имеет 210 чешуйчатых колец, уши небольшие и густо покрыты волосами, лапы относительно малы,
                            пальцы задних ног имеют кожистые складки.
                        </p>
                    </div>
                    <div class="rats__item rats__item--img">
                        <div class="image-wrapper">
                            <img src="<?php echo get_template_directory_uri() ?>/src//img/rats/image.webp" width="709"
                                height="471" alt="крыса">
                        </div>
                    </div>
                </div>
                <div class="rats__wrapper">
                    <div class="rats__item rats__item--img rats__item--mouse">
                        <div class="image-wrapper">
                            <img src="<?php echo get_template_directory_uri() ?>/src//img/rats/image-2.webp" width="709"
                                height="471" alt="мышь">
                        </div>
                    </div>
                    <div class="rats__item bg-light-gray">
                        <h2 class="title">Борьба <span>с мышами</span></h2>
                        <p class="mb-7">
                            Мышь - Всеядный грызун. Пометом и мочой загрязняет  пищевые продукты и делает их
                            непригодными к употреблению. Характеризуется своей подвижностью, умением высоко прыгать и
                            прожорливостью. Является переносчиком многих болезней (листериоз, бруцеллез, лептоспироз,
                            туляремия, чума, ГЛПС, клещевой энцефалит, сыпной тиф и т.д.).
                        </p>
                        <p>
                            Мышь имеет коричнево-серую спинку и светло-серое брюшко. Длина ее тела колеблется от 7 до 10
                            см. Длина хвоста практически всегда равна длине тела и имеет 180 чешуйчатых колец, уши
                            длинные около 1,5 см. лапы не покрыты волосами. Следы узкие, с нешироко расставленными
                            фалангами лап.
                        </p>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <div class="section_group">
        <div class="container">
            <section class="price" data-scroll>
                <h2 class="title"><span>Стоимость проведения дератизация</span> (уничтожение грызунов)</h2>

                <p class="sub-title">Стоимость производимых работ зависит от: значимости объекта, санитарно-технического
                    состояния, кратность проведения работ, местонахождение объекта, вид и назначение помещений</p>

                <div class="price__wrapper">
                    <table class="price__table">
                        <thead>
                            <th colspan="2">Для физических лиц</th>
                        </thead>
                        <tr>
                            <td>Гостинка</td>
                            <td>3 000 ₽</td>
                        </tr>
                        <tr>
                            <td>1 комнатная</td>
                            <td>3 500 ₽</td>
                        </tr>
                        <tr>
                            <td>2 комнатная</td>
                            <td>4 000 ₽</td>
                        </tr>
                        <tr>
                            <td>3 комнатная</td>
                            <td>4 500 ₽</td>
                        </tr>
                        <tr>
                            <td>+ 1 комната</td>
                            <td>500 ₽</td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="price__table">
                        <thead>
                            <th colspan="2"> Для юридических лиц</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Площадь от 1 до 30 м²</td>
                                <td>3 000 ₽</td>
                            </tr>
                            <tr>
                                <td>Площадь от 1 до 30 м²</td>
                                <td>3 500 ₽</td>
                            </tr>
                            <tr>
                                <td>Площадь от 1 до 30 м²</td>
                                <td>4 000 ₽</td>
                            </tr>
                            <tr>
                                <td>Площадь от 1 до 30 м²</td>
                                <td>4 500 ₽</td>
                            </tr>
                            <tr>
                                <td>Площадь от 1 до 30 м²</td>
                                <td>500 ₽</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="how">
                <h2 class="title"><span>Как будет проходить</span> дезинфекция?</h2>
                <p class="sub-title">Если у вас возникло опасение, что в вашей квартире, офисе или на производстве
                    появилась заразная инфекция. Или образовалась плесень. Длительное время не производилась уборка. Во
                    всех этих случаях настоятельно рекомендуем вам произвести полную дезинфекцию, чтобы избежать
                    серьёзных проблем со здоровьем</p>

                <ul class="how__list">
                    <li class="how__item bg-gray">
                        <h3 class="bg-white text-gray">1 этап</h3>
                        <p class="font-medium text-white">В назначенное время и место прибудет наш специалист со всем
                            необходимым оборудованием и договором на проведение услуги дезинфекции. Проводится анализ
                            загрязнений, выявление источника</p>
                    </li>
                    <li class="how__item bg-green">
                        <h3 class="bg-white bg-green">2 этап</h3>
                        <p class="font-medium text-white">Мастер оценит ситуацию, выберет средства дезинфекции, наиболее
                            соответствующих выявленной проблеме</p>
                    </li>
                    <li class="how__item bg-gray">
                        <h3 class="bg-green text-white">3 этап</h3>
                        <p class="font-medium text-white">Мы согласуем с вами график работ и все препараты, которые
                            будут использоваться</p>
                    </li>
                    <li class="how__item bg-gray">
                        <h3 class="bg-white text-gray">4 этап</h3>
                        <p class="font-medium text-white">Непосредственно сама дезинфекция. Дальнейшие действия
                            специалиста не требуют Вашего присутствия. При этом вы можете быть абсолютно уверены в
                            сохранности оборудования, мебели и других предметов в помещении</p>
                    </li>
                </ul>
            </section>
        </div>
    </div>

    <div class="section_group">
        <section id="reviews_box" data-scroll>
            <div class="container">
                <div class="h-wrapper">
                    <h2><span>Отзывы</span> наших клиентов</h2>
                    <a class="show_all" href="">Посмотреть все</a>
                </div>

                <div class="w-0 min-w-full relative">
                    <div class="reviews-swiper swiper">
                        <?php echo show_reviews_one(); ?>
                    </div>

                    <div class="swiper-buttons reverse">
                        <div class="swiper-button-prev swiper-button-prev--category"></div>
                        <div class="swiper-button-next swiper-button-next--category"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="main-form" data-scroll>
            <div class="container">
                <div class="main-form__wrapper">
                    <div>
                        <h2 class="title title--small"><span>Получите бесплатную консультацию</span> специалиста
                            прямо сейчас</h2>
                        <p class="main-form__text">Оставьте контакты и наш специалист свяжется с вами в течение 15 минут
                        </p>
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
                    <img class="main-form__bag"
                        src="<?php echo get_template_directory_uri() ?>/src//img/main-form/bag.png" alt="таракан">
                    <img class="main-form__bag2"
                        src="<?php echo get_template_directory_uri() ?>/src//img/main-form/bag2.png" alt="таракан2">
                </div>
            </div>
        </section>
    </div>

    <div class="section_group">
        <div class="container">
            <section class="tools" data-scroll>
                <h2 class="title">Для проведения дезинфекционных работ <span>учреждение использует:</span></h2>
                <ul class="tools__list">
                    <li class="tools__item bg-green">
                        <h3 class="text-white">Профессиональные, современные
                            и эффективные препараты
                            и оборудование</h3>
                        <div class="flex items-end justify-between gap-3 -mt-5">
                            <span class="font-bold py-2 px-3 text-green bg-blur-green rounded">КГБУЗ</span>
                            <img class="-mb-28 sm:mb-0"
                                src="<?php echo get_template_directory_uri() ?>/src//img/tools/1.webp" width="254"
                                height="212" alt="img">
                        </div>
                    </li>
                    <li class="tools__item bg-gray tools__item--bg-image">
                        <h3 class="text-white">Имеющие сертификаты соответствия
                            и прошедшие государственную регистрацию</h3>
                        <div class="flex items-end justify-between gap-3">
                            <span class="font-bold py-2 px-3 text-gray bg-white rounded">КГБУЗ</span>
                            <img class="-mb-28 sm:mb-0"
                                src="<?php echo get_template_directory_uri() ?>/src//img/tools/2.webp" width="161"
                                height="230" alt="img">
                        </div>
                    </li>
                    <li class="tools__item bg-white tools__item--third">
                        <h3>Подбирает различные методы обработки помещений и открытых территорий (аэрозольный, метод
                            «холодного тумана, комбинированный)</h3>
                        <div class="flex items-end justify-between gap-3">
                            <span class="font-bold py-2 px-3 text-white bg-gray rounded">КГБУЗ</span>
                            <img class="-ml-16" src="<?php echo get_template_directory_uri() ?>/src//img/tools/3.webp"
                                width="400" height="112" alt="img">

                        </div>
                    </li>
                </ul>
            </section>
        </div>
    </div>

    <div class="section_group"></div>

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