<?php

use app\Model\Controller\ElectionController;
use app\Model\Controller\GroupeController;
use app\Model\Controller\UtilisateurController;

require_once __DIR__ . '/vendor/autoload.php';
session_start();

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($path === '/') {
    include_once __DIR__ . '/templates/pages/home.php';
}

if ($path === '/groupe') {
    include_once __DIR__ . '/src/Model/Controller/GroupeController.php';

    $groupeController = new GroupeController();

    if (isset($_GET['idGroupe'])) {
        $idGroupe = (int) $_GET['idGroupe'];
        $groupeController->afficherGroupe($idGroupe);
    } else {
        $groupeController->displayAllGroups();
    }
}
if ($path === '/utilisateurs') {
    include_once __DIR__ . '/src/Model/Controller/UtilisateurController.php';
    $utiController = new UtilisateurController();
    $utiController->afficherListeUtilisateurs();
}
if ($path === '/election') {
    include_once __DIR__ . '/src/Model/Controller/ElectionController.php';
    include_once __DIR__ . '/src/Model/Controller/GroupeController.php';

    $electionController = new ElectionController();
    $groupeController = new GroupeController();

    echo "<h1>Élections</h1>";
    $groupe = new \app\Model\Entity\Groupe(1, "Nom du Groupe");
    $electionController->InitializeElection($groupe);

    echo "<h2>Liste des groupes</h2>";
    $groupeController->displayAllGroups();
}
