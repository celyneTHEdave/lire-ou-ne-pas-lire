<?php

namespace App\Controllers;

use App\Models\Author;
use App\Models\Type;
use App\Models\Book;

class MainController extends CoreController {

    /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function home()
    {

        $bookForHome = Book::findBookHomepage();
        $this->show('main/home', [
            'pageTitle' => 'Home',
            'bookList' => $bookForHome,
        ]);
    }
}
