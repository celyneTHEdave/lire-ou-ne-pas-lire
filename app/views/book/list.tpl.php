    <div class="list_container">
        <h2>Liste des livres</h2>
            <ul>
                <?php foreach($bookList as $currentbook) : ?>
                <li>
                    <strong><?= $currentbook->getTitle(); ?></strong>, de <?= $currentbook->getAuthor(); ?>
                    <a href="<?= $router->generate('book-review'); ?>" >&#9758;</a>
                </li>
                <?php endforeach; ?>
            </ul>
    </div>

