$('.group').each(function () {
  var group = $(this);
  var links = group.find('.links');
  var shortcut = group.data('shortcut');
  $(document).bind('keydown', shortcut, function () {
    console.log('Key ' + shortcut + ' was hit, toggling group');
    var status = links.is(':visible');
    $('.links').hide();
    // Unset all link key handlers
    $(document).unbind('keydown.link');
    // Set new handlers for links in this group
    if (!status) {
      links.find('.link').each(function () {
        var link = $(this);
        var url = link.find('a').attr('href');
        var shortcut = link.data('shortcut');
        $(document).bind('keydown.link', shortcut, function () {
          win = window.open(url, '_blank');
          if (win) {
            win.focus();
          } else {
            alert('You need to enable pop-ups for this page to use link shortcuts.');
          }
        });
      });
      links.show();
    } else {
      links.hide();
    }
  });
  group.find('h2').on('click', function () {
    var status = links.is(':visible');
    $('.links').hide();
    // Unset all link key handlers
    $(document).unbind('keydown.link');
    // Set new handlers for links in this group
    if (!status) {
      links.find('.link').each(function () {
        var link = $(this);
        var url = link.find('a').attr('href');
        var shortcut = link.data('shortcut');
        $(document).bind('keydown.link', shortcut, function () {
          win = window.open(url, '_blank');
          if (win) {
            win.focus();
          } else {
            alert('You need to enable pop-ups for this page to use link shortcuts.');
          }
        });
      });
      links.show();
    } else {
      links.hide();
    }
  });
});
