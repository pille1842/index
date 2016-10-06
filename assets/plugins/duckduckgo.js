$('.duckduckgo-button').hide();
$('.duckduckgo-heading').on('click', function () {
    $(this).next('.duckduckgo-input').focus();
});
$(document).bind('keydown', $('.duckduckgo-input').data('shortcut'), function (event) {
    $('.duckduckgo-input').focus();
    event.preventDefault();
});
