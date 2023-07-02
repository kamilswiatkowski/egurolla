function menu (){
        let closeBtn = document.querySelector('.menu-mobile__close');
        let burgerBtn = document.querySelector('.menu-mobile__burger');
    $('[data-toggle-menu]').on('click', function () {
        closeBtn.classList.toggle('d-none');
        burgerBtn.classList.toggle('d-none');
        $('[data-mobile-menu]').toggleClass('open');
    });
    closeBtn.addEventListener('click', function () {
        closeBtn.classList.toggle('d-none');
        burgerBtn.classList.toggle('d-none');
        $('[data-mobile-menu]').toggleClass('open');
    });
    let windowWidth = window.innerWidth;
    if (windowWidth < 992) {
        $('.menu-mobile .menu-item-has-children > a').on('click', function (e) {
            e.preventDefault();
            $(this).parent().toggleClass('open');
        });
    }

}

export default {menu};