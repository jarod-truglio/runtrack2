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
        $nombres = array(200, 204, 173, 98, 171, 404, 459);

        foreach ($nombres as $nombre) {
            if ($nombre % 2 == 0) {
                echo $nombre . " est paire<br />";
            } else {
                echo $nombre . " est impaire<br />";
            }
        }
    ?>
</body>
</html>