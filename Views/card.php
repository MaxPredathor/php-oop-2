<div class="col-12 col-md-4 col-lg-3">
  <div class="card">
    <img src="<?= $image ?>" class="card-img-top my-ratio" alt="<?= $title ?>">
    <div class="card-body">
      <h5 class="card-title">
        <?= $title ?>
      </h5>
      <p class="card-text">
        <?= $content ?>
      </p>
      <?php if(isset($custom)) { ?>
        <div class="d-flex justify-content-between align-items-flex-start">
          <?= $custom ?>
          <div>
          </div>
        </div>
      <?php } ?>
      <?php if(isset($genre)) { ?>
        <div class="badge bg-primary">
          <?= $genre ?>
        </div>
      <?php } ?>
      <?php if(isset($flag)) { ?>
        <div style="width: 24px">
          <img class="w-100" src="<?= $flag ?>" alt="">
        </div>
      <?php } ?>
      <div>
        Quantatita:
        <?= $quantita ?>
        <?= '- '. $price . '€' ?>
        <!-- <?php if ($sconto > 0) { ?>
            <div>Sonto :
                <!-- <?= $sconto ?> 
            </div>
        <?php } ?> -->
      </div>
    </div>
  </div>
</div>