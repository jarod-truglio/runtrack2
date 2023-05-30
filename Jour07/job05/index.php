<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
        }
        
        td {
            width: 100px;
            height: 100px;
            border: 1px solid black;
            text-align: center;
            font-size: 36px;
            cursor: pointer;
        }
        
        button {
            width: 100%;
            height: 100%;
            font-size: 36px;
        }
    </style>
</head>
<body>
    <h1>Jeu du Morpion</h1>
    <table>
        <tr>
            <td><button onclick="playMove(0, 0)">-</button></td>
            <td><button onclick="playMove(0, 1)">-</button></td>
            <td><button onclick="playMove(0, 2)">-</button></td>
        </tr>
        <tr>
            <td><button onclick="playMove(1, 0)">-</button></td>
            <td><button onclick="playMove(1, 1)">-</button></td>
            <td><button onclick="playMove(1, 2)">-</button></td>
        </tr>
        <tr>
            <td><button onclick="playMove(2, 0)">-</button></td>
            <td><button onclick="playMove(2, 1)">-</button></td>
            <td><button onclick="playMove(2, 2)">-</button></td>
        </tr>
    </table>
    <button onclick="resetGame()">Réinitialiser la partie</button>

    <script>
        let currentPlayer = 'X';
        let gameEnded = false;
        let moves = [
            ["-", "-", "-"],
            ["-", "-", "-"],
            ["-", "-", "-"]
        ];

        function playMove(row, col) {
            if (!gameEnded && moves[row][col] === "-") {
                moves[row][col] = currentPlayer;
                document.getElementById("button-" + row + "-" + col).innerText = currentPlayer;

                if (checkWin(currentPlayer)) {
                    gameEnded = true;
                    alert(currentPlayer + " a gagné !");
                    resetGame();
                    return;
                }

                if (checkDraw()) {
                    gameEnded = true;
                    alert("Match nul !");
                    resetGame();
                    return;
                }

                currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
            }
        }

        function checkWin(player) {
            // Vérification des lignes
            for (let row = 0; row < 3; row++) {
                if (moves[row][0] === player && moves[row][1] === player && moves[row][2] === player) {
                    return true;
                }
            }

            // Vérification des colonnes
            for (let col = 0; col < 3; col++) {
                if (moves[0][col] === player && moves[1][col] === player && moves[2][col] === player) {
                    return true;
                }
            }

            // Vérification des diagonales
            if (moves[0][0] === player && moves[1][1] === player && moves[2][2] === player) {
                return true;
            }
            if (moves[0][2] === player && moves[1][1] === player && moves[2][0] === player) {
                return true;
            }

            return false;
        }

        function checkDraw() {
            for (let row = 0; row < 3; row++) {
                for (let col = 0; col < 3; col++) {
                    if (moves[row][col] === "-") {
                        return false;
                    }
                }
            }
            return true;
        }

        function resetGame() {
            currentPlayer = 'X';
            gameEnded = false;
            moves = [
                ["-", "-", "-"],
                ["-", "-", "-"],
                ["-", "-", "-"]
            ];

            let buttons = document.getElementsByTagName("button");
            for (let i = 0; i < buttons.length; i++) {
                buttons[i].innerText = "-";
            }
        }
    </script>
</body>
</html>