<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec transformations de texte</title>
    <style>
        strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Formulaire avec transformations de texte</h1>
    <?php
    function mettreEnGras($str) {
        $mots = explode(' ', $str);
        $resultat = '';
        foreach ($mots as $mot) {
            if (ctype_upper(substr($mot, 0, 1))) {
                $resultat .= '<strong>' . $mot . '</strong> ';
            } else {
                $resultat .= $mot . ' ';
            }
        }
        return $resultat;
    }

    function decaleCaracteres($str, $decalage = 2) {
        $resultat = '';
        $longueurAlphabet = 26;
        $str = strtolower($str);

        for ($i = 0; $i < strlen($str); $i++) {
            $caractere = $str[$i];
            if (ctype_alpha($caractere)) {
                $codeAscii = ord($caractere);
                $codeAsciiDecale = ($codeAscii - ord('a') + $decalage) % $longueurAlphabet + ord('a');
                $caractereDecale = chr($codeAsciiDecale);
                $resultat .= $caractereDecale;
            } else {
                $resultat .= $caractere;
            }
        }

        return $resultat;
    }

    function ajouterUnderscore($str) {
        $mots = explode(' ', $str);
        $resultat = '';
        foreach ($mots as $mot) {
            if (substr($mot, -2) === 'me') {
                $resultat .= $mot . '_ ';
            } else {
                $resultat .= $mot . ' ';
            }
        }
        return $resultat;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $str = $_POST['str'];
        $fonction = $_POST['fonction'];

        switch ($fonction) {
            case 'gras':
                $resultat = mettreEnGras($str);
                break;
            case 'cesar':
                $decalage = isset($_POST['decalage']) ? intval($_POST['decalage']) : 2;
                $resultat = decaleCaracteres($str, $decalage);
                break;
            case 'plateforme':
                $resultat = ajouterUnderscore($str);
                break;
            default:
                $resultat = $str;
                break;
        }

        echo '<p>Résultat : ' . $resultat . '</p>';
    }
    ?>
    <form action="index.php" method="post">
        <label for="str">Texte :</label>
        <input type="text" id="str" name="str" required>
        <br>
        <label for="fonction">Transformation :</label>
        <select id="fonction" name="fonction">
            <option value="gras">