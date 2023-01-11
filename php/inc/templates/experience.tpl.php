<?php include 'php/inc/data.php'; ?>

<div class="timeline">
  <div class="outer">
    <?php foreach ($experienceList as $value) : ?>
      <div class="card-experience">
        <div class="info">
          <h3 class="title"><?= $value['title'] ?></h3>
          <h4 class="card-experience-date"><?= $value['date'] ?></h4>
          <h5 class="card-experience-location"><?= $value['location'] ?></h5>
          <?php foreach ($value['detail'] as $key => $value) : ?>
            <p class="card-experience-detail"><?= $value ?></p>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<div class="pagination">
  <a class="pagination-button" href="./">&larr;</a>
  <a class="pagination-button" href="#top">&uarr;</a>
  <a class="pagination-button" href="index.php?page=formation">&rarr;</a>
</div>