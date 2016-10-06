<form class="google-form" method="get" action="<?= $data['google-url'] ?>" target="_blank">
    <h2 class="google-heading">
        <span class="shortcut"><?= $data['google-shortcut'] ?></span>
        Search on Google
    </h2>
    <input data-shortcut="<?= $data['google-shortcut'] ?>" type="text"
           class="google-input" name="q">
    <button class="google-button">Go</button>
</form>
