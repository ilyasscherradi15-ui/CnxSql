<?php $edit = isset($V); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $edit ? 'Modifier' : 'Ajouter' ?> un visiteur</title>
</head>
<body>
    <h2><?= $edit ? 'Modifier' : 'Ajouter' ?> un visiteur</h2>
    <form method="post">
        Nom : <input type="text" name="nom" value="<?= $edit ? $V['NOM'] : '' ?>" required><br>
        Prénom : <input type="text" name="prenom" value="<?= $edit ? $V['PRENOM'] : '' ?>" required><br>
        Email : <input type="email" name="email" value="<?= $edit ? $V['EMAIL'] : '' ?>" required><br>
        <button type="submit">Enregistrer</button>
    </form>
    <a href="<?= BASE ?>Visiteur/all">Retour</a>
</body>
</html>