    <div class="review">
            <div class="review_card">

                    <div class="review_text">
                        <h3><?= $bookReview->getTitle(); ?></h3>
                        <h4><?= $bookReview->getName(); ?></h4>
                        <div><img src="<?= $bookReview->getCouvpicture(); ?>" alt="review_image" class="review_couv"></div>
                        <div><strong>Editeur :&nbsp;</strong><?= $bookReview->getEditor(); ?></div>
                        <div><strong>Genre :&nbsp;</strong>:<?= $bookReview->getTypename(); ?></div>
                        <div ><strong>Notre avis :&nbsp;</strong><?= $bookReview->getRatename(); ?></div>
                        <div class="summary_review"><strong>Résumé :&nbsp;</strong><?= $bookReview->getSummary(); ?></div>
                    </div>
            </div>
            <div class="review_card">
                        <div class="review_image">
                            <img src="<?= $bookReview->getBookpicture(); ?>" alt="review_image" class="review_image">
                        </div>
                        <div class="our_review"><strong>Notre revue :&nbsp;</strong><?= $bookReview->getReview(); ?></div>
            </div>
    </div>

    <div class="review_link">
        <!-- envoi vers la page des oeuvres de l\auteur demandé -->
        <?php $updateUrl = $router->generate('author-artwork', ['author' => $bookReview->getAuthor()]) ?>
        <a class="review_link" href="<?= $updateUrl; ?>" >Voir plus de livres de <?= $bookReview->getName(); ?></a>
    </div>

