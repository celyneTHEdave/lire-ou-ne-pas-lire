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
                        <div class="our_review"><strong>Notre revue :&nbsp;</strong><?= $bookReview->getReview(); ?></div>
                    </div>
                    <div class="review_image">
                        <img src="<?= $bookReview->getBookpicture(); ?>" alt="review_image" class="review_image">
                    </div>

            </div>
    </div>

    <a href="<?= $router->generate('book-list'); ?>" >Voir plus de livres</a>