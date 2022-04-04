<?php
require_once "./templates/header.php";
?>

<form method="post" action="register-players.php">
    <div class="welcome">
        <h1>Umpisahang Maglaro ng Tic Tac Toe!</h1>
        <h2>Ilagay ang inyong mga pangalan</h2>

        <div class="player-name">
            <label for="player-x">Unang Manlalarao (X)</label>
            <input type="text" id="player-x" name="player-x" required />
        </div>

        <div class="player-name">
            <label for="player-o">Katunggali (O)</label>
            <input type="text" id="player-o" name="player-o" required />
        </div>

        <button type="submit">Umpisahan</button>
    </div>
</form>

<?php
require_once "./templates/footer.php";
