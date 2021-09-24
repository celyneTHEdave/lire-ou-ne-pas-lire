<!-- <?php var_dump($authorList); ?> -->


    <div class="list_container">
        <h2>Liste des auteur(e)s</h2>
            <ul>
                <?php foreach($authorList as $currentAuthor) : ?>
                <li>
                    <strong><?= $currentAuthor->getName(); ?>
                    <a href="<?= $router->generate('book-review'); ?>" >&#9758;</a>
                </li>
                <?php endforeach; ?>
            </ul>
    </div>



    