$('.google-button').hide();
$('.google-heading').on('click', function () {
    $(this).next('.google-input').focus();
});
$(document).bind('keydown', $('.google-input').data('shortcut'), function (event) {
    $('.google-input').focus();
    event.preventDefault();
});
