<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $count = count($_GET);
        echo "Le nombre d'arguments GET envoyé est : " . $count;
    }
    ?>
    <form action="" method="get">
        <input type="text" name="field1" placeholder="Champ 1"><br>
        <input type="text" name="field2" placeholder="Champ 2"><br>
        <input type="text" name="field3" placeholder="Champ 3"><br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>