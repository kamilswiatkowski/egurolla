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

}

export default {menu};