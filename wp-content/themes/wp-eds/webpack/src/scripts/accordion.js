function accordion(){
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

export default {accordion};