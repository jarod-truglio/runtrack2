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
        $str = "Certaines choses changent, et d'autres ne changeront jamais.";

        $str_length = strlen($str);

        $str_modifiee = "";

        for ($i = 0; $i < $str_length; $i++) {
            $caractere_actuel = $str[$i];
            $caractere_suivant = $str[($i + 1) % $str_length];
            $str_modifiee .= $caractere_suivant;
        }

        echo $str_modifiee;
    ?>
</body>
</html>