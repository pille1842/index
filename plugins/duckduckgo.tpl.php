<form class="duckduckgo-form" method="get" action="https://duckduckgo.com/" target="_blank">
    <h2 class="duckduckgo-heading">
        <span class="shortcut"><?= $data['duckduckgo-shortcut'] ?></span>
        Search on DuckDuckGo
    </h2>
    <input data-shortcut="<?= $data['duckduckgo-shortcut'] ?>" type="text"
           class="duckduckgo-input" name="q">
    <button class="duckduckgo-button">Go</button>
</form>
