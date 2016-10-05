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
    <script
        src="<?= dirname($_SERVER['REQUEST_URI']) ?>assets/default.js"></script>
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
