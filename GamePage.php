<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Model/Games.php";
$Games = Game::fetchAll();
?>

<section class="container">
  <h2>Games</h2>
  <div class="row">
    <?php foreach ($Games as $game) {
      $game->printCard();
    } ?>
  </div>

</section>

<?php
include __DIR__ . "/Views/footer.php";
?>