import '../styles/index.scss';
import 'slick-carousel/slick/slick';
import 'bootstrap';
import functions from './functions.js';
import sliders from "./sliders";
import map from './map.js';

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
            map.mapInit();
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


