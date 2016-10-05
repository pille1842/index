$('.subreddit-button').hide();
$('.subreddit-form').submit(function (event) {
    var input = $(this).find('.subreddit-input').val();
    win = window.open('https://www.reddit.com/r/' + input, '_blank');
    if (win) {
        win.focus();
        $(this).find('.subreddit-input').val('');
    } else {
        alert('You need to enable pop-ups for the subreddit jumper to work.');
    }
    event.preventDefault();
});
$('.subreddit-heading').on('click', function () {
    $(this).next('.subreddit-input').focus();
});
$(document).bind('keydown', $('.subreddit-input').data('shortcut'), function (event) {
    $('.subreddit-input').focus();
    event.preventDefault();
});
