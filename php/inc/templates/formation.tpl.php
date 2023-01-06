<?php include 'php/inc/data.php'; ?>

<div class="timeline">
  <div class="outer">
    <?php foreach ($formationList as $value) :?>
      <div class="card-formation">
        <div class="info">
          <h3 class="title"><?= $value['title'] ?></h3>
          <h4 class="card-formation-date"><?= $value['date'] ?></h4>
          <h5 class="card-formation-location"><?= $value['location'] ?></h5>
          <?php foreach ($value['detail'] as $key => $value) :?>
          <p class="card-formation-detail"><?= $value ?></p>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>