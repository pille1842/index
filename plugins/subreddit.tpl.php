<form class="subreddit-form">
    <h2 class="subreddit-heading">
        <span class="shortcut"><?= $data['subreddit-shortcut'] ?></span>
        Jump to a subreddit
    </h2>
    <input data-shortcut="<?= $data['subreddit-shortcut'] ?>" type="text"
           class="subreddit-input" placeholder="babyelephantgifs, funny, programming, ...">
    <button class="subreddit-button">Go</button>
</form>
