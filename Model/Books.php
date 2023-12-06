<?php 
include __DIR__ ."/Product.php";

class Book extends Product
{
  public int $_id;
  public string $title;
  public string $longDescription;
  public string $image;
  public array $authors;



  function __construct($id, $title, $overview, $image, $authors, $price, $quantita)
  {
    parent::__construct($price, $quantita);

    $this->_id = $id;
    $this->title = $title;
    $this->longDescription = $overview;
    $this->image = $image;
    $this->authors = $authors;

  }
  public function printedCard()
  {
    $cardItem = [
      'id' => $this->_id,
      'image' => $this->image,
      'title' => $this->title,
      'content' => substr($this->longDescription, 0, 100) . "...",
      'authors' => $this->authors,
      'price' => $this->price,
      'quantita' => $this->quantita
    ];
    return $cardItem;
  }
  public static function fetchAll()
  {

      $BookString = file_get_contents(__DIR__ . '/books_db.json');
      $BookList = json_decode($BookString, true);

      $Books = [];
      foreach ($BookList as $item) {
          $quantita = rand(0, 100);
          $price = rand(5, 200);
          $authorsList = [];
            for ($i = 0; $i < count($item['authors']); $i++) {
                array_push($authorsList, $item['authors'][$i]);
            }
          $Books[] = new Book($item['_id'], $item['title'], $item['longDescription'],  $item['thumbnailUrl'], $item['authors'], $price, $quantita);
      }
      return $Books;
  }
}

?>