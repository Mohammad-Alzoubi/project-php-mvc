<?php require('view/partials/head.php') ?>
<?php require('view/partials/nav.php') ?>


<?php require('view/partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">Go back...</a>
        </p>
        <?= htmlspecialchars($note['body']) ?>
    </div>
</main>

<?php require('view/partials/footer.php') ?>