<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= $data['title'] ?></title>
    <link href="<?= $data['baseurl'] ?>assets/default.css" rel="stylesheet" type="text/css">
    <?php foreach ($data['plugins-top'] as $plugin) { ?>
      <link href="<?= $data['baseurl'] ?>assets/plugins/<?= $plugin ?>.css" rel="stylesheet" type="text/css">
    <?php } ?>
    <?php foreach ($data['plugins-bottom'] as $plugin) { ?>
      <link href="<?= $data['baseurl'] ?>assets/plugins/<?= $plugin ?>.css" rel="stylesheet" type="text/css">
    <?php } ?>
  </head>
  <body>
    <a href="https://github.com/pille1842/index" target="_blank">
      <img style="position: absolute; top: 0; right: 0; border: 0;"
           src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67"
           alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png">
         </a>
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
      <?php
        foreach ($data['plugins-bottom'] as $plugin) {
          include(__DIR__ . '/../plugins/' . $plugin . '.tpl.php');
        }
      ?>
    </div>
    <script
        src="http://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
    <script
        src="<?= $data['baseurl'] ?>assets/jquery.hotkeys.js"></script>
    <script
        src="<?= $data['baseurl'] ?>assets/default.js"></script>
    <?php foreach ($data['plugins-top'] as $plugin) { ?>
      <script
        src="<?= $data['baseurl'] ?>assets/plugins/<?= $plugin ?>.js"></script>
    <?php } ?>
    <?php foreach ($data['plugins-bottom'] as $plugin) { ?>
      <script
        src="<?= $data['baseurl'] ?>assets/plugins/<?= $plugin ?>.js"></script>
    <?php } ?>
  </body>
</html>
