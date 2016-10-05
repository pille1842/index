<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= $data['title'] ?></title>
    <link href="<?= dirname($_SERVER['REQUEST_URI']) ?>assets/default.css" rel="stylesheet" type="text/css">
    <?php foreach ($data['plugins-top'] as $plugin) { ?>
      <link href="<?= dirname($_SERVER['REQUEST_URI']) ?>assets/plugins/<?= $plugin ?>.css" rel="stylesheet" type="text/css">
    <?php } ?>
    <?php foreach ($data['plugins-bottom'] as $plugin) { ?>
      <link href="<?= dirname($_SERVER['REQUEST_URI']) ?>assets/plugins/<?= $plugin ?>.css" rel="stylesheet" type="text/css">
    <?php } ?>
  </head>
  <body>
    <div class="container">
      <?php
        foreach ($data['plugins-top'] as $plugin) {
          include(__DIR__ . '/../plugins/' . $plugin . '.tpl.php');
        }
      ?>
      <div class="groups">
      <?php foreach ($data['groups'] as $group) { ?>
        <div class="group" data-title="<?= $group['title'] ?>" data-shortcut="<?= $group['shortcut'] ?>">
          <h2>
            <span class="shortcut"><?= $group['shortcut'] ?></span>
            <?= $group['title'] ?>
          </h2>
          <ul class="links">
          <?php foreach ($group['links'] as $link) { ?>
            <li class="link" data-shortcut="<?= $link['shortcut'] ?>">
              <a href="<?= $link['url'] ?>" target="_blank">
                <span class="shortcut"><?= $link['shortcut'] ?></span>
                <?= $link['title'] ?>
              </a>
            </li>
          <?php } ?>
          </ul>
        </div>
      <?php } ?>
      </div>
    </div>
    <?php
        foreach ($data['plugins-bottom'] as $plugin) {
          include(__DIR__ . '/../plugins/' . $plugin . '.tpl.php');
        }
      ?>
    <script
        src="http://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
    <script
        src="<?= dirname($_SERVER['REQUEST_URI']) ?>assets/jquery.hotkeys.js"></script>
    <script>
      $('.group').each(function () {
        var group = $(this);
        var links = group.find('.links');
        var shortcut = group.data('shortcut');
        $(document).bind('keydown', shortcut, function () {
          console.log('Key ' + shortcut + ' was hit, toggling group');
          $('.links').hide();
          // Unset all link key handlers
          $(document).unbind('keydown.link');
          // Set new handlers for links in this group
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
        });
        group.on('click', function () {
          $('.links').hide();
          // Unset all link key handlers
          $(document).unbind('keydown.link');
          // Set new handlers for links in this group
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
        });
      });
    </script>
    <?php foreach ($data['plugins-top'] as $plugin) { ?>
      <script
        src="<?= dirname($_SERVER['REQUEST_URI']) ?>assets/plugins/<?= $plugin ?>.js"></script>
    <?php } ?>
    <?php foreach ($data['plugins-bottom'] as $plugin) { ?>
      <script
        src="<?= dirname($_SERVER['REQUEST_URI']) ?>assets/plugins/<?= $plugin ?>.js"></script>
    <?php } ?>
  </body>
</html>
