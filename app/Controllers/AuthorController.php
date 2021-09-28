<?php

namespace App\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Type;

class AuthorController extends CoreController {


    /* Méthode s'occupant de la liste des auteurs */

    public function list()
    {
        $allAuthors = Author::findAll();

        $this->show('author/list', [
            'pageTitle' => 'Liste des auteurs',
            'authorList' => $allAuthors,
        ]);
    }

    /* Méthode s'occupant de la page des oeuvres de chaque auteur */

    public function artwork($id)
    {
        $artworks = Author::artwork($id);

        $this->show('author/artwork', [
            'pageTitle' => 'Oeuvres de l\'auteur',
            'artworks' => $artworks,
        ]);
    }
}
