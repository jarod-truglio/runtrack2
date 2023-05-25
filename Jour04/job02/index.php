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
        echo '<table>';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';

        foreach ($_GET as $key => $value) {
            echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
        }

        echo '</table>';
    ?>
</body>
</html>