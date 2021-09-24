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
}
