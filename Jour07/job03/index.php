<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();

        if (isset($_POST['prenom'])) {
            $prenom = $_POST['prenom'];
            $_SESSION['prenoms'][] = $prenom;
        }

        if (isset($_POST['reset'])) {
            unset($_SESSION['prenoms']);
        }

        $prenoms = isset($_SESSION['prenoms']) ? $_SESSION['prenoms'] : array();
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liste de prénoms</title>
    </head>
    <body>
        <h1>Liste de prénoms</h1>
        <form action="index.php" method="post">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom">
            <input type="submit" value="Ajouter">
        </form>

        <?php if (!empty($prenoms)) : ?>
            <h2>Liste des prénoms :</h2>
            <ul>
                <?php foreach ($prenoms as $prenom) : ?>
                    <li><?php echo $prenom; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form action="index.php" method="post">
            <input type="submit" name="reset" value="Réinitialiser">
        </form>
</body>
</html>