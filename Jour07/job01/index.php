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

        if (!isset($_SESSION['nbvisites'])) {
            $_SESSION['nbvisites'] = 0;
        }

        if (isset($_POST['reset'])) {
            $_SESSION['nbvisites'] = 0;
        }

        $_SESSION['nbvisites']++;

        echo "Nombre de visites : " . $_SESSION['nbvisites'];
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