<?php

namespace App\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Type;

class TypeController extends CoreController {


    public function list()
    {
        // récupérer la liste de toutes les types
        $allTypes = Type::findAll();

        $this->show('Type/list', [
            'pageTitle' => 'Liste des genres',
            'TypeList' => $allTypes,
        ]);
    }
}
