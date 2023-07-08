import '../styles/index.scss';
import 'babel-polyfill';
import 'slick-carousel/slick/slick';
import 'bootstrap';
import functions from './functions.js';
import sliders from "./sliders";
import map from './map.js';
import filters from './filters';
import accordion from "./accordion";
import menu from "./menu";
import faq from "./faq";
import hero from "./hero";

class Main {
    constructor() {
        this.onDOMLoaded();
        this.onDocumentLoad();
        this.onResize();
        this.onScroll();
        window.jQuery = window.$ = $;
    }

    onDocumentLoad() {
        window.addEventListener("load", (event) => {
            sliders.slidersInit();
            accordion.accordion();
            accordion.faqItem();
            hero.heroInit();
            map.mapInit();
            filters.filtersInit();
            functions.timer();
            menu.menu();
            faq.faqFilter();
        });
    }

    onDOMLoaded() {
        document.addEventListener("DOMContentLoaded", (event) => {
            functions.cookies();
            functions.scrollToSection();
        });

    }

    onResize() {
        window.addEventListener('resize', (event) => {

        });
    }

    onScroll() {
        window.addEventListener('scroll', (event) => {

        });
    }

}

new Main();


