<?php

class HomeController extends Controller {

    public function index() {
        // -> Manipuler le modèle (entité, manager, ... tout ce qui concerne les données).
        // -> Invoquer les Manager pour obtenir de l'information
        // -> Traier des formulaires
        // -> Vérifier si un utilisateur est connecté
        // -> Manipuler une entité avant de l'envoyer au manager pour modification (pour sauvegarder)
        // -> Afficher la bonne vue
        // -> Fournir à la bonne vue, les variables éventuelles à afficher

        $this->render('index.view.php');
    }
}
