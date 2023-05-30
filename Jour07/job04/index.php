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
        if (isset($_POST['connexion'])) {
            $prenom = $_POST['prenom'];
            setcookie('prenom', $prenom, time() + 3600); // Le cookie expire dans 1 heure
            header("Refresh:0"); // Rafraîchir la page pour afficher le message de bienvenue
        }

        if (isset($_POST['deco'])) {
            setcookie('prenom', '', time() - 3600); // Supprimer le cookie en le rendant expiré
            header("Refresh:0"); // Rafraîchir la page pour afficher le formulaire de connexion
        }

        $prenom = isset($_COOKIE['prenom']) ? $_COOKIE['prenom'] : '';
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire de connexion</title>
    </head>
    <body>
        <?php if (!empty($prenom)) : ?>
            <h1>Bonjour <?php echo $prenom; ?> !</h1>
            <form action="index.php" method="post">
                <input type="submit" name="deco" value="Déconnexion">
            </form>
        <?php else : ?>
            <h1>Formulaire de connexion</h1>
            <form action="index.php" method="post">
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom">
                <input type="submit" name="connexion" value="Connexion">
            </form>
        <?php endif; ?>
</body>
</html>