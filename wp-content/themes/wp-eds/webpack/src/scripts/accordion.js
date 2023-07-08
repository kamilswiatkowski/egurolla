function accordion() {
    let accordionTop = document.querySelectorAll('[data-accordion]');
    console.log('tessdf');
    accordionTop.forEach((item) => {
        item.addEventListener('click', (e) => {
            let accordionBottom = item.nextElementSibling;
            accordionBottom.classList.toggle('open');
            item.classList.toggle('active');
        });
    });
}

function faqItem() {
    const toggleList = document.querySelectorAll('[data-accordion-toggle]');

    toggleList.forEach((element) => {

        const sectionElement = element.parentNode,
            contentElement = sectionElement.querySelector('[data-accordion-content]');

        element.addEventListener('click', (event) => {
            let contentHeight;

            sectionElement.classList.toggle('active');
            sectionElement.classList.contains('active') ? contentHeight = contentElement.scrollHeight : contentHeight = 0;
            contentElement.setAttribute('style', 'max-height: ' + contentHeight + 'px');
        });
    });
}

export default {accordion, faqItem};