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
        // on récupère la liste des catégories
        $bookForHome = Book::findBookHomepage();

        // On appelle la méthode show() de l'objet courant
        // En argument, on fournit le fichier de Vue
        // Par convention, chaque fichier de vue sera dans un sous-dossier du nom du Controller
        $this->show('main/home', [
            'pageTitle' => 'Home',
            'bookList' => $bookForHome,
        ]);
    }
}
