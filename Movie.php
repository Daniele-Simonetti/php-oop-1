<?php
class Movie 
{
  public $title;
  // public $director;
  public $year;
  // public $mainAcotr;
  // public $vote;
  public $genre;
  public $minutes;

  public function __construct($title, $year)
  {
    $this->title = $title;
    $this->year = $year;
  }
  public function getMinutes()
  {
    return $this->minutes;
  }
  public function setMinutes($minutes)
  {
    $this->minutes = $minutes;
  }
  public function getGenre()
  {
    return $this->genre;
  }

  public function setGenre($minutes) 
  {
    if ($minutes <= 120) {
      $this->genre = 'cortometraggio';
    } else {
      $this->genre = 'documentario';
    }
  }
    
}


$moovie = new Movie('ciao amore', 2020);
// $moovie->setMinutes(120);
$moovie->setMinutes(120);
echo $moovie->minutes;
var_dump($moovie->setGenre($minutes));
// echo $moovie->setGenre($this->minutes);

