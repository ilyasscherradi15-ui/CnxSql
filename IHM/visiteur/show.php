<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visiteur</title>
</head>
<body>
    <h2>Informations du visiteur</h2>
    <p>ID : <?= $V['ID'] ?></p>
    <p>Nom : <?= $V['NOM'] ?></p>
    <p>Prénom : <?= $V['PRENOM'] ?></p>
    <p>Email : <?= $V['EMAIL'] ?></p>
    <a href="<?= BASE ?>Visiteur/all">Retour</a>
</body>
</html>