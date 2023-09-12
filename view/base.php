<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Liste des contacts</h1>
    <?php
    foreach ($tab as $key) {
        echo $key['id'] . ' ' . $key['nom'] . ' ' . $key['prenom'] . ' ' . $key['tel'] .  '<form method="post">' . '<button  name="submitUpdate" value="' . $key['id'] . '"> modifier</button>' .  '</form>' . '<br>';
    }
    ?>
    <form method="POST">
        <button type="submit" name="Cree">Créer contacts</button><br>
        <label for="idSupp">ID :</label>
        <input type="number" name="idSupp">
        <input type="submit" name="supp" value="SUPPRIMER">
    </form>
</body>

</html>