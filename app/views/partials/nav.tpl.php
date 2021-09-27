
    <nav class="header">
        <div class="menu">
            <a href="<?= $router->generate('main-home'); ?>"><span class="blogtitle">Lire &nbsp;</span> ou ne pas lire...</a>

            <div class="nav">
                <ul class="">
                    <li>
                        <a class="" href="<?= $router->generate('book-list'); ?>">Livres</a>
                    </li>
                    <li>
                        <a class="" href="<?= $router->generate('author-list'); ?>">Auteur(e)s</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
