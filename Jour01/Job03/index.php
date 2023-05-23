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

        $myBool = true;
        $myInt = 42;
        $myString = "Hello World";
        $myFloat = 3.14;

        echo "<table>
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Nom</th>
                        <th>Valeur</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>boolean</td>
                        <td>myBool</td>
                        <td>" . var_export($myBool, true) . "</td>
                    </tr>
                    <tr>
                        <td>integer</td>
                        <td>myInt</td>
                        <td>" . $myInt . "</td>
                    </tr>
                    <tr>
                        <td>string</td>
                        <td>myString</td>
                        <td>" . $myString . "</td>
                    </tr>
                    <tr>
                        <td>float</td>
                        <td>myFloat</td>
                        <td>" . $myFloat . "</td>
                    </tr>
                </tbody>
            </table>";
    ?>
</body>
</html>