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
        $str = "I'm sorry Dave I'm afraid I can't do that.";

        $voyelles = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');

        $resultat = "";

        for ($i = 0; $i < strlen($str); $i++) {
            if (in_array($str[$i], $voyelles)) {
                $resultat .= $str[$i];
            }
        }

        echo $resultat;
    ?>
</body>
</html>