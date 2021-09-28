
    <div class="main">
        <div class="intro">
<!--             <img src="assets/images/Camille_corot_liseuse.jpg" alt="imageintro" class="introimage"> -->
            <div class="intro_text">
                <h2>Bienvenue dans le blog de lecture <strong>Lire ou ne pas lire...</strong>...</h2>
                <p>Vous trouverez dans ce blog nos avis sur nos lectures. Vous cherchez votre prochaine lecture? Choisissez votre livre par genre, par avis, par auteur (e)...Et si vous voulez être tenu(e) au courant de la sortie de chaque avis, inscrivez vous à notre newsletter. <strong>Bonne lecture!</strong></p>
            </div>
        </div>
        

        <div class="headline">
            <div class="headline_intro">
                    <div class="headline_text">
                    <?php foreach($bookList as $currentBook) : ?>
                        <h2>L'oeuvre à la une</h2>
                        <h3><?= $currentBook->getTitle(); ?></h3>
                        <h4><?= $currentBook->getName(); ?></h4>
                        <div><strong>Editeur :&nbsp;</strong><?= $currentBook->getEditor(); ?></div>
                        <div><strong>Genre :&nbsp;</strong><?= $currentBook->getTypename(); ?></div>
                        <div><strong>Notre avis :&nbsp;</strong><?= $currentBook->getRatename(); ?></div>
                        <p><?= $currentBook->getSummary(); ?></p>
                        <?php $updateUrl = $router->generate('book-review', ['bookId' => $currentBook->getBookid()]) ?>
                        <a href="<?= $updateUrl; ?>" >Voir plus</a>
                    <?php endforeach; ?>
                    </div>
            </div>
            <?php foreach($bookList as $currentBook) : ?>
            <img src="<?= $currentBook->getBookpicture();?>" alt="imageintro" class="introimage">
            <?php endforeach; ?>
        </div>    

        <div class="newsletter">
            <img src="assets/images/operatrice.jpg" alt="imagenewsletter" class="newsletter_image">
            <div class="newsletter_text">
                <h3>Restez au courant</h3>
                <p>Vous voulez recevoir une alerte à chaque nouvelle revue de livre? Inscrivez vous à notre newsletter!</p>
                <div class="newsletter_form">
                    <form action="/leads-subscribing-newsletter" method="post">
                        <div><label for="email"></label> <input id="email" name="subscriber_email" type="email" placeholder="votre e-mail"></div>
                        <div><button class="submit_button" type="submit">S&#39;abonner</button> </div>
                    </form>
                </div>
                <p class="newsletter_mentions">En vous inscrivant à la nexsletter, vous acceptez de donner accès à Lire ou ne pas lire à votre e-mail.Cette information est strictement confidentielle. Elle est destinée à l’usage exclusif de Lire ou ne pas lire. Conformément aux dispositions de la loi Informatique et Libertés du 6 Janvier 1978, le Client dispose d'un droit total d'accès, de modification, de rectification et de suppression des données personnelles le concernant. Le Client peut exercer son droit en envoyant un email au service client de Lire ou ne pas lire à contact@lireounepaslire.com</p>
            </div>
        </div>
    </div>