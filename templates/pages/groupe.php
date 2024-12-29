<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Liste des Groupes</title>
</head>
<body>
<h1>Liste des Groupes</h1>

<!-- Formulaire pour naviguer vers d'autres pages -->
<form method="get">
    <button type="submit" name="page" value="/">Accueil</button>
    <button type="submit" name="page" value="/groupe">Groupes</button>
    <button type="submit" name="page" value="/utilisateurs">Utilisateurs</button>
    <button type="submit" name="page" value="/election">Élections</button>
</form>

<!-- Affichage des groupes -->
<?php if (!empty($groupes)): ?>
    <ul>
        <?php foreach ($groupes as $groupe): ?>
            <li>
                ID : <?= htmlspecialchars($groupe->getIdGroupe()) ?> -
                Nom : <?= htmlspecialchars($groupe->getLibelleGroupe()) ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucun groupe trouvé.</p>
<?php endif; ?>

<!-- Détails du groupe, affiché s'il y en a un spécifique -->
<?php if (isset($groupe)): ?>
    <h2>Détails du Groupe</h2>
    <p>ID : <?= htmlspecialchars($groupe->getIdGroupe()) ?></p>
    <p>Nom du groupe : <?= htmlspecialchars($groupe->getLibelleGroupe()) ?></p>
<?php endif; ?>

</body>
</html>
