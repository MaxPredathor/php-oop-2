<?php 
include __DIR__ ."/Product.php";

class Book extends Product
{
  public int $id;
  public string $title;
  public string $overview;
  public string $image;
  public string $authors;



  function __construct($id, $title, $overview, $image, $authors, $price, $quantita)
  {
    parent::__construct($price, $quantita);

    $this->id = $id;
    $this->title = $title;
    $this->overview = $overview;
    $this->image = $image;
    $this->poster_path = $image;
    $this->authors = $authors;

  }
  public function printCard()
  {
    $image = $this->image;
    $title = $this->title;
    $content = substr($this->overview, 0, 100) . "...";
    $price = $this->price;
    $quantita = $this->quantita;
    include __DIR__ . "/../Views/card.php";
  }
  public static function fetchAll()
  {

      $BookString = file_get_contents(__DIR__ . '/books_db.json');
      $BookList = json_decode($BookString, true);

      $Books = [];
      foreach ($BookList as $item) {
          $Bookgenres = [];
          $quantita = rand(0, 100);
          $price = rand(5, 200);
          $Books[] = new Book($item['id'], $item['title'], $item['overview'],  $item['image'], $item['authors'], $price, $quantita);
      }
      return $Books;
  }
}

?>