function menu (){
        let closeBtn = document.querySelector('.menu-mobile__close');
        let burgerBtn = document.querySelector('.menu-mobile__burger');
    $('[data-toggle-menu]').on('click', function () {
        closeBtn.classList.toggle('d-none');
        burgerBtn.classList.toggle('d-none');
        $('[data-mobile-menu]').toggleClass('open');
        document.body.classList.add('overflow-hidden');
    });
    closeBtn.addEventListener('click', function () {
        closeBtn.classList.toggle('d-none');
        burgerBtn.classList.toggle('d-none');
        $('[data-mobile-menu]').toggleClass('open');
        document.body.classList.remove('overflow-hidden');
    });
    let windowWidth = window.innerWidth;
    if (windowWidth < 992) {
        let link = document.querySelector('.menu-mobile .menu-item-has-children > a');

        link.addEventListener('click', function (e) {
            console.log(link);
            e.preventDefault();
            link.parentElement.toggle('open');
        });
    }

}

export default {menu};