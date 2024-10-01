<!DOCTYPE html>
<html>
<head>
    <title>Game</title>
    <style>
        #game-board {
            width: 500px;
            height: 500px;
            border: 1px solid black;
            position: relative;
        }
        .player {
            width: 20px;
            height: 20px;
            background-color: red;
            position: absolute;
        }
    </style>
</head>
<body>
    <div id="game-board">
        <div id="player1" class="player" style="left: 0px; top: 0px;"></div>
        <div id="player2" class="player" style="left: 400px; top: 400px;"></div>
    </div>

    <script>
        let gameState = {
            player1: { x: 0, y: 0 },
            player2: { x: 4, y: 4 }
        };

        function updateUI() {
            document.getElementById('player1').style.left = `${gameState.player1.x * 20}px`;
            document.getElementById('player1').style.top = `${gameState.player1.y * 20}px`;
            document.getElementById('player2').style.left = `${gameState.player2.x * 20}px`;
            document.getElementById('player2').style.top = `${gameState.player2.y * 20}px`;
        }

        function movePlayer(player, direction) {
            switch (direction) {
                case 'up':
                    gameState[player].y -= 1;
                    break;
                case 'down':
                    gameState[player].y += 1;
                    break;
                case 'left':
                    gameState[player].x -= 1;
                    break;
                case 'right':
                    gameState[player].x += 1;
                    break;
            }
            updateUI();
        }

        document.addEventListener('keydown', event => {
            switch (event.key) {
                case 'ArrowUp':
                    movePlayer('player1', 'up');
                    break;
                case 'ArrowDown':
                    movePlayer('player1', 'down');
                    break;
                case 'ArrowLeft':
                    movePlayer('player1', 'left');
                    break;
                case 'ArrowRight':
                    movePlayer('player1', 'right');
                    break;
            }
        });

        updateUI();
    </script>
</body>
</html>