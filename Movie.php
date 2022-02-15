<?php
class Movie
{
  public $title;
  public $year;
  public $genre;
  public $minutes;

  public function __construct($title, $year, $minutes)
  {
    $this->title = $title;
    $this->year = $year;
    $this->minutes = $minutes;
  }
  public function getGenre()
  {
    return $this->genre;
  }

  public function setGenre()
  {
    if ($this->minutes <= 120) {
      $this->genre = 'cortometraggio';
    } else {
      $this->genre = 'documentario';
    }
  }
}


$moovie = new Movie('ciao', 2020, 120);
// var_dump($moovie->genre);
$moovie->setGenre();
echo '<h1>titolo film:</h1>', $moovie->title, '<br>';
echo 'anno di uscita: ', $moovie->year, '<br>';
echo 'durata in minuti: ', $moovie->minutes, '<br>';
echo 'genere: ', $moovie->genre, '<br>';

$secondMoovie = new Movie('hola', 1915, 270);
$secondMoovie->setGenre();
echo '<h1>titolo film:</h1>', $secondMoovie->title, '<br>';
echo 'anno di uscita: ', $secondMoovie->year, '<br>';
echo 'durata in minuti: ', $secondMoovie->minutes, '<br>';
echo 'genere: ', $secondMoovie->genre, '<br>';