<?php


use src\Classe\DAO\UtilisateurDAO;

$utiDAO = new UtilisateurDAO($pdo);

$allUti = $utiDAO->getAllUtilisateur();
echo "Eleve " . count($allUti) . " eleves.\n";