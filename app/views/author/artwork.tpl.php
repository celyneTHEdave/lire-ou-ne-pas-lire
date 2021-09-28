
<h2 class="page_title">Tous les livres de <?= $artworks[0]->authorName;?></h2>


            <div class="summary_card">
                <?php foreach($artworks as $currentAuthor) : ?>
                <div class="summary_illustration">
                    <img src="<?= $currentAuthor->getCouvpicture(); ?>" alt="review_image" class="summary_couv">
                </div>
                <div class="summary_content">
                    <?php $updateUrl = $router->generate('book-review', ['bookId' => $currentAuthor->getBookid()]) ?>
                    <h3><?= $currentAuthor->getTitle(); ?><a href="<?= $updateUrl; ?>" >&nbsp; &#9758;</a></h3>
       
                    <p><?= $currentAuthor->getSummary(); ?></p>
                </div>
                <?php endforeach; ?>
            </div>


            <div class="summary_card">
                <?php foreach($artworks as $currentAuthor) : ?>
                <div class="summary_illustration">
                    <img src="<?= $currentAuthor->getCouvpicture(); ?>" alt="review_image" class="summary_couv">
                </div>
                <div class="summary_content">
                    <?php $updateUrl = $router->generate('book-review', ['bookId' => $currentAuthor->getBookid()]) ?>
                    <h3><?= $currentAuthor->getTitle(); ?><a href="<?= $updateUrl; ?>" >&nbsp; &#9758;</a></h3>
       
                    <p><?= $currentAuthor->getSummary(); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
