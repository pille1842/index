<div class="greeting">
    <?php
        $hour = date('H');
        if ($hour < 5) {
            $greeting = 'Good night';
        } elseif ($hour < 12) {
            $greeting = 'Good morning';
        } elseif ($hour < 18) {
            $greeting = 'Good day';
        } else {
            $greeting = 'Good evening';
        }
    ?>
    <?= $greeting ?>, <?= $data['greeting-username'] ?>!<br>
    What do you want to do?
</div>
