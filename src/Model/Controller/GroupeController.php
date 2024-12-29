<?php

namespace app\Model\Controller;

require_once 'vendor/autoload.php';
use app\Model\Entity\BDConnexion;
use app\Model\Repository\GroupeRepository;

class GroupeController
{
    private \PDO $pdo;

    public function __construct()
    {
        $this->pdo = BDConnexion::getOrCreateInstance()->getPdo();
    }

    public function displayGroupById(int $idGroupe): void
    {
        $repo = new GroupeRepository($this->pdo);

        $groupe = $repo->getGroupById($idGroupe);

        if ($groupe) {
            require_once "templates/pages/groupe.php";
        } else {
            echo "Aucun groupe trouvé avec l'ID : $idGroupe";
        }
    }

    public function checkIfGroupExists(int $idGroupe): bool
    {
        $repo = new GroupeRepository($this->pdo);
        $groupe = $repo->getGroupById($idGroupe);

        return $groupe !== null;
    }

    public function displayAllGroups(): void
    {
        $repo = new GroupeRepository($this->pdo);

        $groupes = $repo->getAll();

        require_once "templates/pages/groupe.php";
    }

    public function getGroupDetails(int $idGroupe): void
    {
        $repo = new GroupeRepository($this->pdo);

        // Récupération du groupe
        $groupe = $repo->getGroupById($idGroupe);

        if ($groupe) {
            echo "ID : " . $groupe->getIdGroupe() . "<br>";
            echo "Nom du groupe : " . $groupe->getLibelleGroupe() . "<br>";
        } else {
            echo "Aucun groupe trouvé pour l'ID : $idGroupe";
        }
    }

    public function afficherGroupe(int $idGroupe): void
    {
        $repo = new GroupeRepository($this->pdo);

        $groupe = $repo->getGroupById($idGroupe);

        if ($groupe) {
            echo "<h2>Groupe Détails</h2>";
            echo "ID : " . htmlspecialchars($groupe->getIdGroupe()) . "<br>";
            echo "Nom du groupe : " . htmlspecialchars($groupe->getLibelleGroupe()) . "<br>";
        } else {
            echo "Aucun groupe trouvé pour l'ID : $idGroupe";
        }
    }
}
