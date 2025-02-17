<?php require bash_path('views/partial/head.php') ?>
<?php require bash_path('views/partial/nav.php') ?>
<?php require bash_path('views/partial/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/Laracast/notes" class="text-blue-500 underline">go back...</a>
        </p>
        <p><?= htmlspecialchars( $note['body']) ?></p>
    </div>
</main>

<?php require bash_path('views/partial/footer.php') ?>