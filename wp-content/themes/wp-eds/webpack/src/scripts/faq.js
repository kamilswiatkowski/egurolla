function faqFilter() {
    $('.faq__filter__button').on('click', function () {
        $('.faq__filter__button').removeClass('active');
        $(this).addClass('active');

        let thisValue = $(this).data('filter-value');
        if (thisValue == 'all') {
            $('[data-filter-block]').show();
        } else {
            $('[data-filter-block]').hide();
            $('[data-filter-block="' + thisValue + '"]').show();
        }
    });
}

export default {faqFilter};