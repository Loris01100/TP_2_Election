<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Election</title>
</head>
<body>

<h1><?php echo htmlspecialchars($data['message']); ?></h1>
<p>État de l'élection : <?php echo htmlspecialchars($data['state']); ?></p>

<h2>Candidats</h2>
<ul>
    <?php foreach ($data['candidats'] as $candidat): ?>
        <li><?php echo htmlspecialchars($candidat['nomUtilisateur'] . ' ' . $candidat['prenomUtilisateur']); ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>
