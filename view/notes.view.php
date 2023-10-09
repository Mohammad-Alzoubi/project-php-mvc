<?php require('view/partials/head.php') ?>
<?php require('view/partials/nav.php') ?>


<?php require('view/partials/banner.php') ?>


<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/note?id=<?= $note['id']?>" class="text-blue-500 hover:underline">
                    <?= $note['body'] ?>
                </a>
            </li>
        <?php endforeach;?>
    <p class="mt-6">
        <a href="/notes/create" class="text-blue-500 hover:underline">Create note</a>
    </p>
    </div>
</main>

<?php require('view/partials/footer.php')?>