<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Élection</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Liste des Utilisateurs</h1>

    <form method="get">
        <button type="submit" name="page" value="/">Accueil</button>
        <button type="submit" name="page" value="/groupe">Groupes</button>
        <button type="submit" name="page" value="/utilisateurs">Utilisateurs</button>
        <button type="submit" name="page" value="/election">Élections</button>
    </form>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Groupe</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($utilisateurs)): ?>
            <?php foreach ($utilisateurs as $utilisateur): ?>
                <tr>
                    <td><?= htmlspecialchars($utilisateur->getIdUtilisateur()) ?></td>
                    <td><?= htmlspecialchars($utilisateur->getNomUtilisateur()) ?></td>
                    <td><?= htmlspecialchars($utilisateur->getPrenomUtilisateur()) ?></td>
                    <td><?= htmlspecialchars($utilisateur->getGroupe()->getLibelleGroupe()) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">Aucun utilisateur trouvé.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>
