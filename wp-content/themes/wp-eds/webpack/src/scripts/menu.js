function menu (){
    $('[data-toggle-menu]').on('click', function () {
        $('[data-menu]').toggleClass('open');
    });
}

export {menu};