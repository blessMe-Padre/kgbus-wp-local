<?php
/*
Template Name: Дезинсекция
*/
get_header();
?>

<main>
    <h1 class="visually-hidden">Дезинсекция</h1>

    <div class="section_group">
        <div class="container">

            <section id="service-hero" class="service-hero" data-scroll>
                <div class="breadcrumbs flex">
                    <a href="/index.html"><span>Главная</span></a>
                    <a href="#"><span>Услуги</span></a>
                    <span>Дезинсекция</span>
                </div>
                <div class="service-hero__wrapper">
                    <div>
                        <h2 class="title font-bold mb-5">Дезинсекция</h2>
                        <p class="service-hero__wrapper-text service-hero__wrapper-text--dez font-medium">Комплекс
                            мероприятий направленных на уничтожение насекомых

                            <img src="<?php echo get_template_directory_uri() ?>/src//img/creatures/fly.svg" width="25"
                                height="25" alt="">
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

                                <button type="submit" class="button my-5">
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

            <section class="about-service" data-scroll>
                <div class="about-service__description">
                    <h2 class="title"><span>Описание</span> услуги</h2>
                    <p class="mb-5 font-semibold">Когда проводят дезинсекцию? </p>
                    <p class="mb-5"> Дезинсекцию проводят круглогодично.</p>
                    <p class="mb-5 font-semibold"> Из каких мероприятий состоит дезинсекция?</p>
                    <p class="mb-5"> Для проведения дезинсекции необходимо определить площадь для правильного подбора
                        количества дезинсекционных средств.</p>
                </div>
                <div class="about-service__img about-service__img--dez image-wrapper">
                    <img src="<?php echo get_template_directory_uri() ?>/src//img/one-service/img-1.jpg" width="709"
                        alt="img">
                </div>
            </section>

            <section class="about-service about-service--reverse" data-scroll>
                <div class="about-service__img image-wrapper">
                    <img src="<?php echo get_template_directory_uri() ?>/src//img/one-service/img-2.jpg" width="709"
                        height="500" alt="img">
                </div>
                <div class="about-service__description">
                    <h2 class="title">Существуют <span>два вида дезинфекции:</span> </h2>
                    <p class="mb-5">
                        Очаговая дезинфекция – удаление с объектов патогенных микроорганизмов, в зависимости от способа
                        их передачи. Целью очаговой дезинфекции является предупреждение распространения возбудителей
                        инфекций от больных (носителей) с их выделениями и через объекты, имевшие контакт с больными.
                    </p>
                    <p class="mb-5">
                        Профилактическая дезинфекция – мероприятия по проведению дезинфекции, дезинсекции и дератизации
                        в условиях, когда источник инфекции не обнаружен, но возможно накопление патогенных
                        микроорганизмов во внешней среде.
                    </p>
                </div>
            </section>

            <section class="insects" data-scroll>
                <h2 class="title"><span>С какими насекомыми</span> мы поможем вам справиться?</h2>

                <ul class="insects__list">
                    <li class="insects__item image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src//img/insects/image-1.png" width="208"
                            height="170" alt="блохи">
                        <p>Блохи</p>
                    </li>
                    <li class="insects__item image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src//img/insects/image-2.png" width="208"
                            height="170" alt="Клещи">
                        <p>Клещи</p>
                    </li>
                    <li class="insects__item image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src//img/insects/image-3.png" width="208"
                            height="170" alt="Клопы">
                        <p>Клопы</p>
                    </li>
                    <li class="insects__item image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src//img/insects/image-4.png" width="208"
                            height="170" alt="Тараканы">
                        <p>Тараканы</p>
                    </li>
                    <li class="insects__item image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src//img/insects/image-5.png" width="208"
                            height="170" alt="Муравьи">
                        <p>Комары</p>
                    </li>
                    <li class="insects__item image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src//img/insects/image-6.png" width="208"
                            height="170" alt="Муравьи">
                        <p>Муравьи</p>
                    </li>
                    <li class="insects__item image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src//img/insects/image-7.png" width="208"
                            height="170" alt="Мухи">
                        <p>Мухи</p>
                    </li>
                    <li class="insects__item image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src//img/insects/image-8.png" width="208"
                            height="170" alt="Осы">
                        <p>Осы</p>
                    </li>
                </ul>
            </section>
        </div>
    </div>

    <div class="section_group">
        <div class="container">
            <section class="price" data-scroll>
                <h2 class="title title--small"><span>Стоимость проведения дезинфекции</span> (уничтожение болезнетворных
                    бактерий и патогенных микроорганизмов)</h2>

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

<?php
get_footer();
?>