<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
        $str = "Les choses que l'on possède finissent par nous posséder.";

        $str_inverse = "";

        for ($i = strlen($str) - 1; $i >= 0; $i--) {
            $str_inverse .= $str[$i];
        }

        echo $str_inverse;
    ?>
</body>
</html>