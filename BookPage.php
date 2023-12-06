<?php
include __DIR__ . "/Views/header.php";
include __DIR__ . "/Model/Books.php";
$Books = Book::fetchAll();
?>

<section class="container">
  <h2>Books</h2>
  <div class="row">
    <?php foreach ($Books as $book) {
      $book->printCard($book->printedCard());
    } ?>
  </div>

</section>

<?php
include __DIR__ . "/Views/footer.php";
?>