 
 <div class="list_container">
        <h2>Tous les livres</h2>
            <ul>
                <?php foreach($bookList as $currentBook) : ?>
                <li>
                    <?= $currentBook->getTitle(); ?><span class="booklist">, de <?= $currentBook->getName(); ?></span>
                    <!-- envoi vers la page du livre demandé -->
                    <?php $updateUrl = $router->generate('book-review', ['bookId' => $currentBook->getBookid()]) ?>
                    <a href="<?= $updateUrl; ?>" >&#9758;</a>
                </li>
                <?php endforeach; ?>
            </ul>
    </div>

<!-- //TODO
rajouter un menu déroulant pour choisir l'ordre d'affichage:
• par ordre alphabétique (par défaut)
• par ordre d'avis (ascendant)
• par ordre d'avis (descendant) -->