<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modif</title>
</head>

<body>

    <?php
    foreach ($tab1 as $key) { ?>

        <form method="POST">
            <label for="nom">Nom :</label><br>
            <input type="text" name="nom" value="<?php echo $key['nom']; ?>"><br>
            <label for="prenom">Prénom : </label><br>
            <input type="text" name="prenom" value="<?php echo $key['prenom']; ?>"><br>
            <label for="tel">Téléphone :</label><br>
            <input type="text" name="tel" value="<?php echo $key['tel']; ?>"><br>
            <label for="mail">Mail :</label><br>
            <input type="text" name="mail" value="<?php echo $key['mail']; ?>"><br>
            <input type=submit name="submitModif" value="Modifier contacts">
        <?php
    }
        ?>
        </form>
</body>

</html>