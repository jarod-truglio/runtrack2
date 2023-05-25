<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <form action="validation.php" method="get">
        <label for="nombre">Nombre :</label>
        <input type="text" id="nombre" name="nombre" required><br>
        
        <input type="submit" value="Valider">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (isset($_GET['nombre'])) {
                $nombre = $_GET['nombre'];
                
                if (is_numeric($nombre)) {
                    if ($nombre % 2 == 0) {
                        echo "Nombre pair";
                    } else {
                        echo "Nombre impair";
                    }
                } else {
                    echo "Veuillez entrer un nombre valide.";
                }
            } else {
                echo "Veuillez entrer un nombre.";
            }
        }
    ?>
</body>
</html>