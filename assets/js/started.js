$(document).ready(function () {
    const iconSearch = $('#s');
    const iconClose = $("span.close");
    const boxSearch = $(".search");
    iconSearch.click(function() {
        $(this).css('display','none');
        iconClose.css('display','flex');
        boxSearch.toggleClass('show-s');
        iconClose.click(function() {
            boxSearch.removeClass('show-s');
            iconClose.css('display','none');
            iconSearch.css('display','block');
        });
    });
});