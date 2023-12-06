<?php 
include __DIR__ ."/Product.php";

class Game extends Product
{
  public int $appid;
  public string $name;
  public string $image;

  function __construct($id, $title, $image, $price, $quantita)
  {
    parent::__construct($price, $quantita);

    $this->appid = $id;
    $this->name = $title;
    $this->image = $image;

  }
  public function printedCard()
  {
    $cardItem = [
      'id' => $this->appid,
      'image' => $this->image,
      'title' => $this->name,
      'price' => $this->price,
      'quantita' => $this->quantita
    ];
    return $cardItem;
  }
  public static function fetchAll()
  {

      $GameString = file_get_contents(__DIR__ . '/steam_db.json');
      $GameList = json_decode($GameString, true);

      $Games = [];
      foreach ($GameList as $item) {
          $quantita = rand(0, 100);
          $price = rand(5, 200);
          $image = 'https://cdn.cloudflare.steamstatic.com/steam/apps/' . $item['appid'] . '/header.jpg';
          $Games[] = new Game($item['appid'], $item['name'], $image, $price, $quantita);
      }
      return $Games;
  }
}

?>