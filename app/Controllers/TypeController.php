<?php

namespace App\Controllers;

use App\Models\Brand;
use App\Models\Category;

class CategoryController extends CoreController {


    public function list()
    {
        // récupérer la liste de toutes les catégories
        $allCategories = Category::findAll();

        // on peut accéder aux propriétés et méthodes statiques en utilisant la notation
        // 
        // dump(Category::NOMBRE_CATEGORIE_ACCUEIL_BACK);
        // dump(Category::$test);


        $this->show('category/list', [
            'pageTitle' => 'Liste des catégories',
            'categoryList' => $allCategories,
        ]);
    }

    /**
     * Affiche le formulaire pour réordonner les catégories en page d'accueil
     *
     * @return void
     */
    public function order()
    {
        // récupérer toute les catégories pour compléter les listes déroulantes
        $allCategories = Category::findAll();

        $this->show('category/order', [
            'pageTitle' => 'Ordonner les catégories',
            'allCategoryList' => $allCategories,
            'csrfToken' => $this->generateToken(),
        ]);
    }

    /**
     * Traite le formulaire de réordonnancement des catégories en page d'accueil
     *
     * @return void
     */
    public function orderPost() 
    {
        // 1. récupérer les données
        // 2. valider / nettoyer les données
        // 3. traiter les données 
        /* 
            on recoit un tableau qui resssemble à celui ci
            l'index correspond à la position de la catégorie (mais commence à 0)
            la valeur correspond à la catégorie à placer à cette position
            [
                0 => "2" => la catégorie 2 est en position 1 = (0 + 1)
                1 => "3"
                2 => "1"
                3 => "6"
                4 => "4"
            ]
        */
        // 1. 
        // $emplacements = $_POST['emplacement'];
        // Avec filter_input il existe une option FILTER_REQUIRE_ARRAY 
        $emplacements = filter_input(INPUT_POST, 'emplacement', FILTER_DEFAULT , FILTER_REQUIRE_ARRAY);

        // 2.
        // TODO vérification + gestion des erreurs
        // à vérifer : 
        //   - vérifier qu'il y a exactement 5 éléments distincts
        //   - pas de doublon
        //   - pas de valeur vide
        //   - ce sont bien des entiers
        $formIsValid = true;
        if (count($emplacements) != 5) 
        {  
            $this->addFlash('danger', 'il faut 5 valeurs');
            $formIsValid = false;
        }

        if ($formIsValid == true) {
            // récupérer toutes les catégories
            Category::resetHomeOrders();

            // 3.
            foreach ($emplacements as $currentHomeOrderMinus1 => $currentCategoryId) {
                // $currentHomeOrder = $currentHomeOrderMinus1++;
                // est équivalent à
                // $currentHomeOrder = $currentHomeOrderMinus1;
                // $currentHomeOrderMinus1++;
                // dump($currentHomeOrder) // affiche 0

                // $currentHomeOrder = ++$currentHomeOrderMinus1;
                // est équivalent à
                // $currentHomeOrderMinus1++;
                // $currentHomeOrder = $currentHomeOrderMinus1;
                // dump($currentHomeOrder) // affiche 1
                

                // à partir d'ici on veut modifier une seule catégorie et changer son homeOrder
                // 0 => "2" => la catégorie 2 est en position 1 = (0 + 1)
                $currentCategory = Category::find($currentCategoryId);
                // dd($currentCategory);
                $currentCategory->setHomeOrder($currentHomeOrderMinus1 + 1);

                $currentCategory->update();
            }

            global $router;
            // TODO ajouter un flashmessage

            $this->addFlash('success', 'Les catégories de l\'accueil ont bien été modifiées');
            
            header('Location: ' . $router->generate('category-order'));
        }
        else 
        {
            // on raffiche la page 
            // on ne va pas récupérer les données saisies par l'utilisateur
            // du coup on peut rappeler la méthode order
            // les messages à afficher ont été ajoutées dans la session en message flash
            $this->order();
        }
    }
}
