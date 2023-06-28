import '../styles/index.scss';
import 'babel-polyfill';
import 'slick-carousel/slick/slick';
import 'bootstrap';
import functions from './functions.js';
import sliders from "./sliders";
import map from './map.js';
import filters from './filters';
import accordion from "./accordion";

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
            sliders.eventsSlider();
            sliders.advantagesSlider();
            sliders.whyYouShouldDanceSlider();
            sliders.experienceSlider();
            sliders.winsSlider();
            accordion.accordion();
            map.mapInit();
            filters.filtersInit();
            sliders.whoIsAgustinSlider();
            sliders.ourTeamSlider();
            sliders.eventPlanSlider();
            functions.timer();
            sliders.aboutInstructorSlider();
            sliders.teamLedBySlider();
            sliders.seeAlsoSlider();
            sliders.dancingStyleInOurSchoolSlider();
        });
    }

    onDOMLoaded() {
        document.addEventListener("DOMContentLoaded", (event) => {
            functions.cookies();
            functions.scrollToSection();
            functions.toggleMobileMenu();
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


