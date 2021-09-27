<?php

namespace App\Controllers;

class CoreController {

    /**
     * Méthode pour afficher le code HTML des views
     */
    protected function show(string $viewName, $viewData = []) {
        
        global $router;
        $viewData['currentPage'] = $viewName; 

        // url absolue pour les assets
        $viewData['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';
        // url absolue pour la racine du site
        $viewData['baseUri'] = $_SERVER['BASE_URI'];

        extract($viewData);

        require_once __DIR__.'/../views/layout/header.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/layout/footer.tpl.php';
    }
}
