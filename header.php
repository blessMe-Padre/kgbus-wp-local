<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>КГБУЗ</title>

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>
</head>

<body>
    <div class="h-screen grid grid-rows-[auto_1fr_auto] wrapper">
        <header class="z-10 w-full md-28 transition-colors header">
            <div class="container">
                <div class="flex justify-between items-center">
                    <div class="flex py-5">
                        <a href="/">
                            <img class="header-logo" src="<?php echo get_template_directory_uri() ?>/src/img/logo.svg"
                                alt="">
                        </a>
                    </div>
                    <div class="flex gap-2 sm:gap-5">
                        <div class="header-contact flex gap-2 sm:gap-5">
                            <div class="flex gap-0 sm:gap-4 header-contact-1 relative">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/pin.svg" width="17"
                                    height="22" alt="pin">
                                <select name="" id="" class="city-select">
                                    <option value="Уссурийск">Уссурийск</option>
                                    <option value="Владивосток">Владивосток</option>
                                    <option value="Находка">Находка</option>
                                </select>

                                <div class="city-popup">
                                    <p>Ваш город:<span> Уссурийск</span>?</p>
                                    <div class="mt-1">
                                        <button class="city-popup-btn city-popup-yes">да</button>
                                        <button class="city-popup-btn city-popup-no">нет</button>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 sm:gap-4 header-contact-2">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/phone.svg"
                                    height="20" width="20" alt="phone">
                                <a class="text-xs sm:text-lg font-bold link" href="tel:+84234338229">8(4234)33-82-29</a>
                            </div>
                        </div>

                        <?php echo do_shortcode('[bvi text="Версия для слабовидящих"]') ?>
                    </div>
                </div>

                <div class="flex items-center py-3 relative">
                    <div class="flex items-center justify-between w-full sm:w-[160px]">
                        <button class="btn-close-menu hidden sm:flex mr-14">
                            <svg viewBox="0 0 64 48">
                                <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                            </svg>
                            <span class="font-semibold link">Услуги</span>
                        </button>

                        <button class="btn-close-menu-mobile mr-3 sm:mr-14 flex sm:hidden">
                            <svg viewBox="0 0 64 48">
                                <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                            </svg>
                            <span class="font-semibold link">Меню</span>
                        </button>

                        <div class="header-group"></div>
                    </div>

                    <nav class="header-nav hidden sm:block">
                        <?php wp_nav_menu([
                            'theme_location' => 'main',
                            'container' => '',
                            'menu_class' => '',
                            'menu_id' => ''
                        ]);
                        ?>
                    </nav>

                    <div class="services-menu hidden sm:block">
                        <?php wp_nav_menu([
                            'theme_location' => 'services',
                            'container' => '',
                            'menu_class' => 'services-menu__list',
                            'menu_id' => ''
                        ]);
                        ?>
                    </div>

                    <div class="services-menu services-menu--mobile">
                        <ul class="services-menu__list mobile-menu-accordion">
                            <li><a href="#">Услуги</a>
                                <?php wp_nav_menu([
                                    'theme_location' => 'services',
                                    'container' => '',
                                    'menu_class' => 'sub-menu',
                                    'menu_id' => ''
                                ]);
                                ?>

                            </li>
                        </ul>

                        <?php wp_nav_menu([
                            'theme_location' => 'main',
                            'container' => '',
                            'menu_class' => 'services-menu__list mobile-menu-accordion',
                            'menu_id' => ''
                        ]);
                        ?>
                    </div>
                </div>

            </div>
        </header>