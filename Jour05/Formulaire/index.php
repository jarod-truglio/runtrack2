<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if (isset($_POST['style']) == false) {
    } else if ($_POST['style'] == 'style1') {
        echo  ' <link href="style1.css" rel="stylesheet">';
    } else if ($_POST['style'] == 'style2') {
        echo  '<link href="style2.css" rel="stylesheet">';
    } else if ($_POST['style'] == 'style3') {
        echo  '<link href="style3.css" rel="stylesheet">';
    }
    
    ?>
</head>

<body>
    <main>
        <form method="post" action="./index.php">
            <select name="style" id="style">
                <option value="">--Choisissez le Style-</option>
                <option value="style1">Style 1</option>
                <option value="style2">Style 2</option>
                <option value="style3">Style 3</option>
            </select>
            <input type="submit">
        </form>
        <p>
            Changez le style de la page !!
        </p>
    </main>
</body>

</html>