
<?php require bash_path('views/partial/head.php') ?>
<?php require bash_path('views/partial/nav.php') ?>
<?php require bash_path('views/partial/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php if (!empty($notes)): ?>
                <?php foreach ($notes as $note) : ?>
                    <li>
                        <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                            <?= htmlspecialchars($note['body']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-gray-500">No notes found.</p>
            <?php endif; ?>
        </ul>

        <p class="mt-6">
            <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
        </p>
    </div>
</main>

<?php require bash_path('views/partial/footer.php') ?>
