<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <form action="affichage_maison.php" method="post">
        <label for="largeur">Largeur :</label>
        <input type="text" id="largeur" name="largeur" required><br>
        
        <label for="hauteur">Hauteur :</label>
        <input type="text" id="hauteur" name="hauteur" required><br>
        
        <input type="submit" value="Afficher la maison">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
                $largeur = $_POST['largeur'];
                $hauteur = $_POST['hauteur'];
                
                // Vérifier si les valeurs sont des nombres
                if (is_numeric($largeur) && is_numeric($hauteur)) {
                    // Afficher la maison
                    echo '<pre>';
                    for ($i = 0; $i < $hauteur; $i++) {
                        for ($j = 0; $j < $largeur; $j++) {
                            if ($i === 0 || $j === 0 || $j === $largeur - 1) {
                                echo '*';
                            } else {
                                echo ' ';
                            }
                        }
                        echo '<br>';
                    }
                    echo '</pre>';
                } else {
                    echo "Veuillez entrer des valeurs numériques pour la largeur et la hauteur.";
                }
            } else {
                echo "Veuillez saisir la largeur et la hauteur de la maison.";
            }
        }
    ?>
</body>
</html>