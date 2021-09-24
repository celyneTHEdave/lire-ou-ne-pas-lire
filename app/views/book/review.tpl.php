<h2></h2>

<div class="headline">
            <h2>L'oeuvre à la une</h2>
            <div class="headline_card"><?php foreach($bookList as $currentBook) : ?>
                <img src="<?= $currentBook->getPicture(); ?>">
                    <div class="headline_text">
                        <h3><?= $currentBook->getTitle(); ?></h3>
                        <div><?= $currentBook->getAuthor(); ?></div>
                        <div><?= $currentBook->getEditor(); ?></div>
                        <div><?= $currentBook->getPublished_in(); ?></div>
                        <div><?= $currentBook->getType(); ?></div>
                        <div><?= $currentBook->getRate(); ?></div>
                        <div><?= $currentBook->getSummary(); ?></div>
                        <a href="<?= $router->generate('author-list'); ?>" >Voir plus</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>