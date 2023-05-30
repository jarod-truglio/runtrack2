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
        function calcule($nombre1, $operateur, $nombre2) {
            switch ($operateur) {
                case '+':
                    return $nombre1 + $nombre2;
                case '-':
                    return $nombre1 - $nombre2;
                case '*':
                    return $nombre1 * $nombre2;
                case '/':
                    return $nombre1 / $nombre2;
                case '%':
                    return $nombre1 % $nombre2;
                default:
                    return "Opérateur invalide";
            }
        }

        $resultat = calcule(5, '+', 3);
        echo $resultat;
        
        $resultat = calcule(10, '*', 4);
        echo $resultat;
    ?>
</body>
</html>