<footer class="py-12 footer bg-dark-gray">
    <h2 class="visually-hidden">Контакты</h2>
    <div class="container">
        <div class="footer__header">
            <img src="<?php echo get_template_directory_uri() ?>/src/img/logo-footer.png" width="178" height="50"
                alt="логотип">
            <div class="flex items-center justify-between gap-5">

                <div class="footer-city">
                    <div class="flex gap-0 sm:gap-4">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/pin.svg" width="17"
                            height="22" alt="pin">
                        <select class="bg-transparent text-white" name="" id="">
                            <option class="text-black py-2 px-4" value="">Уссурийск</option>
                            <option class="text-black py-2 px-4" value="">Владивосток</option>
                            <option class="text-black py-2 px-4" value="">Находка</option>
                        </select>
                    </div>

                    <a class="text-green underline font-semibold" href="#" target="_blank"
                        rel="noopener noreferrer">Схема проезда</a>
                </div>

                <!-- сюда вставить шорткод "версии для слабовидящих"  -->
                <div class="py-2 px-5 bg-green rounded-3xl text-sm sm:text-base ml-5 sm:ml-0">
                    Версия для слабовидящих
                </div>
            </div>
        </div>
        <div class="footer-city-div"></div>

        <div class="footer__wrapper">
            <div>
                <h3>Услуги</h3>
                <?php wp_nav_menu([
                    'theme_location' => 'services',
                    'container' => '',
                    'menu_class' => 'header__wrapper-nav',
                    'menu_id' => ''
                ]);
                ?>
            </div>

            <div class="">
                <h3>Для Вас</h3>
                <?php wp_nav_menu([
                    'theme_location' => 'main-footer',
                    'container' => '',
                    'menu_class' => '',
                    'menu_id' => ''
                ]);
                ?>
            </div>

            <div class="footer__contact-wrapper">
                <h3>Контакты</h3>
                <div class="footer__contact">
                    <div>
                        <a class="font-bold" href="tel:+74234338229">8 (4234) 33 - 82 - 29</a>
                        <p class="text-white text-sm mb-4">Отдел очаговой и профилактической дезинфекции</p>
                    </div>

                    <div>
                        <a class="font-bold" href="tel:+74234338102">8 (4234) 33 - 81 - 02</a>
                        <p class="text-white text-sm mb-4">Главный врач</p>
                    </div>

                    <div>
                        <a class="font-bold" href="tel:+74234338100">8 (4234) 33 - 81 - 00</a>
                        <p class="text-white text-sm mb-4">Отдел бухгалтерии</p>
                    </div>

                    <div>
                        <a class="font-bold" href="tel:+74234338102">8 (4234) 33 - 81 - 02</a>
                        <p class="text-white text-sm mb-4">Специалист по персоналу</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__footer">
            <p class="">© КГБУЗ «Приморская дезинфекционная станция» 2024</p>
            <a class="underline" href="#">Политика обработки персональных данных</a>
        </div>
    </div>

    <section id="popup" class="popup">
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
</footer>
</div>
<div class="scroll-top">
    <!-- <img src="<?php echo get_template_directory_uri() ?>/src/img/up-arrow.svg" alt="стрелка вверх"> -->
</div>
<section class="component-demo" data-tabs="element">
    <div class="cookies" data-cookies="data-cookies" data-cookies-duration="30">
        <div class="cookies__text"><span>Мы используем куки</span></div>
        <button class="cookies__btn" type="button" data-cookies-consent="data-cookies-consent">OK</button>
    </div>
</section>

<?php wp_footer(); ?>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/swiper-bundle.min.js"></script>
<!-- <script src="<?php echo get_template_directory_uri() ?>/js/wow.js"></script> -->
<script src="<?php echo get_template_directory_uri() ?>/js/baguettebox.js"></script>
<script type="module" src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
</body>

</html>