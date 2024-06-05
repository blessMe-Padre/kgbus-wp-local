import { initNav } from "./module/nav.js";
import { initSlider } from "./module/sliders.js";
import { initCurrentYear } from "./module/current-year.js";
import { initScrollToTop } from "./module/scroll-to-top.js";
import { initScroll } from "./module/scroll.js";
import { initAccordions } from "./module/accordions.js";
import { initArrowClass } from "./module/arrow-class-menu.js";
// import { initAnimateClass } from "./module/add_class_for_animation.js";
import { initAppend } from "./module/appendElement.js";

import { initBaguettes } from "./module/baguette_boxes.js";

import { initPopup } from "./module/popup.js";
import { initScrollAnimation } from "./module/scroll-animation.js";
import { runRoachedRun } from "./module/run-roached.js";
import { initMask } from "./module/phone-mask.js";
import { initItemsCount } from "./module/item-count.js";
import { initIntersectionObservers } from "./module/intersection_observers.js";
import { init404 } from "./module/404.js";
import { cookieConsentChecker } from './module/cookie-consent-checker.js';
import { initCityChooser } from "./module/city.js";
import { initPopupInput } from "./module/product-input.js";


window.addEventListener('DOMContentLoaded', () => {
    console.log('подключен скрипт main.js');

    // TODO: remove this when we have deployment
    const select = document.querySelector('.city-select');
    if (select) {
        initCityChooser();
    }

    initNav();
    initAccordions();
    initArrowClass();
    initAppend();
    initPopup();
    initScrollAnimation();
    runRoachedRun();
    initMask();
    initSlider();
    initItemsCount();
    init404();
    // initCurrentYear();
    // initScrollToTop();
    // initScroll();
    // baguetteBox.run('.gallery-wrapper');

    // initAnimateClass();
    initBaguettes();
    initIntersectionObservers();
    initPopupInput();

    cookieConsentChecker();

    function rebuild_input_file(input) {
        let input_id = input.attr('id');
        input.attr('accept', 'image/*').wrap('<span class="hidden"></span>').parent().after('<label for="' + input_id + '" class="file__button"></label>');
    }


    rebuild_input_file(jQuery('input[name="featured_image"]'));

    jQuery('body').on('change', 'input[name="featured_image"]', function (event_object) {
        let input_file = jQuery(event_object.currentTarget);
        let file_name = input_file.val().split("\\").reverse()[0];

        jQuery('label[for="' + input_file.attr('id') + '"].file__button').text(file_name);
    });

});
