<?php require('views/partial/head.php') ?>
<?php require('views/partial/nav.php') ?>
<?php require('views/partial/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach ($notes as $note) : ?>
            <li>
            <a href="/Laracast/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
    <?= htmlspecialchars($note['body']) ?>
</a>

            </li>
        <?php endforeach; ?>
    </div>
</main>
<?php require('views/partial/footer.php') ?>