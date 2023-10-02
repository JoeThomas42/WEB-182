<?php

class GameCharacter
{
  private $playerName;
  private $score;

  public function getPlayerName()
  {
    return $this->playerName;
  }

  public function setPlayerName($playerName)
  {
    $this->playerName = $playerName;
    return $this;
  }
  
  public function getScore()
  {
    return $this->score;
  }

  public function setScore($score)
  {
    $this->score = $score;
    return $this;
  }

}
