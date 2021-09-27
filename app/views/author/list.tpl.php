


    <div class="list_container">
        <h2>Tou(te)s les auteur(e)s</h2>
            <ul>
                <?php foreach($authorList as $currentAuthor) : ?>
                <li class="list_container_author">
                    <?= $currentAuthor->getName(); ?>
                    <a href="<?= $router->generate('book-review'); ?>" >&#9758;</a>
                </li>
                <?php endforeach; ?>
            </ul>
    </div>



    