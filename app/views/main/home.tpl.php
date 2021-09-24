
    <div class="main">
        <div class="intro">
            <img src="assets/images/Camille_corot_liseuse.jpg" alt="imageintro" class="introimage">
            <div class="intro_text">
                <h2>Bienvenue dans le blog de lecture <strong>Lire ou ne pas lire...</strong>...</h2>
                <p>Vous trouverez dans ce blog nos avis sur nos lectures. Vous cherchez votre prochaine lecture? Choisissez votre livre par genre, par avis, par auteur (e)...Et si vous voulez être tenu(e) au courant de la sortie de chaque avis, inscrivez vous à notre newsletter. <strong>Bonne lecture!</strong></p>
            </div>
        </div>
        

        <div class="headline">
            <div class="headline_intro">
                <h2>L'oeuvre à la une</h2>
                <div class="headline_card"><?php foreach($bookList as $currentBook) : ?>
                    <div class="headline_text">
                        <h3><?= $currentBook->getTitle(); ?></h3>
                        <div><?= $currentBook->getAuthor(); ?></div>
                        <div><?= $currentBook->getEditor(); ?></div>
                        <div><?= $currentBook->getPublished_in(); ?></div>
                        <div><?= $currentBook->getType(); ?></div>
                        <div><?= $currentBook->getRate(); ?></div>
                        <p><?= $currentBook->getSummary(); ?></p>
                        <a href="<?= $router->generate('author-list'); ?>" >Voir plus</a>
                    </div>
                <?php endforeach; ?></div>
            </div>
            <img src="assets/images/bridgetjones1.png" alt="imageintro" class="introimage">
        </div>    

        <div class="newsletter">
            <h2>Restez au courant</h3>
            <p>Vous voulez recevoir une alerte à chaque nouvelle revue de livre? Inscrivez vous à notre newsletter!</p>
            <div class="newsletter_form">
                <form action="/leads-subscribing-newsletter" method="post">
                    <div><label for="email"></label> <input id="email" name="subscriber_email" type="email" placeholder="votre e-mail"></div>
                    <div><button class="submit_button" type="submit">S&#39;abonner</button> </div>
                </form>
            </div>
        </div>
    </div>