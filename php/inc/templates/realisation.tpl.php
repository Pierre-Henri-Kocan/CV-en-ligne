<?php include 'php/inc/data.php'; ?>

<div class="realisation">
    <?php foreach ($realisationList as $value) : ?>
        <a href="<?= $value['link'] ?>" target="_blank"><div class="card-realisation">
            <img src=<?= $value['picture'] ?> class="card-realisation-picture" alt="logo-tribu">
            <div class="card-realisation-block">
                <h5 class="card-realisation-title"><?= $value['title'] ?></h5>
                <?php foreach ($value['detail'] as $key => $value) : ?>
                <p class="card-realisation-detail"><?= $value ?></p>
                <?php endforeach; ?>
            </div>
        </div></a>
    <?php endforeach; ?>   
</div>

<div class="pagination">
    <a class="pagination-button" href="index.php?page=technology">&larr;</a>
    <a class="pagination-button" href="#top">&uarr;</a>
    <a class="pagination-button" href="index.php?page=information">&rarr;</a>
</div>