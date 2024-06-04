<?php
/*
Template Name: Продукция
*/
get_header();
?>
<main>
    <h1 class="visually-hidden">Продукция</h1>

    <div class="container">
        <div class="breadcrumbs flex">
            <a href="/index.html"><span>Главная</span></a>
            <!-- <a href="#"><span>Специалисты</span></a> -->
            <span>Продукция</span>
        </div>
    </div>

    <section class="products">
        <div class="container">
            <h2 class="title"><span>Избавьтесь от насекомых</span> самостоятельно!</h2>
            <p class="sub-title">
                Представляем новинку — боксы для самостоятельной обработки помещений от тараканов и клопов! В наших
                боксах вы найдете все необходимое для эффективной и безопасной обработки. Доступны три вида боксов: от
                тараканов, от клопов и комплексный вариант — бокс от клопов и тараканов.
            </p>

            <ul class="products__list">
                <li>
                    <div class="products__img image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src//img/product.jpg" width="197"
                            height="186" alt="product">
                    </div>

                    <h3>От тараканов</h3>
                    <p class="price">3 000 ₽</p>

                    <div class="products__linl-wrapper">
                        <a href="#popup" class="button button--large popup-link">
                            <span>Заказать</span>
                            <img src="<?php echo get_template_directory_uri() ?>/src//img/icons/arrow-right.svg"
                                width="18" height="10" alt="кнопка заказать услугу">
                        </a>
                    </div>
                </li>
                <li>
                    <div class="products__img image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src//img/product.jpg" width="197"
                            height="186" alt="product">
                    </div>

                    <h3>От тараканов</h3>
                    <p class="price">3 000 ₽</p>

                    <div class="products__linl-wrapper">
                        <a href="#popup" class="button button--large popup-link">
                            <span>Заказать</span>
                            <img src="<?php echo get_template_directory_uri() ?>/src//img/icons/arrow-right.svg"
                                width="18" height="10" alt="кнопка заказать услугу">
                        </a>
                    </div>
                </li>
                <li>
                    <div class="products__img image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src//img/product.jpg" width="197"
                            height="186" alt="product">
                    </div>

                    <h3>От тараканов</h3>
                    <p class="price">3 000 ₽</p>

                    <div class="products__linl-wrapper">
                        <a href="#popup" class="button button--large popup-link">
                            <span>Заказать</span>
                            <img src="<?php echo get_template_directory_uri() ?>/src//img/icons/arrow-right.svg"
                                width="18" height="10" alt="кнопка заказать услугу">
                        </a>
                    </div>
                </li>
                <li>
                    <div class="products__img image-wrapper">
                        <img src="<?php echo get_template_directory_uri() ?>/src//img/product.jpg" width="197"
                            height="186" alt="product">
                    </div>

                    <h3>От тараканов</h3>
                    <p class="price">3 000 ₽</p>

                    <div class="products__linl-wrapper">
                        <a href="#popup" class="button button--large popup-link">
                            <span>Заказать</span>
                            <img src="<?php echo get_template_directory_uri() ?>/src//img/icons/arrow-right.svg"
                                width="18" height="10" alt="кнопка заказать услугу">
                        </a>
                    </div>
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

    <section id="popup" class="popup mt-0">
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
                    <p class="font-semibold text-lg">Оставьте контакты и менеджер свяжется с вами в
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

<?php
get_footer();
?>