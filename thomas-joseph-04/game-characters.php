<!DOCTYPE html>
<html>

  <head>
    <title>Game Characters</title>
    <link rel="stylesheet" href="sample.css">
  </head>

  <body>
    <?php
    include("inc-game-character-object.php");

    // ALternate instancing for use with add-scores.html I made for testing purposes
    // $players[] = (new GameCharacter)->setPlayerName($_POST["playerName1"])->setScore($_POST["score1"]);
    // $players[] = (new GameCharacter)->setPlayerName($_POST["playerName2"])->setScore($_POST["score2"]);

    $players[] = (new GameCharacter)->setPlayerName("Joe-Bob")->setScore(12);
    $players[] = (new GameCharacter)->setPlayerName("Frankie the Fantastic")->setScore(300046576);

    $winner = "";
    $highestScore = -1;

    foreach ($players as $player) {
      if ($player->getScore() > $highestScore) {
        $highestScore = $player->getScore();
        $winner = $player->getPlayerName() . " wins!";
      } elseif ($player->getScore() == $highestScore) {
        $winner = "Tie game!";
      }
    }
    ?>

    <h1><?= $winner ?></h1>

    <table border="1">
      <tr>
        <th>Player Name</th>
        <th>Score</th>
      </tr>

      <?php foreach ($players as $player) { ?>
        <tr>
          <td class=right>
            <?= $player->getPlayerName() ?>
          </td>
          <td class=right>
            <?= $player->getScore() ?>
          </td>
        </tr>
      <?php } ?>

    </table>
  </body>

</html>
