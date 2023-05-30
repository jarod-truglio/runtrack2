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
        if (!isset($_COOKIE['nbvisites'])) {
            setcookie('nbvisites', 0, time() + 86400);
        }

        if (isset($_POST['reset'])) {
            setcookie('nbvisites', 0, time() + 86400);
        }

        if (isset($_COOKIE['nbvisites'])) {
            $_COOKIE['nbvisites']++;
        }

        echo "Nombre de visites : " . $_COOKIE['nbvisites'];
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compteur de visites</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <input type="submit" name="reset" value="Réinitialiser">
        </form>
</body>
</html>