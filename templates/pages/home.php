<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Élection</title>
</head>
<body>
<div class="container">
    <h1>Élection des délégués</h1>
    <form method="get">
        <button type="submit" name="page" value="/">Accueil</button>
        <button type="submit" name="page" value="/groupe">Groupes</button>
        <button type="submit" name="page" value="/utilisateurs">Utilisateurs</button>
        <button type="submit" name="page" value="/election">Élections</button>
    </form>

    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        header("Location: $page");
        exit();
    }
    ?>
</div>
</body>
</html>
