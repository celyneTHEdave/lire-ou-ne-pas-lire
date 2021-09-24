<?php

namespace App\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Type;

class BookController extends CoreController {


    /* Méthode s'occupant de la liste des livres */

    public function list()
    {
        $allBooks = Book::findAll();

        $this->show('book/list', [
            'pageTitle' => 'Liste des livres',
            'bookList' => $allBooks,
        ]);
    }
}
